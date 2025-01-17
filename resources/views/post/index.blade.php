@extends('layout.main')
@section(section: 'content')
    <div>
    <?php $id = 1 ?>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  @foreach($posts as $post)
  <tbody>
    <tr>
      <th scope="row"><a href="{{ route('post.show', $post->id) }}">{{$id++}}</a></th>
      <td>{{ $post->name}}</td>
      <td>{{ $post->email}}</td>
      <td>{{ $post->password}}</td>
    </tr>
  </tbody>
  @endforeach
</table>

        <div><a href="{{route('post.create')}}">Create a new</a></div>
    </div>
@endsection
