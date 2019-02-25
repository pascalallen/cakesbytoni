import React from 'react';
import { connect } from 'react-redux';
import Banner from '../Banner';

class HomePage extends React.Component {
  render() {
    return (
      <Banner />
    );
  }
}

export default connect()(HomePage);