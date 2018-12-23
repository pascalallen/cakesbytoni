@extends('layouts.master')

@section('title')Welcome :)@endsection

@section('content')
	{{-- Validation errors --}}
	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	{{-- Top banner --}}
	<div class="row h-100 justify-content-center align-items-center" id="banner-logo"></div>
	{{-- Product thumbnails --}}
	<div class="row justify-content-center align-items-center" id="products">
		<div id="cake" class="col-md-4 mb-3">
			<div class="image-container">
				<img src="https://imgur.com/{{ $cakeImage->imgur_id }}.jpg" class="image img-fluid rounded">
				<div class="text-container">
					<a class="lead underline-hover image-text" href="/gallery">Cakes</a>
				</div>
			</div>
		</div>
		<div id="cookie" class="col-md-4 mb-3">
			<div class="image-container">
				<img src="{{ asset('img/cookie.jpg') }}" class="image img-fluid rounded">
				<div class="text-container">
					<a class="lead underline-hover image-text" href="/gallery">Cookies</a>
				</div>
			</div>
		</div>
		<div id="cupcake" class="col-md-4 mb-3">
			<div class="image-container">
				<img src="https://imgur.com/{{ $cupcakesImage->imgur_id }}.jpg" class="image img-fluid rounded">
				<div class="text-container">
					<a class="lead underline-hover image-text" href="/gallery">Cupcakes</a>
				</div>
			</div>
		</div>
	</div>
	{{-- About --}}
	<div class="row h-100 justify-content-center align-items-center" id="about">
		<div class="text-center">
			<div class="row" id="vegan" style="background-color: #773344;">
				<h1 class="col-6">Vegan</h1>
				<img src="{{ asset('img/cow.svg') }}" class="col-6 icon">
			</div>
			<div class="row" id="gmo" style="background-color: #e3b5a4;">
				<img src="{{ asset('img/gmo.svg') }}" class="col-6 icon">
				<h1 class="col-6">GMO free</h1>
			</div>
			<div class="row" id="gluten" style="background-color: #773344;">
				<h1 class="col-6">Gluten free</h1>
				<img src="{{ asset('img/gluten.svg') }}" class="col-6 icon">
			</div>
			<div class="row" id="organic" style="background-color: #e3b5a4;">
				<img src="{{ asset('img/organic.svg') }}" class="col-6 icon">
				<h1 class="col-6">Organic</h1>
			</div>
		</div>
	</div>
	{{-- Contact form --}}
	<div class="row h-100 justify-content-center align-items-center" id="contact">
		<div class="row text-center">
			<h1>Order Inquiry Form</h1>
		</div>
		{!! Form::open(array('action' => 'OrderController@new', 'files' => true, 'class' => 'form contact-form col-md-10')) !!}
			<div class="row">
				<div class="form-group col-md-4">
					{!! Form::label('firstNameLabel', 'First Name') !!}
					{!! Form::text('first_name', null, array('class' => 'form-control', 'placeholder' => 'Willy')) !!}
				</div>
				<div class="form-group col-md-4">
					{!! Form::label('lastNameLabel', 'Last Name') !!}
					{!! Form::text('last_name', null, array('class' => 'form-control', 'placeholder' => 'Wonka')) !!}
				</div>
				<div class="form-group col-md-4">
					{!! Form::label('emailLabel', 'E-Mail Address') !!}
					{!! Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'ww@chocofac.com')) !!}
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-8">
					{!! Form::label('instructionsLabel', 'Special Instructions') !!}
					{!! Form::textarea('instructions', null, array('class' => 'form-control', 'placeholder' => 'I want a golden goose!')) !!}
				</div>
				<div class="col-md-4">
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
			<div class="form-group">
				{!! Form::submit('Send!', array('class' => 'btn')) !!}
			</div>
		{!! Form::close() !!}
	</div>
@endsection