<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("admin.index");
    }

    public function setting(){
 $a =1;
        if ($a = 0){
        $data = Setting::first();
        if($data == null){
            $data = new Setting();
            $data->title = 'Project Tittle';
            $data->save();
            $data = Setting::first();
        }
    }
        return view("admin.setting");
        //return view("admin.setting",['data'=> $data]);
    }

    public function settingUpdate(Request $request){


    }

}


