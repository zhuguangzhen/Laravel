<?php

namespace App\Http\Controllers\News;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class IndexController extends Controller
{
	//首页
    public function Index(Request $request){
        $data['navigation'] = DB::table('n_navigation')->orderBy('order')->get();//导航
        $data['navigationlist'] = DB::table('n_navigation_list')->orderBy('order')->get();//导航列表
      	$data['bannerlist'] = DB::table('n_banner')->orderBy('order')->get();
      	$data['path'] = config('app.new_url').'image/news/';

      	$setting = DB::table('n_setting')->get();//模块控制
      	$data['setting_path'] = config('app.new_url').'image/news/setting/';
      	foreach($setting as $v){
      		$data[$v->name]['image'] = $v->image;
      		$data[$v->name]['isshow'] = $v->isshow;
      		$data[$v->name]['link'] = $v->link;
      	}

      	$data['newslist'] =  DB::table('n_news')->where('isuse','1')->get();

      	$newstitle =  DB::table('n_article')->select('id','title','create_at','nid','ismain','image')->get();
        foreach($newstitle as $v){
          $v->create = date('Y-m-d',strtotime($v->create_at));
            if($v->ismain){
                $data['ismin'][] = $v;
            }else{
                $data['notmain'][$v->nid][] = $v;
            }
        }

        $data['product'] = DB::table('n_product_desc')->where('isuse','1')->get();
        $data['Bbanner'] = DB::table('n_banner_bottom')->where('isuse','1')->get();
// dd($data);
        return view('/news/index/index',$data);
    }

}
