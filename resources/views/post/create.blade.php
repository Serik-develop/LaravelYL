@extends('layout.main')
@section('content')
    <div style="margin: 50px 5%">
        <form action="{{ route('post.store') }}" method="post">
        @csrf
        <div class="form-group" >
                <label for="name" style="color: cornflowerblue;">Name</label>
                <input value="{{old('name')}}" type="text" name="name" class="form-control" id="name" aria-describedby="name-area"
                    placeholder="enter name" />
                @error('name')
                   <p class="text-danger"> {{$message}} </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="name" style="color: cornflowerblue;">email</label>
                <input type="email" value="{{old('email')}}" name="email" class="form-control" id="email" aria-describedby="email-area"
                    placeholder="enter email" />
                    @error('email')
                   <p class="text-danger"> {{$message}} </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" style="color: cornflowerblue;">Password</label>
                <input type="password" value="{{old('password')}}" name="password" class="form-control"  id="password" placeholder="Password" />
                @error('password')
                   <p class="text-danger"> {{$message}} </p>
                @enderror
            </div>
            <div class="form-group">
            <label for="category" style="color: cornflowerblue;">Category select</label>
            <select class="form-control" id="category" name="category_id">
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
              </select>
             </div>
             <div class="form-group">
             <label for="tag" style="color: cornflowerblue;">Tag select</label>
             <select multiple class="form-control" id="tag" name="tags[]">
            @foreach ($tags as $tag)
            <option value="{{$tag->id}}">{{$tag->title}}</option>
            @endforeach
              </select>
              </div><br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
