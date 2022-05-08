<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\House;
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
        $sliderdata =House::limit(4)->get();
        $houselist1 =House::limit(6)->get();
        return view('home.index',[
            'sliderdata'=>$sliderdata,
            'houselist1'=>$houselist1
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
}
