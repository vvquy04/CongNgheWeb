<!doctype html> 
<html lang="en"> 
<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, 
initial-scale=1"> 
    <title>Task List App</title> 
    <link 
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384dungkt@tlu.edu.vn 9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> 
</head> 
<body> 
 
    <nav class="navbar navbar-expand-lg navbar-light bglight"> 
        <div class="container"> 
            <a class="navbar-brand" href="{{ route('tasks.index') }}">Task List App</a> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" ariacontrols="navbarNav" aria-expanded="false" arialabel="Toggle navigation"> 
                <span class="navbar-toggler-icon"></span> 
            </button> 
            <div class="collapse navbar-collapse" id="navbarNav"> 
                <ul class="navbar-nav"> 
                    <li class="nav-item"> 
                        <a class="nav-link active" ariacurrent="page" href="{{ route('tasks.index') }}">Danh sách Task</a> 
                    </li> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="{{ route('tasks.create') }}">Thêm mới</a> 
                    </li> 
                </ul> 
            </div> 
        </div> 
    </nav> 
 
    <div class="container mt-4"> 
        @yield('content') 
    </div> 
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bdungkt@tlu.edu.vn ootstrap.bundle.min.js" integrity="sha384geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3T0e4Bkz" crossorigin="anonymous"></script> 
</body> 
</html>