@extends('templates.main')

@section('content')
<div class="container">
    <h1>Add User</h1>
    <div class="card">
        <form method="POST" action="{{ route('admin.users.store') }}">
           @include('admin.users.partials.form', ['create' => true])
        </form>
    </div>
</div>
@endsection
