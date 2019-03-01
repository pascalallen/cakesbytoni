import React, { Component } from 'react';
import { CenterRow } from './styles';

class About extends Component {
  render(){
    return (
      <div>
        <CenterRow>Vegan</CenterRow>
        <CenterRow>Non-GMO</CenterRow>
        <CenterRow>Gluten-Free</CenterRow>
        <CenterRow>Organic</CenterRow>
        {/* <TextCol sm={6}>Vegan</TextCol><IconCol sm={6}><img src="/img/cow.svg" /></IconCol>
        <IconCol sm={6}><img src="/img/gmo.svg" /></IconCol><TextCol sm={6}>GMO free</TextCol>
        <TextCol sm={6}>Gluten free</TextCol><IconCol sm={6}><img src="/img/gluten.svg" /></IconCol>
        <IconCol sm={6}><img src="/img/organic.svg" /></IconCol><TextCol sm={6}>Organic</TextCol> */}
      </div>  
    )
  }
}
export default About;