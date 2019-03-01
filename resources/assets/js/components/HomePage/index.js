import React from 'react';
import { connect } from 'react-redux';
import Banner from '../Banner';
import ImageReel from '../ImageReel';
import OrderForm from '../OrderForm';

class HomePage extends React.Component {
  render() {
    return (
      <div>
        <Banner />
        <ImageReel />
        <OrderForm />
      </div>
    );
  }
}

export default connect()(HomePage);