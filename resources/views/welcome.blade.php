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
	<div class="row justify-content-center align-items-center">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				@foreach ($images as $key => $value)
					<li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class="@if ($loop->first) active @endif"></li>
				@endforeach
			</ol>
			<div class="carousel-inner">
				@foreach ($images as $image)
					<div class="carousel-item @if ($loop->first) active @endif">
						<img class="d-block w-100" src="https://i.imgur.com/{{$image->imgur_id}}.jpg">
					</div>
				@endforeach
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	{{-- About --}}
	<div class="row h-100 justify-content-center align-items-center">
		<div class="text-center">
			<div class="row">
				<h1 class="col-6">Vegan</h1>
				<img src="{{ asset('img/cow.svg') }}" class="col-6 icon">
			</div>
			<div class="row">
				<img src="{{ asset('img/gmo.svg') }}" class="col-6 icon">
				<h1 class="col-6">GMO free</h1>
			</div>
			<div class="row">
				<h1 class="col-6">Gluten free</h1>
				<img src="{{ asset('img/gluten.svg') }}" class="col-6 icon">
			</div>
			<div class="row">
				<img src="{{ asset('img/organic.svg') }}" class="col-6 icon">
				<h1 class="col-6">Organic</h1>
			</div>
		</div>
	</div>
	{{-- Contact form --}}
	{{-- <div class="row h-100 justify-content-center align-items-center">
		<h1>Order Inquiry</h1>
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
	</div> --}}
@endsection