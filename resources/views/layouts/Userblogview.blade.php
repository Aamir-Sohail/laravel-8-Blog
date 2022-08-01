
@extends('layouts.app')
@section('content')

<form class="form-inline my-2 my-lg-0" action="" method="GET">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search"
        value="">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    <a href="{{ url('Userblogview1') }}">
        <button class="btn btn-outline-dark" type="button"> Reset</button>
    </a>
</form>
<div class="container">
<h3>Show All Data</h3>
<table class="table">

<thead>
    <tr>
        <th>ID</th>
        <th>UserName</th>
        <th>BlogName</th>
        <th>Email</th>
        <th>Contact Number</th>
        <th>Description</th>
        <th>File</th>

    </tr>
</thead>
<tbody>
    @foreach ($blog as $blogview)
        <tr>
            <td>{{ $blogview->id }}</td>
            <td>{{ $blogview->username }}</td>
            <td>{{ $blogview->blogname }}</td>
            <td>{{ $blogview->email }}</td>
            <td>{{ $blogview->contact_no }}</td>
            <td>{{ $blogview->description }}</td>
            <td>
                <img src="{{ asset('uploads/blog/'.$blogview->file) }}" width="70px" height="70px" alt="image">
            </td>


            <td>

                {{-- The Route methode --}}
                    <a href="{{ route('blog.delete', ['id' => $blogview->id]) }}">



                    <button class="btn btn-danger">
                        Delete
                    </button>
                </a>
                <a href="{{ route('blog.edit',['id' => $blogview->id]) }}">
                    <button class="btn btn-primary">
                        Edit
                    </button>
                </a>
            </td>
        </tr>

    @endforeach
</tbody>
{{-- pagination for the data --}}

</table>
{{-- {{$customers->links()}} --}}

</div>

<style>
.w-5{
width: 25px;
};
</style>
</body>
</html>

@endsection
