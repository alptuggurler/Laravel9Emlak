<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\House;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo"test";
        return view('home.user.houses');
    }

    public function houses(){
         echo "about";
         $houses = House::where('user_id','=',Auth::id())->get();

        return view('home.user.houses',[
            'houses'=>$houses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Category::all();
        return view('home.user.housesCreate',[
            'data' => $data
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new House();
        $data->category_id = $request->category_id;
        $data->user_id = Auth::id();
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->price = $request->price;
        $data->square = $request->square;
        $data->number_of_room = $request->number_of_room;
        $data->floor_location = $request->floor_location;
        $data->number_of_floors = $request->number_of_floors;
        $data->bedrooms = $request->bedrooms;
        $data->bathrooms = $request->bathrooms;
        $data->year_built = $request->year_built;
        $data->parking = $request->parking;
        $data->heating = $request->heating;
        $data->dues = $request->dues;
        $data->salers = Auth::user()->name;
        $data->sehir = $request->sehir;
        $data->ilce = $request->ilce;
        $data->status = "new";
        if($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect(route('userpanel.houses'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function houseEdit(House $house,$id)
    {
        //
        //echo "edit page id : ",$id;

        $data = House::find($id);
        $datalist = Category::all();
        return view('admin.house.edit',[
            'data' => $data,
            'datalist' => $datalist
        ]);
    }

    public function houseStore(Request $request,$hid)
    {
        //
dd($request);
        $data = new Image();
        $data->house_id = $hid;
        $data->title = $request->title;
        if($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect()->route('admin.image.index',['hid'=>$hid]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function houseDestroy($id)
    {

        $data = House::find($id);
        $data->delete();
        return redirect(route('userpanel.houses'));
    }

    public function imageIndex(Request $request,$hid)
    {
        //
        //dd($request);
        $house = House::find($hid);
        //$images = Image::where('product_id',$hid);
        $images = DB::table('images')->where('house_id',$hid)->get();
        return view(route('userpanel.houseImage'),[
            'house'=>$house,
            'images'=>$images
        ]);
    }
}
