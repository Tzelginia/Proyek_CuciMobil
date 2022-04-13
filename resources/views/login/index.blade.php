@extends('dashboard.layout.login')

@section('content')
    
<!-- Section: Design Block -->
        <section class="text-center">
            <!-- Background image -->
            <div class="p-5 bg-image" style="
            height: 300px;
            "></div>
        <!-- Background image -->

        <div class="card mx-4 mx-sm-6 mb-5 shadow-5-strong" style="
            margin-top: -100px;
            background: hsla(0, 0%, 7%, 0.557);
            backdrop-filter: blur(5px);
            ">
        <div class="card-body">

  
        <div class="row d-flex justify-content-center text-light">
          <div class="col-lg-8">
            <h2 class="fw-bold mb-5">Login</h2>

            @if (session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

             @if (session()->has('loginError'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            <form action="/login" method="POST">
              @csrf
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="text" id="username" class="form-control @error('username') is-invalid                  
                @enderror" name="username" />
                <label class="form-label" for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
  
              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="password" class="form-control @error('password') is-invalid                 
                @enderror" name="password"/>
                <label class="form-label" for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
  
              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">
                Login
              </button>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>Not a member? <a href="/register">Register</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
@endsection