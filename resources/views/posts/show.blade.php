@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Product Details</div>

                <div class="card-body">
                    Title:  {{$post->title}} <br/><br/>
                    Content : {{$post->content}} <br/><br/>
                    Image: <img src="{{$post->getFirstMediaUrl('images', 'thumb')}}" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection