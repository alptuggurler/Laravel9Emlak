@extends('layouts.adminbase')

@section('title', 'User List ')


@section('content')
    <!-- partial -->

    <div class="main-panel">

        <div class="content-wrapper">
            <div class="page-header">



                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User</li>
                    </ol>
                </nav>
            </div>


            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">User List</h4>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> Name </th>
                                    <th> Email </th>
                                    <th> Role </th>
                                    <th> Status </th>
                                    <th> Delete</th>
                                    <th> Show </th>
                                </tr>
                                </thead>



                                <tbody>
                                @foreach( $data  as $rs)
                                <tr>
                                    <td> {{$rs->id}} </td>


                                    <td> {{$rs->name}} </td>
                                    <td> {{$rs->email}} </td>
                                    <td>
                                        @foreach($rs->roles as $role)
                                            {{$role->name}}
                                        @endforeach
                                    </td>

                                    <td>  </td>


                                    <td><a href="{{route('admin.user.destroy',['id'=>$rs->id])}}", class ="btn btn-block btn-danger btn-sm"
                                        onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>

                                    <td>
                                        <a href="{{route('admin.user.show',['id'=>$rs->id])}}", class ="btn btn-block btn-success btn-sm"
                                           onclick="return !window.open(this.href,'','top=50 left=100  width =1100, height=700')">
                                        Show
                                        </a>
                                    </td>

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
