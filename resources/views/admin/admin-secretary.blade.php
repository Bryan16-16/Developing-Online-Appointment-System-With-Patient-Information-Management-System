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
            <a class="nav-link" href="/admin/doctor">
              <span data-feather="users" class="align-text-bottom"></span>
              Doctor
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/patient">
              <span data-feather="users" class="align-text-bottom"></span>
             Patient
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/admin/secretary">
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
      


         

<hr>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
      onclick="event.preventDefault();
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

    

    
  </div>
</div>

@endsection


