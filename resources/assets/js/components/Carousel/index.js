import React, {Component} from 'react';
// import { StyledCarousel } from './styles';

class Carousel extends Component {
  render(){
    return (
      <div className="row justify-content-center align-items-center">
        <div id="carouselExampleIndicators" className="carousel slide" data-ride="carousel">
          <ol className="carousel-indicators">
            @foreach ($images as $key => $value)
              <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" className="@if ($loop->first) active @endif"></li>
            @endforeach
          </ol>
          <div className="carousel-inner">
            @foreach ($images as $image)
              <div className="carousel-item @if ($loop->first) active @endif">
                <img className="d-block w-100" src="https://i.imgur.com/{{$image->imgur_id}}.jpg">
              </div>
            @endforeach
          </div>
          <a className="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span className="carousel-control-prev-icon" aria-hidden="true"></span>
            <span className="sr-only">Previous</span>
          </a>
          <a className="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span className="carousel-control-next-icon" aria-hidden="true"></span>
            <span className="sr-only">Next</span>
          </a>
        </div>
      </div>
    )
  }
}
export default Carousel;