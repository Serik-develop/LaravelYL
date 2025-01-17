@extends('layout.main')
@section('content')
    <div>
      <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$post->name}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$post->email}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Password</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$post->password}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">ID</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$post->id}}</p>
              </div>
            </div>
            </div>
            </div>
            </div>
       <div><a href="{{route('post.edit',$post->id)}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</a></div>
        <form action="{{route('post.delete',$post->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
        <a href="{{route('post.index')}}" class="btn btn-info" role="button" aria-pressed="true">Back</a>
      </div>
    </div>
@endsection
