<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * ajax上传文件
     */
    public function uploadImages()
    {
        
            // $file = $request->file('image');
            // // 第一个参数代表目录, 第二个参数代表我上方自己定义的一个存储媒介
            // $path = 'http://localhost/upload/'.$file->store('image', 'admin');
            
            // return response($path);
       
        // 注意看下方模版代码
       return 11111;
    }
}