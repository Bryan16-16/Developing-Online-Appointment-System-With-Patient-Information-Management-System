@extends('layouts.dashboard_layout')
@section('content')

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
           
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="users" class="align-text-bottom"></span>
              Doctor Schedule
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file" class="align-text-bottom"></span>
              Patient Record
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
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

  

    
  </div>
</div>

@endsection


