<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    {{-- bootstrap    --}}
    <link rel="stylesheet" href="{{ asset('a_assets/argon/argon.min.css') }}" />
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-4 offset-4">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        Admin Login
                    </div>
                        
                </div>
                <div class="card-body">
                    <form action="{{ route('login')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="" />
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="" />
                        </div>

                        <input type="submit" value="Login" class="btn btn-primary">

                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>