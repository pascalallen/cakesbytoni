import React, {Component} from 'react';
import { MainRow, IconRow, IconCol, TextCol } from './styles';
import {Row, Col} from 'react-bootstrap';

class About extends Component {
  render(){
    return (
      // <Row>
      //   <TextCol sm={6}>Vegan</TextCol><IconCol sm={6}><img src="/img/cow.svg" /></IconCol>
      //   <IconCol sm={6}><img src="/img/gmo.svg" /></IconCol><TextCol sm={6}>GMO free</TextCol>
      //   <TextCol sm={6}>Gluten free</TextCol><IconCol sm={6}><img src="/img/gluten.svg" /></IconCol>
      //   <IconCol sm={6}><img src="/img/organic.svg" /></IconCol><TextCol sm={6}>Organic</TextCol>
      // </Row>  
      <MainRow>
        {/* <div class="text-center">
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
        </div> */}
        test
      </MainRow>
    )
  }
}
export default About;