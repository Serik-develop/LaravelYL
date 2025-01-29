@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg bg-body">
    <div class="container-fluid">
      <button
        data-mdb-collapse-init
        class="navbar-toggler"
        type="button"
        data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="{{route('main.index')}}">Main</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('post.index')}}">Posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact.index')}}">Contacts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('about.index')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('post.index')}}">Admin</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </header>
  <br>
    @yield('content')
</body>
</html>
@endsection
