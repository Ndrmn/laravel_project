@extends('../main.app')

@section('title-block')

{{$data->name}}

@endsection

@section('content')

<div class="header flex-column">

    <div class="blog">{{$data->name}}</div>

    <div class="card" style="width: 50%; margin-bottom: 20px;">
        <img src="{{asset('/storage/' . $data->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">{{$data->full_text}}</p>
            <p class="card-text text-end">Author: {{$user->name}}</p>

        </div>
    </div>

</div>
@endsection
