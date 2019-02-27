import React, {Component} from 'react';
import { CenterRow } from './styles';

class OrderForm extends Component {
  render(){
    return (
      <CenterRow>
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
      </CenterRow>
    )
  }
}
export default OrderForm;