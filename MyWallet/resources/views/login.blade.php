<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vincent's | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
   
    <div class="container d-flex align-items-center justify-content-center" style="height: 100vh">
        <div class="card mb-3 col-4" > 
            <div class="container mb-3">
                <div class="header d-flex justify-content-center">
                    <h1>Login</h1>
                </div>
                <form action="{{ route('postlogin') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="string" class="form-control" name="username">
                            @error('username')                   
                                {{-- <div class="alert alert-danger">Username/password invalid</div> --}}
                                <div class="error text-danger">{{ $message }}</div>
                            @enderror   
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                        @error('password')                   
                            {{-- <div class="alert alert-danger">Username/password invalid</div> --}}
                            <div class="error text-danger">{{ $message }}</div>
                        @enderror 
                </div>
                      
                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif

                <button type="submit" class="btn btn-primary" style="width:100%">Submit</button>
                    

                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
   
