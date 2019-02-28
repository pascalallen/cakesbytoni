import React, {Component} from 'react';
import PropTypes from 'prop-types';
import { connect } from 'react-redux';
import { CenterRow, StyledImage } from './styles';
import { fetchAll } from '../../actions/resource';
import {Image} from 'react-bootstrap';

const mapStateToProps = state => ({
  data: state.resource.data,
  fetched: state.resource.fetched,
});

class ImageReel extends Component {
  constructor(props) {
    super(props);
  }

  componentDidMount() {
    this.props.fetchAll('images', {
      page_size: 4,
      random: true,
    });
  }

  render(){
    const {
      data, fetched,
    } = this.props;

    let renderedData = [];

    if (fetched && Array.isArray(data)) {
      renderedData = data.map((item) => {
        return item;
      });
    }

    return (
      <div>
        {renderedData && renderedData.map((item, i) => (
          <StyledImage
            key={i}
            src={`https://i.imgur.com/${item.imgur_id}.jpg`}
          />
        ))}
      </div>
    )
  }
}

ImageReel.propTypes = {
  fetchAll: PropTypes.func.isRequired,
  fetched: PropTypes.bool.isRequired,
  data: PropTypes.oneOfType([
    PropTypes.array,
    PropTypes.object,
  ]).isRequired,
};

export default connect(
  mapStateToProps,
  {
    fetchAll,
  },
)(ImageReel);