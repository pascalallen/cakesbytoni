import React from 'react';
import { connect } from 'react-redux';
import Banner from '../Banner';
import About from '../About';
// import ImageReel from '../ImageReel';

class HomePage extends React.Component {
  render() {
    return (
      <div>
        <Banner />
        {/* <ImageReel /> */}
        <About />
      </div>
    );
  }
}

export default connect()(HomePage);