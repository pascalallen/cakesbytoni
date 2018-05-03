@extends('layouts.master')

@section('title')Welcome :)@endsection

@section('content')
    <div class="row h-100 justify-content-center align-items-center">
    	<div class="text-center">
	    	<h1 class="display-1">Cakes By Toni</h1>
	    	<div class="row navbar">
	    	<div class="col-4">
	    	<a class="lead underline-hover" href="#products">Products</a>
	    	</div>
	    	<div class="col-4">
	    	<a class="lead underline-hover" href="#about">About</a>
	    	</div>
	    	<div class="col-4">
	    	<a class="lead underline-hover" href="#contact">Contact</a>
	    	</div>
	    	</div>
    	</div>
    </div>
	<div class="row h-100 justify-content-center align-items-center" id="products">
    	<div id="cake" class="col-3 mx-auto">
    		<div class="image-container">
				<img src="{{ asset('img/cake.jpg') }}" class="image rounded-circle image-fluid">
				<div class="text-container">
					<a class="lead underline-hover image-text display-4" href="#">Cakes</a>
				</div>
    		</div>
    	</div>
    	<div id="cookie" class="col-3 mx-auto">
    		<div class="image-container">
				<img src="{{ asset('img/cookie.jpg') }}" class="image rounded-circle image-fluid">
				<div class="text-container">
					<a class="lead underline-hover image-text display-4" href="#">Cookies</a>
				</div>
			</div>
    	</div>
    	<div id="icecream" class="col-3 mx-auto">
    		<div class="image-container">
				<img src="{{ asset('img/icecream.jpg') }}" class="image rounded-circle image-fluid">
				<div class="text-container">
					<a class="lead underline-hover image-text display-4" href="#">Ice Cream</a>
				</div>
			</div>
    	</div>
    	<div id="pastry" class="col-3 mx-auto">
    		<div class="image-container">
				<img src="{{ asset('img/pastry.jpg') }}" class="image rounded-circle image-fluid">
				<div class="text-container">
					<a class="lead underline-hover image-text display-4" href="#">Pastries</a>
				</div>
			</div>
    	</div>
    </div>
	<div class="row h-100 justify-content-center align-items-center" id="about">
    	<div class="text-center">
    		<div class="row" id="vegan" style="background-color: #274c77;">
    			<h1 class="col-6">Vegan</h1>
    			<img src="{{ asset('img/cow.svg') }}" class="col-6">
    		</div>
    		<div class="row" id="gmo" style="background-color: #a3cef1;">
    			<img src="{{ asset('img/gmo.svg') }}" class="col-6">
    			<h1 class="col-6">GMO free</h1>
    		</div>
    		<div class="row" id="gluten" style="background-color: #274c77;">
    			<h1 class="col-6">Gluten free</h1>
    			<img src="{{ asset('img/gluten.svg') }}" class="col-6">
    		</div>
    		<div class="row" id="organic" style="background-color: #a3cef1;">
    		 	<img src="{{ asset('img/organic.svg') }}" class="col-6">
    			<h1 class="col-6">Organic</h1>
    		</div>
    	</div>
    </div>
	<div class="row h-100 justify-content-center align-items-center" id="contact">
    	<div class="text-center">
	    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    	</div>
    </div>
@endsection