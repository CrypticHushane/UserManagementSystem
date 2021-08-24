@csrf
<div class="form-group mt-4">
    <label for="name">Name: </label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="name"
        placeholder="Enter name" value="{{old('name') }} @isset($user) {{$user->name}} @endisset" name="name">
        @error('name')
            <span class="invalid-feedback" role="alert">
                {{ $message}}
            </span>
        @enderror
</div>
<div class="form-group mt-4">
    <label for="email">Email address: </label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="email"
        placeholder="Enter email" value="{{old("email")}} @isset($user) {{$user->email}} @endisset" name="email">
    <small id="email" class="form-text text-muted">We'll never share your email with anyone
        else.</small>
        @error('email')
        <span class="invalid-feedback" role="alert">
            {{ $message}}
        </span>
    @enderror
</div>
@isset($create)
<div class="form-group mt-4">
    <label for="password">Password: </label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password"    
    >
    @error('password')
            <span class="invalid-feedback" role="alert">
                {{ $message}}
            </span>
        @enderror
</div>

<div class="form-group mt-4">
    <select class="form-select" aria-label="Default select example" name="role">
        <option selected >Assign a Role </option>
        @foreach ($roles as $role)
            <option  value="{{$role->id}}" >{{$role->name}}</option>
        @endforeach 
      </select>
</div>

@endisset

<div class="form-group mt-4">
    <select class="form-select" aria-label="Default select example" name="role">
        <option selected>Assign a Role </option>
        @foreach ($roles as $role)
            <option  value="{{$role->id}}" >{{$role->name}}</option>
        @endforeach 
      </select>
</div>
<button type="submit" class="btn btn-primary mt-4">Submit</button>