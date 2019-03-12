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
      return view('admin/index/bannermanage');
   }

   //导航分类管理
   public function navigationManage(Request $request){
      return view('admin/index/navigationmanage');
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
      return view('admin/index/usermanage');
   }

   //退出
   public function logOut(Request $request){
      return view('/admin/index/logout');
   }

   public function addpicture(Request $request){
      $file = $request['file'];
      $isshow = empty($request->isshow)?1:$request->isshow;
      $size = getimagesize($file);//215:168长宽比
      $width=$size['0'];// 宽
      $height=$size['1'];//高

      $str = $file->getClientOriginalName();
      $str = explode('.',$str);
      $extension=$str['1'];
      if (in_array(strtolower($extension),['jpg','png'])) {
         $width = $request->wid;
         $height = $request->hei;

         $newName = 'n_'.time().rand(100000, 999999).'.'.$extension;//文件新名
         $newimgname = 'New'.$newName;//裁剪文件新名

         $image_res = Image::make($file)->crop($width,$height,0, 0)->save(UP_PATH.'/setting/'.$newimgname);
         $image_res2 = $file->move(UP_PATH.'/setting/',$newName);
         if($image_res && $image_res2){

            $info['isshow'] = $isshow;
            $info['image'] = $newimgname;
            $data = DB::table('n_setting')
                ->where('name',$request->name)
                ->update($info);
            if(!$data){
               return back();
            }
         }
         return back();
      }
   }



}
