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
				<img src="https://imgur.com/{{ $cakeImage->imgur_id }}.jpg" class="image image-fluid">
				<div class="text-container">
					<a class="lead underline-hover image-text display-4" href="#">Cakes</a>
				</div>
			</div>
		</div>
		<div id="cookie" class="col-3 mx-auto">
			<div class="image-container">
				<img src="{{ asset('img/cookie.jpg') }}" class="image image-fluid">
				<div class="text-container">
					<a class="lead underline-hover image-text display-4" href="#">Cookies</a>
				</div>
			</div>
		</div>
		<div id="icecream" class="col-3 mx-auto">
			<div class="image-container">
				<img src="{{ asset('img/icecream.jpg') }}" class="image image-fluid">
				<div class="text-container">
					<a class="lead underline-hover image-text display-4" href="#">Ice Cream</a>
				</div>
			</div>
		</div>
		<div id="cupcake" class="col-3 mx-auto">
			<div class="image-container">
				<img src="https://imgur.com/{{ $cupcakesImage->imgur_id }}.jpg" class="image image-fluid">
				<div class="text-container">
					<a class="lead underline-hover image-text display-4" href="#">Cupcakes</a>
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
		<div class="text-center">
			<h1>What do you need?</h1>
		</div>
		{!! Form::open(array('action' => 'OrderController@new', 'files' => true, 'class' => 'form contact-form col-10')) !!}
			<div class="form-group">
				{!! Form::label('firstNameLabel', 'First Name') !!}
				{!! Form::text('first_name', 'Fuzzy', array('class' => 'form-control')) !!}
			</div>
			<div class="form-group">
				{!! Form::label('lastNameLabel', 'Last Name') !!}
				{!! Form::text('last_name', 'River', array('class' => 'form-control')) !!}
			</div>
			<div class="form-group">
				{!! Form::label('emailLabel', 'E-Mail Address') !!}
				{!! Form::text('email', 'example@gmail.com', array('class' => 'form-control')) !!}
			</div>
			<div class="form-group">
				{!! Form::label('instructionsLabel', 'Instructions') !!}
				{!! Form::textarea('instructions', 'Instructions', array('class' => 'form-control')) !!}
			</div>
			<div class="form-group">
				{!! Form::label('dueDateLabel', 'Due Date') !!}
				{!! Form::date('due_date', \Carbon\Carbon::now()) !!}
			</div>
			<div class="form-group">
				{!! Form::label('phoneNumberLabel', 'Phone Number') !!}
				{!! Form::text('phone_number', 'Phone Number', array('class' => 'form-control')) !!}
			</div>
			<div class="form-group">
				{!! Form::file('image', array('class' => 'form-control-file')) !!}
			</div>
			<div class="form-group">
				{!! Form::label('productsLabel', 'What do you want?') !!}
				<br>
				{!! 
					Form::select('product', array(
						'Cakes' => array('chocolateCake' => 'Chocolate', 'vanillaCake' => 'Vanilla'),
						'Cookies' => array('chocolateCookies' => 'Chocolate', 'peanutButterCookies' => 'Peanut Butter', 'sugarCookies' => 'Sugar', 'mAndMCookies' => 'M & M'),
						'Ice Cream' => array('chocolateIceCream' => 'Chocolate', 'vanillaIceCream' => 'Vanilla', 'mintIceCream' => 'Mint'),
						'Cupcakes' => array('chocolateCupcakes' => 'Chocolate', 'vanillaCupcakes' => 'Vanilla', 'mintCupcakes' => 'Mint'),
						'Other'
					), array('class' => 'form-control')) 
				!!}
			</div>
			<div class="form-group">
				{!! Form::label('checkboxLabel', 'loremasdadmsdfsasdfsdkdsfk') !!}
				{!! Form::checkbox('name', '1', array('class' => 'form-check-input')) !!}
			</div>
			<div class="form-group">
				{!! Form::submit('Send!', array('class' => 'btn btn-primary')) !!}
			</div>
		{!! Form::close() !!}
	</div>
@endsection