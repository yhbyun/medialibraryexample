@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>

                <div class="card-body">
                    <form method="POST" action="/posts" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" type="text" class="form-control" id="title" placeholder="Enter Title" value="{{old('title')}}">
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="content" class="form-control" id="content">{{old('content')}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Image</label>
                            <input name="image" type="file" class="form-control-file" id="image">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Submit"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection