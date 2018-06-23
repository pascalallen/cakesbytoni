@extends('layouts.master')

@section('title'){{ $image->name }} :)@endsection

@section('content')
    <div class="row justify-content-center align-items-center">
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
	<div class="row justify-content-center align-items-center">
        <div class="col mx-auto">
            <div class="image-container">
                <img src="https://imgur.com/{{ $image->imgur_id }}.jpg" class="img-fluid">
            </div>
        </div>
	</div>
@endsection