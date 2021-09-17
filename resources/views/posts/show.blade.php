@extends("layouts.app")

@section("content")

<table class="table">
  <thead>
    <tr>
    <a href="/post"><i class="bi bi-arrow-90deg-left"></i></a>
      <th scope="col">#</th>
      <th scope="col">Post</th>
    </tr>
  </thead>
  <tbody> 
        <tr>
            <th scope="row">{{$post["id"]}}</th>
            <td>{{$post["text"]}}</td>
        </tr>    
  </tbody>
</table>

@endsection