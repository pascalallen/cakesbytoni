import React, {Component} from 'react';
import { CenterRow, IconRow, IconCol, TextCol } from './styles';
import {Row, Col} from 'react-bootstrap';

class About extends Component {
  render(){
    return (
      <Row>
        <TextCol sm={6}>Vegan</TextCol><IconCol sm={6}><img src="/img/cow.svg" /></IconCol>
        <IconCol sm={6}><img src="/img/gmo.svg" /></IconCol><TextCol sm={6}>GMO free</TextCol>
        <TextCol sm={6}>Gluten free</TextCol><IconCol sm={6}><img src="/img/gluten.svg" /></IconCol>
        <IconCol sm={6}><img src="/img/organic.svg" /></IconCol><TextCol sm={6}>Organic</TextCol>
      </Row>  
    )
  }
}
export default About;