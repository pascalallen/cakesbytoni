@extends('layouts.master')

@section('title')Welcome :)@endsection

@section('content')
	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<div class="row h-100 justify-content-center align-items-center">
		<div class="text-center">
			<h1 class="display-1 pageHeader rounded">Cakes By Toni</h1>
			<nav class="row navbar navbarScroll">
				<div class="col-3">
					<a class="lead underline-hover" href="#products">Products</a>
				</div>
				<div class="col-3">
					<a class="lead underline-hover" href="#about">About</a>
				</div>
				<div class="col-3">
					<a class="lead underline-hover" href="#contact">Contact</a>
				</div>
				<div class="col-3">
					<a class="lead underline-hover" href="/gallery">Gallery</a>
				</div>
			</nav>
		</div>
	</div>
	<div class="row h-100 justify-content-center align-items-center" id="products">
		<div id="cake" class="col-3 mx-auto">
			<div class="image-container">
				<img src="https://imgur.com/{{ $cakeImage->imgur_id }}.jpg" class="image img-fluid rounded">
				<div class="text-container">
					<a class="lead underline-hover image-text" href="/gallery">Cakes</a>
				</div>
			</div>
		</div>
		<div id="cookie" class="col-3 mx-auto">
			<div class="image-container">
				<img src="{{ asset('img/cookie.jpg') }}" class="image img-fluid rounded">
				<div class="text-container">
					<a class="lead underline-hover image-text" href="/gallery">Cookies</a>
				</div>
			</div>
		</div>
		<div id="cupcake" class="col-3 mx-auto">
			<div class="image-container">
				<img src="https://imgur.com/{{ $cupcakesImage->imgur_id }}.jpg" class="image img-fluid rounded">
				<div class="text-container">
					<a class="lead underline-hover image-text" href="/gallery">Cupcakes</a>
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
		<div class="row text-center">
			<h1>Order Inquiry Form</h1>
		</div>
		{!! Form::open(array('action' => 'OrderController@new', 'files' => true, 'class' => 'form contact-form col-10')) !!}
			<div class="row">
				<div class="form-group col-4">
					{!! Form::label('firstNameLabel', 'First Name') !!}
					{!! Form::text('first_name', null, array('class' => 'form-control', 'placeholder' => 'Willy')) !!}
				</div>
				<div class="form-group col-4">
					{!! Form::label('lastNameLabel', 'Last Name') !!}
					{!! Form::text('last_name', null, array('class' => 'form-control', 'placeholder' => 'Wonka')) !!}
				</div>
				<div class="form-group col-4">
					{!! Form::label('emailLabel', 'E-Mail Address') !!}
					{!! Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'ww@chocofac.com')) !!}
				</div>
			</div>
			<div class="row">
				<div class="form-group col-8">
					{!! Form::label('instructionsLabel', 'Special Instructions') !!}
					{!! Form::textarea('instructions', null, array('class' => 'form-control', 'placeholder' => 'I want a golden goose!')) !!}
				</div>
				<div class="col-4">
					<div class="form-group">
						{!! Form::label('phoneNumberLabel', 'Phone Number') !!}
						{!! Form::text('phone_number', null, array('class' => 'form-control', 'placeholder' => '512-555-5555')) !!}
					</div>
					<div class="form-group">
						{!! Form::label('productsLabel', 'What do you want?') !!}
						<br>
						{!! 
							Form::select('product', array(
								'Cakes' => array('chocolateCake' => 'Chocolate', 'vanillaCake' => 'Vanilla', 'funfettiCake' => 'Funfetti'),
								'Cookies' => array('chocolateCookies' => 'Chocolate', 'peanutButterCookies' => 'Peanut Butter', 'sugarCookies' => 'Sugar', 'mAndMCookies' => 'M & M'),
								'Cupcakes' => array('chocolateCupcakes' => 'Chocolate', 'vanillaCupcakes' => 'Vanilla', 'funfettiCupcakes' => 'Funfetti'),
								'Other'
							), null, array('class' => 'form-control')) 
						!!}
					</div>
					<div class="form-group">
						{!! Form::label('dueDateLabel', 'Due Date') !!}
						{!! Form::date('due_date', \Carbon\Carbon::now(), array('class' => 'form-control')) !!}
					</div>
				</div>
			</div>
			<!-- <div class="form-group">
				{!! Form::file('image', array('class' => 'form-control-file')) !!}
			</div> -->
			<!-- <div class="form-group">
				{!! Form::label('checkboxLabel', 'loremasdadmsdfsasdfsdkdsfk') !!}
				{!! Form::checkbox('name', '1', array('class' => 'form-check-input')) !!}
			</div> -->
			<div class="form-group">
				{!! Form::submit('Send!', array('class' => 'btn btn-success')) !!}
			</div>
		{!! Form::close() !!}
	</div>
@endsection