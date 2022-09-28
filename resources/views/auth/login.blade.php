@extends('layouts.app')

@section('content')


<div class="container">
{{-- toast message  --}}
    <div class="toast-container position-fixed bottom-0 end-0 p-3" data-bs-delay="2000">
      <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          {{-- <img src="..." class="rounded me-2" alt="..."> --}}
          <strong class="me-auto">Hi👋</strong>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            You need to <strong>login or Register</strong>, to book an appointment. 
        </div>
      </div>
    </div>
    

    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div style=" font-weight: bold;" class="card-header">{{ __('Login') }}</div>

                @if(Session::get('fail'))
                    <div class="alert_div alert alert-danger " role="alert">
                        {{Session::get('fail')}}
                      </div>
                @endif
                @csrf
            

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <!-- new code -->
                                <div class="checkbox">
                                    <label class="col-form-label ">
                                        <input type="checkbox" id="togglePassword"> Show Password</label>

                                </div>


                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a style="text-decoration:none ;" class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                                <br><br>
                                <a style="text-decoration:none ;" class="btn btn-link" href="register">I don't have an account, create new</a>
                            </div>
                </div>
                        </div>
                    </form>
                
            </div>
        </div>
    </div>

    <script>


window.onload = (event) => {
    var toastLiveExample = document.getElementById('liveToast')
    var toast = new bootstrap.Toast(toastLiveExample)
    toast.show()
}

    </script>
</div>
@endsection