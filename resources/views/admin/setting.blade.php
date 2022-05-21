@extends('layouts.adminbase')

@section('title', 'Settings')
@section('head')

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <style>
        body {font-family: Arial;}

        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #191c24;
        }


        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
            color: #FFFFFF;

        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }
    </style>

@endsection

@section('content')
    <!-- partials -->

    <div class="main-panel">

        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Settings </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Setting</li>
                    </ol>
                </nav>
            </div>

            <h2>Tabs</h2>
            <p>Click on the buttons inside the tabbed menu:</p>

            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'General')">General</button>
                <button class="tablinks" onclick="openCity(event, 'Smtp_Email')">Smtp Email</button>
                <button class="tablinks" onclick="openCity(event, 'Social_Media')">Social Media</button>
                <button class="tablinks" onclick="openCity(event, 'About_us')">About us</button>
                <button class="tablinks" onclick="openCity(event, 'Contact_Page')">Contact Page</button>
                <button class="tablinks" onclick="openCity(event, 'References')">References</button>
            </div>

            <form role="form" action="{{route('admin.setting.update')}}"  method="post" enctype="multipart/form-data" >
            @csrf
            <!-- General Settings -->
            <div id="General" class="tabcontent">
                <div class="card-body">

                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">

                                <div class="card-body">
                                <h4 class="card-title">Basic form elements</h4>
                                <p class="card-description"> Basic form elements </p>


                                    <input type="hidden" id="id" name="id" value="{{$data->id}}">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="title" value="{{$data->title}}" placeholder="Project Title">

                                    </div>
                                    <div class="form-group">
                                        <label>Keywords</label>
                                        <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}" placeholder="keywords">

                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" class="form-control" name="description" value="{{$data->description}}"  placeholder="description">

                                    </div>
                                    <div class="form-group">
                                        <label>Company</label>
                                        <input type="text" class="form-control" name="company" value="{{$data->company}}"  placeholder="company">

                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="address" value="{{$data->address}}"  placeholder="address">

                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" name="phone" value="{{$data->phone}}"  placeholder="phone">

                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email" value="{{$data->email}}"  placeholder="email">

                                    </div>
                                    <div class=form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option selected="selected">{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Icon</label>
                                        <input type="file" name="icon" >
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary me-2">Update Settings </button>


                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <!-- General Settings finis-->

            <!-- Smtp Email Settings -->
            <div id="Smtp_Email" class="tabcontent">

                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Basic form elements</h4>
                            <p class="card-description"> Basic form elements </p>


                                <div class="form-group">
                                    <label>Smtp Server</label>
                                    <input type="text" class="form-control" name="smtpserver" value="{{$data->smtpserver}}" placeholder="smtpserver">

                                </div>
                                <div class="form-group">
                                    <label>Smtp Email</label>
                                    <input type="text" class="form-control" name="smtpemail" value="{{$data->smtpemail}}" placeholder="smtpemail">

                                </div>
                                <div class="form-group">
                                    <label>Smtp Password</label>
                                    <input type="text" class="form-control" name="smtppassword" value="{{$data->smtppassword}}" placeholder="smtppassword">

                                </div>
                                <div class="form-group">
                                    <label>Smtp Port</label>
                                    <input type="text" class="form-control" name="smtpport" value="{{$data->smtpport}}" placeholder="smtpport">

                                </div>
                                <button type="submit" class="btn btn-primary">Update Settings </button>


                        </div>
                    </div>
                </div>



            </div>
            <!-- Smtp Email Settings finis-->

            <!--  Settings -->
            <div id="Social_Media" class="tabcontent">

                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Basic form elements</h4>
                            <p class="card-description"> Basic form elements </p>

                                <div class="form-group">
                                    <label>Fax</label>
                                    <input type="text" class="form-control" name="fax" value="{{$data->fax}}" placeholder="fax">

                                </div>
                                <div class="form-group">
                                    <label>Facebook</label>
                                    <input type="text" class="form-control" name="facebook" value="{{$data->facebook}}" placeholder="facebook">

                                </div>
                                <div class="form-group">
                                    <label>Instagram</label>
                                    <input type="text" class="form-control" name="instagram" value="{{$data->instagram}}" placeholder="instagram">

                                </div>
                                <div class="form-group">
                                    <label>Twitter</label>
                                    <input type="text" class="form-control" name="twitter" value="{{$data->twitter}}" placeholder="twitter">

                                </div>
                                <div class="form-group">
                                    <label>Youtube</label>
                                    <input type="text" class="form-control" name="youtube" value="{{$data->youtube}}" placeholder="youtube">

                                </div>
                                <button type="submit" class="btn btn-primary">Update Settings </button>



                        </div>
                    </div>
                </div>

            </div>

            <!--  Settings finish-->

            <!-- About_us Settings -->
            <div id="About_us" class="tabcontent">

                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Basic form elements</h4>
                            <p class="card-description"> Basic form elements </p>


                                <textarea class="textarea" id="aboutus" name="aboutus"  >{{$data->aboutus}}</textarea>

                                <script>
                                    $('#aboutus').summernote({
                                        placeholder: '',
                                        tabsize: 2,
                                        height: 1000
                                    });
                                </script>



                                <br>
                        <button type="submit" class="btn btn-primary">Update Settings </button>



                        </div>
                    </div>
                </div>

            </div>

            <!-- About_us Settings finish-->

            <!--  Settings -->
            <div id="Contact_Page" class="tabcontent">

                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Basic form elements</h4>
                            <p class="card-description"> Basic form elements </p>


                                <textarea class="textarea" id="contact" name="contact" >{{$data->contact}}</textarea>

                                <script>
                                    $('#contact').summernote({
                                        placeholder: '',
                                        tabsize: 2,
                                        height: 1000
                                    });
                                </script>

                                <br>
                                <button type="submit" class="btn btn-primary">Update Settings </button>


                        </div>
                    </div>
                </div>

            </div>

            <!--  Settings finish-->

            <!--  Settings -->
            <div id="References" class="tabcontent">

                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Basic form elements</h4>
                            <p class="card-description"> Basic form elements </p>



                                <textarea class="textarea" id="references" name="references"  >{{$data->references}}</textarea>

                                <script>
                                    $('#references').summernote({
                                        placeholder: '',
                                        tabsize: 2,
                                        height: 1000
                                    });
                                </script>

                                <br>
                                <button type="submit" class="btn btn-primary">Update Settings </button>


                        </div>
                    </div>
                </div>

            </div>

    </form>

            <!--  Settings finish-->




            <!-- content-wrapper ends -->
            <script>
                function openCity(evt, cityName) {
                    var i, tabcontent, tablinks;
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }
                    document.getElementById(cityName).style.display = "block";
                    evt.currentTarget.className += " active";
                }
            </script>


@endsection
