@extends('layouts.main')
@section('content')

<div class="shape">
<h1>Login</h1>
<hr>
<form action=" " method="POST">
    <div class="form-group">
        <label for="nama">Username</label>
        <input type="text" name="nama" class="form">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>
</div>
@endsection