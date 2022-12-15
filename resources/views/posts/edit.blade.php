@extends('../main.app')

@section('title-block')

Add post

@endsection

@section('content')

<div class="header flex-column">

    <div class="blog">Edit post</div>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach()
        </ul>
    </div>
    @endif

    <form class="add-form" action="{{route('posts.update', $data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method(('patch'))
        <h5>Title:</h5>
        <input class="form_laravel form-control mb-3" type="text" name="name" id="name" placeholder="" value="{{$data->name}}">
        <h5>Text:</h5>
        <textarea class="form_laravel form-control mb-3" type="textarea" name="full_text" id="full_text" placeholder="">{{$data->full_text}}</textarea>
        <h5>Picture:</h5>
        <img src="{{asset('/storage/' . $data->image)}}" class="rounded mb-3 old-image" style="width: 120px" alt="...">
        <img src="" class="rounded mb-3 new-image" style="width: 120px" id="result" alt="">
        <input type="file" name="image" id="image" class="form_laravel form-control mb-5 uploadImage" accept="image/*">
        <button class="btn btn-success" type="submit">Update</button>
    </form>

</div>

@endsection
