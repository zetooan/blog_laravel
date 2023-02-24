@extends('layouts.main')
@section('isi')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="d-block text-center mb-3">Please Login</h3>
            @if(session()->has('berhasil'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('berhasil') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if(session()->has('loginGagal'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginGagal') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form action="/login" method="post">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" value="{{ old('username') }}" class="form-control @error('username') is-invalid @enderror" id="floatingInput" placeholder="Username" name="username" required>
                    <label for="floatingInput">Username</label>
                    @error('username')
                        <div class="invalid-feedback">    
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-floating mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password" required>
                    <label for="floatingPassword">Password</label>
                    @error('password')
                        <div class="invalid-feedback">    
                            {{ $message }}
                        </div>                       
                    @enderror
                    
                </div>
                
                <button type="submit" class="w-100 btn btn-success mb-3">Login</button>        
            </form>
            <small class="d-block text-center">Not registered? <a href="/register">Register Now!</a></small>
        </div>
    </div>
@endsection