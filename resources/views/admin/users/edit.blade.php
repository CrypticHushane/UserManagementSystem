@extends('templates.main')

@section('content')
<div class="container">
    <h1>Edit User</h1>
    <div class="container">
        <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
            @method('PATCH')
           @include('admin.users.partials.form')
        </form>
    </div>
</div>
@endsection
