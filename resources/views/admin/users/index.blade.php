@extends("templates.main")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="float-left">Users</h1>
                <a href="{{route('admin.users.create')}}" class="btn btn-lg btn-success float-right mb-5" role="button">Create User</a>
            </div>
        </div>
        
        <div class="card container">
            <table class="table table-striped table-dark container">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Handle</th>
                    <th scope="col">Role</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            @if (count($user->roles) != 0)
                                <td>
                                @foreach ($user->roles as $roles)
                                        {{$roles->name}}
                                    @endforeach 
                                </td>
                            @else
                            <td>No Role Assigned</td>
                            @endif
                            
                            <td>
                                <a href="{{route('admin.users.edit', $user->id )}}" class="btn btn-sm btn-primary mr-5" role="button">Edit</a>
                                <button href="{{ route('logout') }}" class="btn btn-sm btn-danger" onclick="event.preventDefault(); 
                                    document.getElementById('delete-user-form-{{$user->id}}').submit()">Delete</button>

                                <form id="delete-user-form-{{$user->id}}" action="{{ route('admin.users.destroy', $user->id)}}" method="POST" style="display: none">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
              {{$users->links()}}
        </div>
    </div>
@endsection