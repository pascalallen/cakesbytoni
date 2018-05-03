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
    			<img src="{{ asset('img/cow.svg') }}" class="col-6 icon">
    		</div>
    		<div class="row" id="gmo" style="background-color: #a3cef1;">
    			<img src="{{ asset('img/gmo.svg') }}" class="col-6 icon">
    			<h1 class="col-6">GMO free</h1>
    		</div>
    		<div class="row" id="gluten" style="background-color: #274c77;">
    			<h1 class="col-6">Gluten free</h1>
    			<img src="{{ asset('img/gluten.svg') }}" class="col-6 icon">
    		</div>
    		<div class="row" id="organic" style="background-color: #a3cef1;">
    		 	<img src="{{ asset('img/organic.svg') }}" class="col-6 icon">
    			<h1 class="col-6">Organic</h1>
    		</div>
    	</div>
    </div>
	<div class="row h-100 justify-content-center align-items-center" id="contact">
    	<div class="col">
			<form id="contact-form">
				<div class="form-inline">
					<label for="first_name">First name</label>
					<input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter first name">
					<label for="last_name">Last name</label>
					<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter last name">
				</div>
				<div class="form-group">
					<label for="email">Email address</label>
					<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label for="type">What</label>
					<select class="form-control" id="type" name="type">
						<option>Cake</option>
						<option>Ice Cream</option>
						<option>Ice Cream Cake</option>
						<option>Cookies</option>
						<option>Pie</option>
						<option>Pastries</option>
					</select>
				</div>
				<div class="form-group">
					<label for="instructions">Special instructions</label>
					<textarea class="form-control" id="instructions" name="instructions" rows="8"></textarea>
				</div>
				<div class="form-group">
					<label for="file">Attachment</label>
					<input type="file" class="form-control-file" id="file" name="file">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
    	</div>
    </div>
@endsection