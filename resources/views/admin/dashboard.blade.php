@extends('../main.app')

@section('title-block')

Dashboard

@endsection

@section('content')

<div class="header flex-column">

    <h1>Dashboard</h1>



    <div class="btn-group mt-3 mb-3  btn-group-lg" role="group" aria-label="Large radio toggle button group">
        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
        <label class="btn btn-outline-danger posts" for="btnradio1">Posts</label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
        <label class="btn btn-outline-danger users" for="btnradio2">Users</label>
    </div>


    <div class="container postsTable">

        <h2 class="text-center">Posts</h2>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Created</th>
                <th scope="col">Updated</th>
                <th scope="col">User id</th>
                <th scope="col">Title</th>
                <th scope="col">Text</th>
                <th scope="col">Image</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>

            </tr>
            </thead>
            <tbody>

            @foreach($posts as $post)

            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>
                <td>{{$post->user_id}}</td>
                <td>{{$post->name}}</td>
                <td>{{$post->full_text}}</td>
                <td><img src="{{asset('/storage/' . $post->image)}}" style="width: 120px" class="rounded" alt="..."></td>
                <td><a href="{{asset('/posts/' . $post->id . '/edit')}}" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="{{ route('posts.delete', $post->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </td>
            </tr>
            @endforeach

            </tbody>
        </table>
    </div>


    <div class="container usersTable hiddenElem">

        <h2 class="text-center">Users</h2>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Created</th>
                <th scope="col">Updated</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Email verified at</th>
                <th scope="col">Delete</th>

            </tr>
            </thead>
            <tbody>

            @foreach($users as $user)

                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->email_verified_at}}</td>
                    <td>
                        <form action="{{ route('users.delete', $user->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>


    </div>
</div>
@endsection
