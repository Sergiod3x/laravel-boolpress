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
            <form action='{{route("post.store")}}' method='POST'>
                @csrf
                <div class="form-group">
                    <label for="text">Post</label>
                    <textarea class="form-control" name="text" id ="text" rows="3"></textarea>
                    <!-- <input type="text" name="text" id ="text"> -->
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