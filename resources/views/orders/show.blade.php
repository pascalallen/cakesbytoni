@extends('layouts.master')

@section('title')Thanks! :)@endsection

@section('content')
    <div class="row justify-content-center align-items-center navContainer">    
		<div class="text-center">
			<nav class="row navbar navbarStyle fixed-top">
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
    <div class="text-center">
        <h1>Thank You :)</h1>
        <div class="card mx-auto bg-success mt-5 fixed-top" style="max-width: 18rem;">
            <div class="card-header">Success!<span class="float-right clickable cursor-pointer" id="card" data-effect="fadeOut"><i class="fa fa-times"></i></span></div>
            <div class="card-body">
                <h5 class="card-title">Your order inquiry has been placed.</h5>
                <p class="card-text">Congrats! You are one step closer to making your taste buds very happy. <br> 
                I will be contacting you shortly.
                P.S. Come back to this page if you need to make any changes. Have a great day!</p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">

		{!! Form::open(array('class' => 'form contact-form col-md-10')) !!}
			<div class="row">
				<div class="form-group col-md-4">
					{!! Form::label('firstNameLabel', 'First Name') !!}
					{!! Form::text('first_name', $order->first_name, array('class' => 'form-control', 'placeholder' => 'Willy')) !!}
				</div>
				<div class="form-group col-md-4">
					{!! Form::label('lastNameLabel', 'Last Name') !!}
					{!! Form::text('last_name', $order->last_name, array('class' => 'form-control', 'placeholder' => 'Wonka')) !!}
				</div>
				<div class="form-group col-md-4">
					{!! Form::label('emailLabel', 'E-Mail Address') !!}
					{!! Form::text('email', $order->email, array('class' => 'form-control', 'placeholder' => 'ww@chocofac.com')) !!}
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-8">
					{!! Form::label('instructionsLabel', 'Special Instructions') !!}
					{!! Form::textarea('instructions', $order->instructions, array('class' => 'form-control', 'placeholder' => 'I want a golden goose!')) !!}
				</div>
				<div class="col-md-4">
					<div class="form-group">
						{!! Form::label('phoneNumberLabel', 'Phone Number') !!}
						{!! Form::text('phone_number', $order->phone_number, array('class' => 'form-control', 'placeholder' => '512-555-5555')) !!}
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
							), $order->product, array('class' => 'form-control')) 
						!!}
					</div>
					<div class="form-group">
						{!! Form::label('dueDateLabel', 'Due Date') !!}
						{!! Form::date('due_date', $order->due_date, array('class' => 'form-control')) !!}
					</div>
				</div>
			</div>
			<div class="form-group">
				{!! Form::submit('Update', array('class' => 'btn')) !!}
			</div>
		{!! Form::close() !!}
	</div>
@endsection