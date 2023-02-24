@extends('layouts.main')
@section('isi')
    <div class="row justify-content-center">
        <div class="col-md-6">
            @if(session()->has('berhasil'))
                {{ session('berhasil') }}
            @endif
            <h3 class="d-block text-center mb-3">Registration Form</h3>
            <form action="/register" method="post">
                @csrf

                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="Name" name="name" value="{{ old('name') }}" required>
                    <label for="floatingInput">Name</label>
                    @error('name')
                        <div class="invalid-feedback">    
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="floatingInput" placeholder="Username" name="username" value="{{ old('username') }}" required>
                    <label for="floatingInput">Username</label>
                    @error('username')
                        <div class="invalid-feedback">    
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-floating mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="Email" name="email" value="{{ old('email') }}" required>
                    <label for="floatingInput">Email</label>
                    @error('email')
                        <div class="invalid-feedback">    
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password" value="{{ old('password') }}" required>
                    <label for="floatingPassword">Password</label>
                    @error('password')
                        <div class="invalid-feedback">    
                            {{ $message }}
                        </div>
                    @else
                        @if(session()->has('loginGagal'))
                            <div class="invalid-feedback">    
                                {{ session('loginGagal') }}
                            </div>
                        @endif
                    @enderror
                </div>
                
                <button type="submit" class="w-100 btn btn-success mb-3">Register</button>        
                <small class="d-block text-center">Already registered? <a href="/login">Login</a></small>
            </form>
        </div>
    </div>
@endsection