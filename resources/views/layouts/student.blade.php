<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    @livewireStyles
</head>
<body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">School Management System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            
            </ul>
            <form class="form-inline my-2 my-lg-0" action="{{ route('logout') }}" method="post">
            @csrf
            <input type="submit" value="Logout" class="btn btn-outline-success my-2 my-sm-0">
            </form>
        </div>
        </nav>

        <div class="container mt-3">
            <div class="card">
                <div class="card-body">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                        <li class="nav-item mr-5">
                            <a class="nav-link" href="{{ route('studentProfile') }}">Profile</a>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link" href="{{ route('studentLookTeacher') }}">Teachers</a>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link" href="{{ route('studentDashboard') }}">Course</a>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link" href="{{ route('lookClass') }}">Class</a>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link" href="{{ route('lookRequestCourse') }}">Request Course</a>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link" href="{{ route('lookNews') }}">News</a>
                        </li>
                        </ul>
                    </div>
                    </nav>
                </div>
            </div>
        </div>

    @yield('content')

    @livewireScripts
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
</body>
</html>