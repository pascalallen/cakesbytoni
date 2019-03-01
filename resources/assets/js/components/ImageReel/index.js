import React, {Component} from 'react';
import PropTypes from 'prop-types';
import { connect } from 'react-redux';
import { StyledImage, StyledDiv } from './styles';
import { fetchAll } from '../../actions/resource';

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

    return (
      <StyledDiv>
        {fetched && data.map((item, i) => (
          <StyledImage
            key={i}
            src={`https://i.imgur.com/${item.imgur_id}.jpg`}
          />
        ))}
      </StyledDiv>
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