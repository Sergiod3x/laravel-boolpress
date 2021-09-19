@extends("layouts.app")

@section("content")


<div class='container'>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error) 
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class='row'>
        <div class='col-12'>
            <form action='{{route("post.update", $post)}}' method='POST'>
                @csrf
                @method ('PUT')
                <div class="form-group">
                    <label for="text">Post</label>
                    <textarea class="form-control" name="text" id ="text" rows="3" > <?php echo $post->text ?></textarea>
                    <!-- <input type="text" name="text" id ="text" value="{{$post->text}}"> -->
                    <!-- placeholder="{{$post->text}}" -->
                    <!-- Soluction : {{$post->text}} 
                     OR -->
                  <!-- < ? php echo $post->text ?>  -->
                </div>
                <div class="form-group">
                    <input type="submit" value="Invia">
                    <a href="/post"><i class="bi bi-arrow-90deg-left"></i></a>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection