import React, {Component} from 'react';
import PropTypes from 'prop-types';
import { connect } from 'react-redux';
import { CenterRow } from './styles';
import { fetchAll } from '../../actions/resource';
import Carousel from 'react-bootstrap/Carousel';

const mapStateToProps = state => ({
  data: state.resource.data,
  fetched: state.resource.fetched,
});

class ImageReel extends Component {
  constructor(props) {
    super(props);
    this.handleSelect = this.handleSelect.bind(this);
    this.state = {
      index: 0,
      direction: null,
    };
  }

  componentDidMount() {
    this.props.fetchAll('images');
  }

  handleSelect(selectedIndex, e) {
    this.setState({
      index: selectedIndex,
      direction: e.direction,
    });
  }

  render(){
    const {
      data, fetched,
    } = this.props;

    const { index, direction } = this.state;

    let renderedData = [];

    if (fetched && Array.isArray(data)) {
      renderedData = data.map((item) => {
        return item;
      });
    }

    return (
      <CenterRow>
        <Carousel
          activeIndex={index}
          direction={direction}
          onSelect={this.handleSelect}
        >
          {renderedData && renderedData.map((item, i) => (
            <Carousel.Item key={i}>
              <img
                className="d-block w-100"
                src={`https://i.imgur.com/${item.imgur_id}.jpg`}
                alt="Not found :("
              />
            </Carousel.Item>
          ))}
        </Carousel>
      </CenterRow>
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