@extends('layouts.adminwindow')

@section('title', 'Edit House :'.$data->title)


@section('content')
    <!-- partial -->

            <!-- Form -->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Detail Message Data</h4>
                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th style="width: 200px">Id</th>
                                <td>{{$data->id}}</td>
                            </tr>

                            <tr>
                                <th >House</th>
                                <td>{{$data->house->title}}</td>
                            </tr>

                            <tr>
                                <th >Name & Surname</th>
                                <td>{{$data->user->name}}</td>
                            </tr>


                            <tr>
                                <th >Subject</th>
                                <td>{{$data->subject}}</td>
                            </tr>

                            <tr>
                                <th >Message</th>
                                <td>{{$data->review}}</td>
                            </tr>

                            <tr>
                                <th >Rate</th>
                                <td>{{$data->rating}}</td>
                            </tr>

                            <tr>
                                <th >IP Number</th>
                                <td>{{$data->ip}}</td>
                            </tr>

                            <tr>
                                <th >Status</th>
                                <td>{{$data->status}}</td>
                            </tr>

                            <tr>
                                <th >Create Date</th>
                                <td>{{$data->created_at}}</td>
                            </tr>

                            <tr>
                                <th >Update_Date</th>
                                <td>{{$data->updated_at}}</td>
                            </tr>

                            <tr>
                                <th>Admin Note</th>
                                <td>
                                    <form role="form" action="{{route('admin.comment.update',['id'=>$data->id])}}"  method="post" enctype="multipart/form-data">
                                        @csrf

                                        <select name="status">
                                            <option selected>{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary mr-2">Comment Update</button>
                                        </div>



                                    </form>
                                </td>
                            </tr>

                        </table>
                    </div>


            <!-- Form finish -->


@endsection


