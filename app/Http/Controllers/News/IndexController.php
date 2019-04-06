<?php

namespace App\Http\Controllers\News;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class IndexController extends Controller
{
	//首页
    public function Index(Request $request){
        $data = $this->settings();

      	$data['newslist'] =  DB::table('n_news')->where('isuse','1')->get();

      	$newstitle =  DB::table('n_article')->whereNull('delete_at')->select('id','title','create_at','nid','ismain','image')->get();
        foreach($newstitle as $v){
          $v->create = date('Y-m-d',strtotime($v->create_at));
            if($v->ismain){
                $data['ismain'][] = $v;
            }else{
                $data['notmain'][$v->nid][] = $v;
            }
        }
        $data['ismain'] = empty($data['ismain'])?'':$data['ismain'];
        $data['product'] = DB::table('n_product_desc')->where('isuse','1')->get();
        $data['Bbanner'] = DB::table('n_banner_bottom')->where('isuse','1')->get();
        $data['store']   = DB::table('n_store')->where('isshow','1')->get();
        $data['video']   = DB::table('n_video')->where('isshow','1')->get();
        $data['videolenth'] = count($data['video']);
// dd($data);
        return view('/news/index/index',$data);
    }

    public function articleList(Request $request){
        $data = $this->settings();
        $data['recomme'] = $this->recomme();

        $data['article'] = DB::table('n_article as a')
            ->leftjoin('n_setting as s','a.module_id','=','s.id')
            ->where('s.isshow','1')
            ->where('s.showType','article')
            ->whereNull('a.delete_at')
            ->select('a.*')
            ->orderBy('create_at','desc')
            ->paginate(5);

        return view('/news/index/articleList',$data);
    }

    public function articleDetail(Request $request){
        $data = $this->settings();
        $data['recomme'] = $this->recomme();
        $id = $request->id;
        $article  = DB::table('n_article')->where('id',$id)->whereNull('delete_at')->first();
        $article2 = DB::table('n_article')->where('id','>',$id)->whereNull('delete_at')->select('title','id')->orderBy('id','asc')->first();
        $article1 = DB::table('n_article')->where('id','<',$id)->whereNull('delete_at')->select('title','id')->orderBy('id','desc')->first();
        if(!empty($article1)){
            $article->pagedowntitle = $article1->title;
            $article->pagedownid = $article1->id;
        }else{
            $article->pagedowntitle = '暂无上一条信息';
            $article->pagedownid = 0;
        }
        if(!empty($article2)){
            $article->pageuptitle = $article2->title;
            $article->pageupid = $article2->id;
        }else{
            $article->pageuptitle = '暂无上一条信息';
            $article->pageupid = 0;
        }
        $data['article'] = $article;

        return view('/news/index/articleDetail',$data);
    }

    public function videoList(Request $request){
        $data = $this->settings();
        $data['recomme'] = $this->recomme();
        $data['article'] = DB::table('n_video as a')
            ->leftjoin('n_setting as s','a.module_id','=','s.id')
            ->where('s.isshow','1')
            ->where('s.showType','video')
            ->whereNull('a.delete_at')
            ->select('a.*')
            ->orderBy('image','desc')
            ->paginate(9);
//        dd($data);

        return view('/news/index/videoList',$data);
    }

    public function videoDetail(Request $request){
        $data = $this->settings();
        $data['recomme'] = $this->recomme();
        $id = $request->id;
        $video = DB::table('n_video')->where('id',$id)->whereNull('delete_at')->first();
        $video1 = DB::table('n_video')->where('id','>',$id)->whereNull('delete_at')->select('title','id')->orderBy('id','asc')->first();
        $video2 = DB::table('n_video')->where('id','<',$id)->whereNull('delete_at')->select('title','id')->orderBy('id','desc')->first();
        if(!empty($video1)){
            $video->pagedowntitle = $video1->title;
            $video->pagedownid = $video1->id;
        }else{
            $video->pagedowntitle = '暂无上一条信息';
            $video->pagedownid = 0;
        }
        if(!empty($video2)){
            $video->pageuptitle = $video2->title;
            $video->pageupid = $video2->id;
        }else{
            $video->pageuptitle = '暂无下一条视频信息';
            $video->pageupid = 0;
        }

        $data['video'] = $video;

        return view('/news/index/videoDetail',$data);
    }

    public function picList(Request $request){
        $data = $this->settings();
        return view('/news/index/picList',$data);
    }

    private function settings(){
        $data['navigation'] = DB::table('n_navigation')->whereNull('delete_at')->orderBy('order')->get();//导航
        $data['navigationlist'] = DB::table('n_navigation_list')->whereNull('delete_at')->orderBy('order')->get();//导航列表
        $data['bannerlist'] = DB::table('n_banner')->where('isuse','1')->whereNull('delete_at')->orderBy('order')->get();
        $data['path'] = config('app.new_url').'image/news/';

        $setting = DB::table('n_setting')->get();//模块控制
        $data['setting_path'] = config('app.new_url').'image/news/setting/';
        foreach($setting as $v){
            $data[$v->name]['image'] = $v->image;
            $data[$v->name]['isshow'] = $v->isshow;
            $data[$v->name]['link'] = $v->link;
        }
        return $data;
    }

    private function recomme(){
        $navigation = DB::table('n_navigation')->where('recomme','1')->whereNull('delete_at')->get();

        $data = [];
        foreach($navigation as $k=>$v){
            $data['navigation'][$k]['name'] = $v->name;
            $data['navigation'][$k]['links'] = $v->link;
            $pidIn[] = $v->id;
        }
        $count = count($pidIn) + 1;

        $navigation2 = DB::table('n_navigation_list')->whereIn('pid',$pidIn)->whereNull('delete_at')->get();

        foreach($navigation2 as $k=>$v){
            $data['navigation'][$count+$k]['name'] = $v->name;
            $data['navigation'][$count+$k]['links'] = $v->link;
        }

        $article = DB::table('n_article')->where('recomme','1')->whereNull('delete_at')->get();
        if($article->isEmpty()){
            $article = '';
        }
        $data['article'] = $article;
        return $data;
    }

}
