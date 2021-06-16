@extends('layouts.app')
@section('title', "- Login -")
@section('content')
    <div class="col-md-6 mx-auto mt-4">
        @include('layouts.alerts')
    </div>
    <div class="col-md-6 mx-auto my-5">
        <div class="card shadow-lg">
            <div class="card-body">
                <h5 class="card-title text-center">Login</h5>
                <form  action="{{route("auth.login")}}" method="POST" >
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" class="form-control{{$errors->has("email") ? " is-invalid" : ""}}" name="email" value="{{old("email")}}" autofocus>
                        @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" id="password" class="form-control{{$errors->has("password" ) ? " is-invalid" : ""}}" name="password" value="{{old("password")}}">
                        @error('password')
                            <div id="password" class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <button class="btn btn-primary" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection