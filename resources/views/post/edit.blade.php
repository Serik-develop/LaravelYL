@extends('layout.main')
@section('content')
    <div>
        <form action="{{ route('post.update', $post->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="name-area"
                    value="{{$post->name}}" />
                <small id="emailHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
            </div>
            <class="form-group">
                <label for="name">email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="email-area"
                    value="{{$post->email}}" />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="password" value="{{$post->password}}" />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>
@endsection
