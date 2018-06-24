@extends('layouts.master')

@section('title')Thanks! :)@endsection

@section('content')
    <div class="row justify-content-center align-items-center">
        <div class="text-center">
            <div class="row navbar">
                <div class="col-4">
                    <a class="lead underline-hover" href="/">Home</a>
                </div>
                <div class="col-4">
                    <a class="lead underline-hover" href="/#products">Products</a>
                </div>
                <div class="col-4">
                    <a class="lead underline-hover" href="/#about">About</a>
                </div>
            </div>
            <h1 class="display-1">Thank You :)</h1>
            <ul class="list-group w-100 mx-auto" id="order-list">
                <li class="list-group-item" style="background-color: #274c77;"><i class="float-left far fa-edit cursor-pointer" id="edit"></i>{{ $order->first_name }} {{ $order->last_name }}</li>
                <li class="list-group-item" style="background-color: #a3cef1;">{{ $order->email }}</li>
                <li class="list-group-item" style="background-color: #274c77;">{{ $order->instructions }}</li>
                <li class="list-group-item" style="background-color: #a3cef1;">{{ $order->due_date }}</li>
                <li class="list-group-item" style="background-color: #274c77;">{{ $order->phone_number }}</li>
                <li class="list-group-item" style="background-color: #a3cef1;">{{ $order->product }}</li>
            </ul>
            <ul class="list-group w-100 mx-auto" id="order-form">
                {!! Form::open() !!}
                    <li class="list-group-item" style="background-color: #a3cef1;"><input type="text" class="form-control" name="first_name" value="{{ $order->first_name }}"></li>
                    <li class="list-group-item" style="background-color: #274c77;"><input type="text" class="form-control" name="last_name" value="{{ $order->last_name }}"></li>
                    <li class="list-group-item" style="background-color: #a3cef1;"><input type="email" class="form-control" name="email" value="{{ $order->email }}"></li>
                    <li class="list-group-item" style="background-color: #274c77;"><textarea class="form-control" name="instructions">{{ $order->instructions }}</textarea></li>
                    <li class="list-group-item" style="background-color: #a3cef1;"><input type="date" class="form-control" name="due_date" value="{{ $order->due_date }}"></li>
                    <li class="list-group-item" style="background-color: #274c77;"><input type="text" class="form-control" name="phone_number" value="{{ $order->phone_number }}"></li>
                    <li class="list-group-item" style="background-color: #a3cef1;">
                        {!! 
                            Form::select('product', array(
                                'Cakes' => array('chocolateCake' => 'Chocolate', 'vanillaCake' => 'Vanilla'),
                                'Cookies' => array('chocolateCookies' => 'Chocolate', 'peanutButterCookies' => 'Peanut Butter', 'sugarCookies' => 'Sugar', 'mAndMCookies' => 'M & M'),
                                'Ice Cream' => array('chocolateIceCream' => 'Chocolate', 'vanillaIceCream' => 'Vanilla', 'mintIceCream' => 'Mint'),
                                'Pastries' => array('chocolatePastries' => 'Chocolate', 'vanillaPastries' => 'Vanilla', 'mintPastries' => 'Mint'),
                                'Other'
                            ), $order->product, array('class' => 'form-control')) 
                        !!}
                    </li>
                    {!! Form::submit('Save', ['class' => 'btn btn-success btn-sm']) !!}
                {!! Form::close() !!}
            </ul>
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
    </div>

@endsection