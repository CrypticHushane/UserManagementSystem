@extends('templates.main')

@section('content')
<div class="container">
    <h1>Login</h1>
    <div class="container mx-auto">
        <form method="POST" action="{{route('login')}}">
            @csrf
            <div class="form-group mt-4">
                <label for="email">Email address: </label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="email"
                    placeholder="Enter email" value="{{old("email")}}" name="email">
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
            <div class="form-check mt-3">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
</div>

@endsection
