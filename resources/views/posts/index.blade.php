@extends('layouts.app')


@section('content')
<div class="d-flex justify-content-end mb-2">
    <a href="{{route('posts.create')}}" class="btn btn-success">Add Post</a>
</div>

<div class="card card-default">
    <div class="card-header">Posts</div>
    <div class="card-body">
        <table class="table">
            <thead>
                <th>Images</th>
                <th>Titles</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>      
                    <td>
                    <img src=" {{URL::to('storage/'.$post->image)}}" width="80px" height="60px" alt="">
                    </td>
                    <td>
                        {{$post->title}}
                    </td>
                    <td> <a href="" class="button btn btn-info btn-sm">Edit</a></td>
                    <td> <a href="" class="button btn btn-danger btn-sm">Trash</a></td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>
@endsection