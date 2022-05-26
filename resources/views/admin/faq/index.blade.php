@extends('layouts.adminbase')

@section('title', 'FAQ List')


@section('content')
    <!-- partial -->

    <div class="main-panel">

        <div class="content-wrapper">
            <div class="page-header">
                <a href="{{route('admin.faq.create')}}" class="btn btn-block btn-success btn-lg" >Add Question</a>


                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                    </ol>
                </nav>
            </div>


            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">FAQ List</h4>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> Question </th>
                                    <th> Answer </th>
                                    <th> Status </th>

                                    <th> Edit </th>
                                    <th> Delete</th>
                                    <th> Show </th>
                                </tr>
                                </thead>



                                <tbody>
                                @foreach( $data  as $rs)
                                <tr>
                                    <td> {{$rs->id}} </td>

                                    <td> {{$rs->question}} </td>
                                    <td> {!! $rs->answer !!} </td>
                                    <td> {{$rs->status}} </td>


                                    <td> {{$rs->status}} </td>
                                    <td><a href="{{route('admin.faq.edit',['id'=>$rs->id])}}", class ='btn btn-block btn-success btn-sm'>Edit</a></td>
                                    <td><a href="{{route('admin.faq.destroy',['id'=>$rs->id])}}", class ="btn btn-block btn-danger btn-sm"
                                        onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                                    <td><a href="{{route('admin.faq.show',['id'=>$rs->id])}}", class ='btn btn-block btn-info btn-sm'>Show</a></td>


                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sor  </div>-->

        <!-- content-wrapper ends -->
@endsection
