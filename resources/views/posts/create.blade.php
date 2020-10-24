@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form  method="post" enctype="multipart/form-data" action="{{route('posts.store')}}">
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Post Title</label>
                <input type="name" class="form-control @error('title') is-invalid @enderror"  name="title">
                @error('title')
                <p class="text-danger">{{$errors->first('title')}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Post Text</label>
                <input type="name" class="form-control @error('post_text') is-invalid @enderror"   name="post_text">
                @error('post_text')
                <p class="text-danger">{{$errors->first('post_text')}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Post Likes</label>
                <input type="name" class="form-control @error('likes') is-invalid @enderror"  name="likes">
                @error('likes')
                <p class="text-danger">{{$errors->first('likes')}}</p>
                @enderror
            </div>
        </div>
        @csrf
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
@endsection
