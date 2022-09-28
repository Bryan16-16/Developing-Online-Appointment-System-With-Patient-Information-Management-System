@extends('layouts.dashboard_layout')
@section('content')

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
      
          <li class="nav-item">
            <a class="nav-link" href="/patient/doctor-schedule">
              <span data-feather="users" class="align-text-bottom"></span>
              Doctor Schedule
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="calendar" class="align-text-bottom"></span>
              My Appointment
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/patient/profile-setting">
              <span data-feather="edit" class="align-text-bottom"></span>
              Profile
            </a>
          </li>


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

    {{-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
         
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
          </button>
        </div>

        
      </div>
    </main> --}}
  </div>
</div>

@endsection


