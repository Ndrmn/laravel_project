@extends('../main.app')

@section('title-block')

Blog

@endsection

@section('content')

<div class="header flex-column">

    <div class="blog">Blog</div>

    @foreach($data as $post)

    <div class="card" style="width: 50%; margin-bottom: 20px;">
        <img src="{{asset('/storage/' . $post->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$post->name}}</h5>
            @foreach ($users as $user)
                @if($post->user_id == $user->id)
                    <p class="card-text">Author: {{$user->name}}</p>
                @endif
            @endforeach
            <a href="{{asset('/posts/' . $post->id)}}" class="btn btn-danger">More</a>
        </div>
    </div>

    @endforeach

</div>
@endsection
