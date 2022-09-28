@extends('layouts.dashboard_layout')
@section('content')
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3 sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/admin/dashboard">
                            <span data-feather="home" class="align-text-bottom"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/doctor">
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

        <main style="margin-top:40px;"  class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
           

            <div class="card">
                <div class="card-header">Add User</div>
                <div class="card-body">

                    <form action="{{ url('employee') }}" method="post" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <label>Select User Roles</label>
                        <select class="form-select" aria-label="Default select example" name="type">
                            <option selected>Select User</option>
                            <option value="2">Doctor</option>
                            <option value="3">Secretary</option>
                            <option value="0">Patient</option>
                        </select> <br>

                        <label>First Name</label> <br>
                        <input type="text" name="fname" id="fname" required class="form-control"><br>
                        <label>Last Name</label> <br>
                        <input type="text" name="lname" id="lname" required class="form-control"><br>
                        <label>Address</label><br>
                        <input type="text" name="address" id="address" required class="form-control"><br>



                        <label for="phone">Mobile Number</label><br>
                        <input id="phone" type="number" class="form-control" name="phone" required placeholder="example: 639"><br>

                        <label for="email">Email</label><br>


                        <input id="email" type="email" class="form-control " name="email" required placeholder="Enter your email"><br>

                        <label for="password">Password</label>


                        <input id="password" type="password" class="form-control" name="password" required placeholder="Enter your password"> <br>

                        <input type="submit" value="Save" class="btn btn-success"><br>
                    </form>






                </div>
            </div>










            <br><br><br>

            {{--
                <div class="table-resposive">
                                 <table class="table ">
                                   <thead class="table-light">
                                       <tr>
                                           <td>ID</td>
                                           <td>Name</td>
                                           <td>Email</td>
                                           <td>shark Level</td>
                                           <td>Actions</td>
                                       </tr>
                                   </thead>
                                   <tbody class="table-group-divider">
                                   @foreach($userinfo as $key => $value)
                                       <tr>
                                           <td>{{ $value->id }}</td>
            <td>{{ $value->fname }}</td>
            <td>{{ $value->email }}</td>


            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the shark (uses the destroy method DESTROY /sharks/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the shark (uses the show method found at GET /sharks/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('sharks/' . $value->id) }}">Show this shark</a>

                <!-- edit this shark (uses the edit method found at GET /sharks/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('sharks/' . $value->id . '/edit') }}">Edit this shark</a>

            </td>
            <td>testing</td>
            </tr>
            @endforeach
            </tbody>
            </table>

    </div>














</div> --}}


{{-- 
working code --}}

{{-- <table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Email</th>
            <th scope="col">Type</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach($user as $key => $value)
        <tr>
            <th scope="row">{{ $value->id }}</th>
            <td>{{ $value->fname }}</td>
            <td>{{ $value->lname}}</td>
            <td>{{ $value->phone }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->type }}</td>
        </tr>

        @endforeach
    </tbody>
</table> --}}

</main>
</div>
</div>
@endsection