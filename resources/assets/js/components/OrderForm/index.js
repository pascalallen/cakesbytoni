import React, {Component} from 'react';
import { StyledDiv } from './styles';
import {Form, Button} from 'react-bootstrap';

class OrderForm extends Component {
  render(){
    return (
      <StyledDiv>
        <Form>
          <Form.Row>
            <Form.Group controlId="formBasicFirstName">
              <Form.Label>First Name</Form.Label>
              <Form.Control />
            </Form.Group>
            <Form.Group controlId="formBasicLastName">
              <Form.Label>Last Name</Form.Label>
              <Form.Control />
            </Form.Group>
            <Form.Group controlId="formBasicEmail">
              <Form.Label>Email address</Form.Label>
              <Form.Control type="email" />
              <Form.Text className="text-muted">
                We'll never share your email with anyone else.
              </Form.Text>
            </Form.Group>
          </Form.Row>
          <Form.Row>
            <Form.Group controlId="formBasicInstructions">
              <Form.Label>Special Instructions</Form.Label>
              <Form.Control as="textarea" rows="3" />
            </Form.Group>
            <Form.Group controlId="formBasicPhone">
              <Form.Label>Phone Number</Form.Label>
              <Form.Control type="number" />
            </Form.Group>
            <Form.Group controlId="formBasicProduct">
              <Form.Label>What do you want?</Form.Label>
              <Form.Control as="select">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </Form.Control>
            </Form.Group>
            <Form.Group controlId="formBasicDate">
              <Form.Label>Due Date</Form.Label>
              <Form.Control type="date" />
            </Form.Group>
          </Form.Row>
          <Form.Group controlId="formBasicSubmit">
            <Button variant="primary" type="submit">
              Submit
            </Button>
          </Form.Group>
        </Form>
      </StyledDiv>
      // <CenterRow>
      //   <h1>Order Inquiry</h1>
      //   {!! Form::open(array('action' => 'OrderController@new', 'files' => true, 'class' => 'form contact-form col-md-10')) !!}
      //     <div class="row">
      //       <div class="form-group col-md-4">
      //         {!! Form::label('firstNameLabel', 'First Name') !!}
      //         {!! Form::text('first_name', null, array('class' => 'form-control', 'placeholder' => 'Willy')) !!}
      //       </div>
      //       <div class="form-group col-md-4">
      //         {!! Form::label('lastNameLabel', 'Last Name') !!}
      //         {!! Form::text('last_name', null, array('class' => 'form-control', 'placeholder' => 'Wonka')) !!}
      //       </div>
      //       <div class="form-group col-md-4">
      //         {!! Form::label('emailLabel', 'E-Mail Address') !!}
      //         {!! Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'ww@chocofac.com')) !!}
      //       </div>
      //     </div>
      //     <div class="row">
      //       <div class="form-group col-md-8">
      //         {!! Form::label('instructionsLabel', 'Special Instructions') !!}
      //         {!! Form::textarea('instructions', null, array('class' => 'form-control', 'placeholder' => 'I want a golden goose!')) !!}
      //       </div>
      //       <div class="col-md-4">
      //         <div class="form-group">
      //           {!! Form::label('phoneNumberLabel', 'Phone Number') !!}
      //           {!! Form::text('phone_number', null, array('class' => 'form-control', 'placeholder' => '512-555-5555')) !!}
      //         </div>
      //         <div class="form-group">
      //           {!! Form::label('productsLabel', 'What do you want?') !!}
      //           <br>
      //           {!! 
      //             Form::select('product', array(
      //               'Cakes' => array('chocolateCake' => 'Chocolate', 'vanillaCake' => 'Vanilla', 'funfettiCake' => 'Funfetti'),
      //               'Cookies' => array('chocolateCookies' => 'Chocolate', 'peanutButterCookies' => 'Peanut Butter', 'sugarCookies' => 'Sugar', 'mAndMCookies' => 'M & M'),
      //               'Cupcakes' => array('chocolateCupcakes' => 'Chocolate', 'vanillaCupcakes' => 'Vanilla', 'funfettiCupcakes' => 'Funfetti'),
      //               'Other'
      //             ), null, array('class' => 'form-control')) 
      //           !!}
      //         </div>
      //         <div class="form-group">
      //           {!! Form::label('dueDateLabel', 'Due Date') !!}
      //           {!! Form::date('due_date', \Carbon\Carbon::now(), array('class' => 'form-control')) !!}
      //         </div>
      //       </div>
      //     </div>
      //     <div class="form-group">
      //       {!! Form::submit('Send!', array('class' => 'btn')) !!}
      //     </div>
      //   {!! Form::close() !!}
      // </CenterRow>
    )
  }
}
export default OrderForm;