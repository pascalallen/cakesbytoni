@extends('layouts.master')

@section('title')Gallery :)@endsection

@section('content')
    <div class="row justify-content-center align-items-center navContainer">
		<div class="text-center">
			<nav class="row navbar fixed-top">
				<div class="col-3">
					<a class="lead underline-hover" href="/#products">Products</a>
				</div>
				<div class="col-3">
					<a class="lead underline-hover" href="/#about">About</a>
				</div>
				<div class="col-3">
					<a class="lead underline-hover" href="/#contact">Contact</a>
				</div>
				<div class="col-3">
					<a class="lead underline-hover" href="/gallery">Gallery</a>
				</div>
            </nav>
		</div>
	</div>
	<div class="row h-100 justify-content-center align-items-center">
        @foreach($images as $image)
            <div class="col-3 mx-auto">
                <div class="image-container">
                    <img src="https://imgur.com/{{ $image->imgur_id }}.jpg" class="image img-fluid image-padding">
                    <div class="text-container">
                        <a class="lead underline-hover image-text" href="gallery/{{ $image->id }}">{{ preg_replace("/\d+$/", "", $image->name) }}</a>
                    </div>
                </div>
            </div>
        @endforeach
	</div>
@endsection