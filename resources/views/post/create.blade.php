@extends('layout.main')
@section('content')
    <div>
        <form action="{{ route('post.store') }}" method="post">
        @csrf
        <div class="form-group" >
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="name-area"
                    placeholder="enter name" />
            </div>
            <class="form-group">
                <label for="name">email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="email-area"
                    placeholder="enter email" />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" />
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
