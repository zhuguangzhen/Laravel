<?php

namespace App\Http\Controllers\Admin;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class IndexController extends Controller
{
   public function login(Request $request){
   		return view('/admin/index/login');
   }

   public function checklogin(Request $request){
   		$userName = $request->userName;
   		$pass = $request->pass;

   }

   public function index(Request $request){
      return view('admin/index/index');
   }


   //网站基础设置
   public function setting(Request $request){
      $setting = DB::table('n_setting')->get();//模块控制
      $data['setting_path'] = config('app.new_url').'image/news/setting/';
      foreach($setting as $v){
         $data[$v->name]['image'] = $v->image;
         $data[$v->name]['isshow'] = $v->isshow;
         $data[$v->name]['link'] = $v->link;
         $data[$v->name]['showType'] = $v->showType;
      }
//dd($data);
      return view('admin/index/setting',$data);
   }

   //轮播图管理
   public function bannerManage(Request $request){
      $list1 = DB::table('n_banner')->where('isuse','1')->whereNull('delete_at')->orderBy('order')->get();
      $list2 = DB::table('n_banner_bottom')->where('isuse','1')->whereNull('delete_at')->orderBy('order')->get();
      $data['banner1'] = $list1;
      $data['banner2'] = $list2;
      $data['countbanenr1'] = $list1->count() +1;
      $data['path'] = config('app.new_url').'image/news/';
//dd($data);
      return view('admin/index/bannermanage',$data);
   }

   //轮播图 新增编辑
   public function bannerOne(Request $request){
      $args['file'] = $request['file'];
      $isshow = empty($request->isshow)?1:$request->isshow;
      $link = $request->link;
      $args['width'] = $request->wid;
      $args['height'] = $request->hei;
      if(!empty($file)){
         $args['file'] = $request['file'];
         $args['width'] = $request->wid;
         $args['height'] = $request->hei;
         $args['path'] = UP_PATH;
         $data = $this->addpic($args);
         if($data['status']==1){
            $info['image'] = $data['fileName'];
         }
      }
      DB::table('n_banner')
          ->where('id',$request->id)
          ->update($info);
      return back();
   }

   public function bannerTwo(Request $request){
      $args['file'] = $request['file'];
      $isshow = empty($request->isshow)?1:$request->isshow;
      $link = $request->link;
      $args['width'] = $request->wid;
      $args['height'] = $request->hei;
      if(!empty($args['file'])){
         $args['file'] = $request['file'];
         $args['width'] = $request->wid;
         $args['height'] = $request->hei;
         $args['path'] = UP_PATH;
         $data = $this->addpic($args);
         if($data['status']!=0){
            $info['image'] = $data['fileName'];
         }
      }
      if(!empty($info)){
         DB::table('n_banner_bottom')
             ->where('id',$request->id)
             ->update($info);
      }
      return back();
   }


   //导航分类管理
   public function navigationManage(){
      $navigation = DB::table('n_navigation')->whereNull('delete_at')->orderBy('order')->get();//导航
      $navigationlist = DB::table('n_navigation_list')->whereNull('delete_at')->orderBy('order')->get();//导航列表
      foreach($navigation as $k=>$v){
         $data[$k]['id'] = $v->id;
         $data[$k]['name'] = $v->name;
         $data[$k]['order'] = $v->order;
         $data[$k]['create_at'] = $v->create_at;
         $data[$k]['update_at'] = $v->update_at;
         foreach($navigationlist as $key=>$val){
            if($v->id == $val->pid){
               $data[$k]['child'][$key]['id'] = $val->id;
               $data[$k]['child'][$key]['name'] = $val->name;
               $data[$k]['child'][$key]['order'] = $val->order;
               $data[$k]['child'][$key]['create_at'] = $val->create_at;
               $data[$k]['child'][$key]['update_at'] = $val->update_at;
            }
         }

      }
      $info['data'] = $data;
      return view('admin/index/navigationmanage',$info);
   }

   public function navigatdel(Request $request){
      $id   = $request->id;
      $type = $request->type;
      $time = date('Y-m-d H:i:s',time());
      if($type=='one'){
         $list = DB::table('n_navigation_list')->where('pid',$id)->whereNull('delete_at')->count();
         if($list==0){
            DB::table('n_navigation')->where('id',$id)->update(['delete_at'=>$time]);
         }else{
            $status['status'] = 0;
            $status['msg'] = '该导航下有二级导航无法删除';
            return back()->with('error',$status['msg']);
         }

      }else{
         DB::table('n_navigation_list')->where('id',$id)->update(['delete_at'=>$time]);
      }
      return back();
   }


   //文章管理
   public function articleManage(Request $request){
      return view('admin/index/articlemanage');
   }

   //文章管理
   public function articleList(Request $request){
      return view('admin/index/articlelist');
   }

   //视频列表
   public function videoList(Request $request){
      return view('admin/index/videolist');
   }

   //视频管理
   public function videoManage(Request $request){
      return view('admin/index/videomanage');
   }

   //图库管理
   public function picManage(Request $request){
   return view('admin/index/picmanage');
   }

   //管理员管理
   public function userManage(Request $request){
      $info = DB::table('n_admin_user')->whereNull('delete_at')->get();
      $data['data'] = $info;
      return view('admin/index/usermanage',$data);
   }

   //退出
   public function logOut(Request $request){
      return view('/admin/index/logout');
   }

   //网站基础图片修改
   public function addpicture(Request $request){
      $file = $request['file'];
      $isshow = empty($request->isshow)?1:$request->isshow;
      $link = $request->link;
      if(!empty($file)){
         $args['file'] = $request['file'];
         $args['width'] = $request->wid;
         $args['height'] = $request->hei;
         $args['path'] = UP_PATH.'/setting/';
         $data = $this->addpic($args);
         if($data['status']==1){
            $info['image'] = $data['fileName'];
         }
      }

      if($isshow!=null){
         $info['isshow'] = $isshow;
      }
      if(!empty($link)){
         $info['link'] = $link;
      }

      DB::table('n_setting')
          ->where('name',$request->name)
          ->update($info);

      return back();
   }

   //上传图片
   private function addpic($args){
      $file = $args['file'];
      $str = $file->getClientOriginalName();
      $str = explode('.',$str);
      $extension=$str['1'];
      $status['status'] = 0;
      if (in_array(strtolower($extension),['jpg','png'])) {
         $width = $args['width'];
         $height = $args['height'];

         $newName = 'n_'.time().rand(100000, 999999).'.'.$extension;//文件新名
         $newimgname = 'New'.$newName;//裁剪文件新名

         $image_res = Image::make($file)->crop($width,$height,0, 0)->save($args['path'].$newimgname);
         $image_res2 = $file->move($args['path'],$newName);

         if($image_res && $image_res2){
           $status['status'] = 1;
           $status['fileName']  = $newimgname;
         }

         if($image_res2){
            $status['status'] = 2;
            $status['fileName']  = $newName;

         }
      }
      return $status;

   }



}
