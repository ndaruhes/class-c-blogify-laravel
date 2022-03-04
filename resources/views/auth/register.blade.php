@extends('layouts.app')

@section('title', 'Register | Blogify')

@section('content')
    <div class="container mt-5">
        <div class="col-md-4 bg-light p-3 rounded">
            <form action="/register" method="POST">
                @csrf
                <div class="form-group">
                    <label>
                        Email
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                    <input type="email" name="email" class="form-control" placeholder="Your email">
                </div>
                <div class="form-group">
                    <label>
                        Username
                        @error('username')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                    <input type="text" name="username" class="form-control" placeholder="Your username">
                </div>
                <div class="form-group">
                    <label>
                        Password
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </label>
                    <input type="password" name="password" class="form-control" placeholder="Your password">
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Your password">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
