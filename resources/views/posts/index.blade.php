@extends("layouts.app")

@section("content")

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Post</th>
      <th scope="col">Actions</th>
      <th scope="col">Edit</th>
      <th scope="col">Remove</th>
      <th scope="col"><a href="/post/create"><i class="bi bi-plus-lg"></i></a></th>
      
      
    </tr>
  </thead>
  <tbody> 
    @foreach ($allPosts as $post)
        <tr>
            <th scope="row">{{$post["id"]}}</th>
            <td>{{$post["text"]}}</td>
            <td><a href="{{route('post.show', $post)}}"class="btn btn-link" role="button" aria-pressed="true"><i class="bi bi-zoom-in"></i></a></td>
            <td><a href="{{route('post.edit', $post)}}"class="btn btn-link" role="button" aria-pressed="true"><i class="bi bi-pencil-square"></i></a></td>
            
            <td><form action="{{route('post.destroy', $post)}}" method="POST">
                @csrf
                @method('DELETE')
                <!-- Button trigger modal -->
                    <button type="button"  class="btn btn-link" data-toggle="modal" data-target="#exampleModal">
                    <i  class="bi bi-trash"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Attenzione</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Sei sicuro di voler eliminare definitivamente il post?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
                            <button type="submit" class="btn btn-primary">Elimina definitivamente</button>
                        </div>
                        </div>
                    </div>
                    </div>

            </form></td>
                
            
            <!-- <td><a href="{{route('post.destroy', $post)}}"><i class="bi bi-trash"></i></a></td> -->
            <!-- <td><a href="/post/{{$post['id']}}"><i class="bi bi-zoom-in"></i></a></td>
            <td><a href="/post/{{$post['id']}}/edit"><i class="bi bi-pencil-square"></i></a></td>
            <td><a href="/post/{{$post['id']}}/edit"><i class="bi bi-trash"></i></a></td> -->
            
        </tr>    
    @endforeach
  </tbody>
</table>

@endsection