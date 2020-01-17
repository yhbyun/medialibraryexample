@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post Details</div>

                <div class="card-body">
                    <div>Title:  {{$post->title}}</div>
                    <div>Content : {{$post->content}}</div>
                    <div>Image</div>
                    <div><img src="{{$post->getFirstMediaUrl('images', 'thumb')}}" /></div>
                    <div>Responsive Image</div>
                    <div>{{ $post->getFirstMedia('images') }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection