import React, {Component} from 'react';
import { StyledDiv } from './styles';
import {Form, Button, Col} from 'react-bootstrap';

class OrderForm extends Component {
  render(){
    return (
      <StyledDiv>
        <Form method="POST" className="form col-md-8">
          <Form.Row>
            <Form.Group controlId="formBasicFirstName" className="col-md-4">
              <Form.Label>First Name</Form.Label>
              <Form.Control />
            </Form.Group>
            <Form.Group controlId="formBasicLastName" className="col-md-4">
              <Form.Label>Last Name</Form.Label>
              <Form.Control />
            </Form.Group>
            <Form.Group controlId="formBasicEmail" className="col-md-4">
              <Form.Label>Email address</Form.Label>
              <Form.Control type="email" />
              <Form.Text className="text-muted">
                We'll never share your email with anyone else.
              </Form.Text>
            </Form.Group>
          </Form.Row>
          <Form.Row>
            <Form.Group controlId="formBasicInstructions" className="col-md-8">
              <Form.Label>Special Instructions</Form.Label>
              <Form.Control as="textarea" cols="50" rows="11  " />
            </Form.Group>
            <Col md={4}>
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
              <Form.Group controlId="formBasicSubmit">
                <Button variant="primary" type="submit">
                  Submit
                </Button>
              </Form.Group>
            </Col>
          </Form.Row>
        </Form>
      </StyledDiv>
    )
  }
}
export default OrderForm;