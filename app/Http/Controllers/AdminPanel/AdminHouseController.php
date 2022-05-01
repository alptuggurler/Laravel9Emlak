<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminHouseController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //echo "Category List";
        $data = House::all();
        return view('admin.house.index',[
            'data' => $data
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //echo "Category Create";
        $data = Category::all();
        return view('admin.house.create',[
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
        $data->user_id = 0; //$request->user_id;
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
        $data->salers = $request->salers;

        $data->status = $request->status;
        if($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/house');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function show(House $house,$id)
    {
        $data = House::find($id);
        return view('admin.house.show',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function edit(House $house,$id)
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, House $house,$id)
    {
        $data = House::find($id);

        $data->category_id = $request->category_id;
        $data->user_id = 0; //$request->user_id;
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
        $data->salers = $request->salers;
        $data->sehir = $request->sehir;
        $data->status = $request->status;
        if($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/house');







    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function destroy(House $house,$id)
    {
        //House::destroy($id);
        $data= House::find($id);
        if($data->image && Storage::disk('public')->exists($data->image)){
            Storage::delete($data->image);

        }
        $data->delete();
        return redirect('admin/house');
    }
}
