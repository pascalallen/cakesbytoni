import React from 'react';
import { connect } from 'react-redux';
import Banner from '../Banner';
import ImageReel from '../ImageReel';
import About from '../About';
import OrderForm from '../OrderForm';

class HomePage extends React.Component {
  render() {
    return (
      <div>
        <Banner />
        <ImageReel />
        <About />
        <OrderForm />
      </div>
    );
  }
}

export default connect()(HomePage);