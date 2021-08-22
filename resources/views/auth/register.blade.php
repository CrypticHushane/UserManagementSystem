@extends('templates.main')

@section('content')
<div class="container">
    <h1>Register</h1>
    <div class="container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group mt-4">
                <label for="name">UserName: </label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="name"
                    placeholder="Enter name" value="{{old('name')}}" name="name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            {{ $message}}
                        </span>
                    @enderror
            </div>
            <div class="form-group mt-4">
                <label for="email">Email address: </label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="email"
                    placeholder="Enter email" value="{{old("email")}}" name="email">
                <small id="email" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        {{ $message}}
                    </span>
                @enderror
            </div>
            <div class="form-group mt-4">
                <label for="password">Password: </label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password">
                @error('password')
                        <span class="invalid-feedback" role="alert">
                            {{ $message}}
                        </span>
                    @enderror
            </div>
            <div class="form-group mt-4">
                <label for="password_confirmation">Password Confirmation: </label>
                <input type="password" class="form-control" id="password_confirmation" placeholder="Confirm Password" name="password_confirmation">
            </div>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
    </div>
</div>
@endsection
