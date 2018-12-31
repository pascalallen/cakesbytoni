import React, {Component} from 'react';
// import { StyledAbout } from './styles';

class About extends Component {
  render(){
    return (
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
    )
  }
}
export default About;