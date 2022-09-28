@extends('layouts.dashboard_layout')
@section('content')

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3 sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/admin/dashboard">
                            <span data-feather="home" class="align-text-bottom"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/add_user">
                            <span data-feather="users" class="align-text-bottom"></span>
                            Add User
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/patient">
                            <span data-feather="users" class="align-text-bottom"></span>
                            Patient
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/secretary">
                            <span data-feather="users" class="align-text-bottom"></span>
                            Secretary
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                            Analytics
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/profile">
                            <span data-feather="edit" class="align-text-bottom"></span>
                            Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active
            " href="/admin/landing_page/setting">
                            <span data-feather="settings" class="align-text-bottom"></span>
                            Settings
                        </a>
                    </li>



                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                            <span data-feather="log-out" class="align-text-bottom"></span>
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>


                </ul>
            </div>
        </nav>

        <main style="margin-top:40px;" class="col-md-9 ms-sm-auto col-lg-10 px-md-4">


            <div class="card">
                <div class="card-header">Landing Page Settings</div>
                <div class="card-body">

                    <form action="{{ url('admin/landing_page/setting') }}" method="post" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <label>Logo</label> <br>
                        <input type="file" accept="image/*" name="logo" required class="form-control"><br>




                        <label>Title</label> <br>
                        <input type="text" name="title" id="title" required class="form-control"><br>




                        <label>Sub Title</label><br>
                        <input type="text" name="stitle" id="stitle" required class="form-control"><br>

                        <label>Location</label><br>
                        <input type="text" name="location" id="location" required class="form-control" placeholder="Place the link of the google maps"><br>

                        <label for="floatingTextarea">About Us</label>
                        <textarea class="form-control" placeholder="A Brief Description of the clinic" name="aboutus" id="aboutus"></textarea><br>


                        <input type="submit" value="Save" class="btn btn-success"><br>
                    </form>






                </div>
            </div>















        </main>







    </div>
</div>

@endsection