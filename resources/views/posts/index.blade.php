@extends("layouts.app")

@section("content")

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Post</th>
      <th scope="col">Actions</th>
      <th scope="col"><a href="/post/create"><i class="bi bi-plus-lg"></i></a></th>
      
    </tr>
  </thead>
  <tbody> 
    @foreach ($allPosts as $post)
        <tr>
            <th scope="row">{{$post["id"]}}</th>
            <td>{{$post["text"]}}</td>
            <td><a href="/post/{{$post['id']}}"><i class="bi bi-zoom-in"></i></a></td>
            <td></td>
        </tr>    
    @endforeach
  </tbody>
</table>

@endsection