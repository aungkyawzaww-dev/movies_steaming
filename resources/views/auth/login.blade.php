@extends('layout.master')

@section('content')
    <div class="container mt-3">
        <div class="col-6 offset-3">
            <div class="card bg-dark">
                <div class="card-header bg-yellow">
                    <h4 class="p-0 m-0 text-center">Account Login</h4>
                </div>
                <div class="card-body bg-transparent">
                    <form action="{{url('/login')}}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="email">Enter Email</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="password">Enter Password</label>
                            <input type="text" name="password" id="password" class="form-control">
                        </div>
                        <input type="submit" class="btn bg-yellow" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection