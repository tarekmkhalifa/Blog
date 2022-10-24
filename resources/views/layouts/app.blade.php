<!doctype html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
          <a class="text-white navbar-brand" href="{{route('posts.index')}}">Blog</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto me-auto">
              <li class="nav-item">
                <a class="text-white nav-link" aria-current="page" href="{{route('posts.index')}}">All Posts</a>
              </li>
              <li class="nav-item">
                <a class="text-white nav-link" aria-current="page" href="{{route('posts.deleted')}}">Deleted Posts</a>
              </li>
              <li class="nav-item">
                <a class="text-white nav-link" aria-current="page" href="{{route('users.create')}}">Add User</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>  
    </header>
  <main>
    <div class="container">
              {{-- Display success Msg --}}
              @if (session()->has('message'))
              <div class="mt-3 text-center alert alert-success">
                  {{ session()->get('message') }}
              </div>
          @endif
        @yield('main-content')
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>