import React from 'react';
import { connect } from 'react-redux';
import Banner from '../Banner';
// import About from '../About';
import ImageReel from '../ImageReel';
// import OrderForm from '../OrderForm';

class HomePage extends React.Component {
  render() {
    return (
      <div>
        <Banner />
        <ImageReel />
        {/* <About /> */}
        {/* <OrderForm /> */}
      </div>
    );
  }
}

export default connect()(HomePage);