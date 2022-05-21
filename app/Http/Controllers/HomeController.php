<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\House;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function test(){
        echo "Test Page";
    }
    public static function maincategorylist(){
        return Category::where('parent_id','=',0)->with('children')->get();
    }

    public function index(){
        //echo "index";
        $page="home";
        $sliderdata =House::limit(4)->get();
        $houselist1 =House::limit(6)->get();
        $setting= Setting::first();

        return view('home.index',[
            'sliderdata'=>$sliderdata,
            'page'=>$page,
            'houselist1'=>$houselist1,
            'setting'=>$setting
        ]);
    }

    public function about(){
       // echo "about";
        $setting= Setting::first();

        return view('home.about',[
            'setting'=>$setting
        ]);
    }

    public function references(){
       // echo "references";
        $setting= Setting::first();

        return view('home.references',[
            'setting'=>$setting
        ]);
    }

    public function contact(){
       // echo "contact";
        $setting= Setting::first();

        return view('home.contact',[
            'setting'=>$setting
        ]);
    }



    public function house($id){
        //echo "index";
        $images = DB::table('images')->where('house_id',$id)->get();
        $data = House::find($id);

        return view('home.house',[
            'data'=>$data,
            'images'=>$images
        ]);
    }

    public function categoryhouse($id){



        $category = Category::find($id);

        $houses = DB::table('houses')->where('category_id',$id)->get();
        return view('home.categoryhouses',[
            'category'=>$category,
            'houses'=>$houses
        ]);
    }
}
