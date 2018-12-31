import PropTypes from 'prop-types';
import { lifecycle, compose } from 'recompose';
// import { StyledHomePage } from './styles';
import Banner from 'components/Banner';
import Carousel from 'components/Carousel';
import About from 'components/About';
import OrderForm from 'components/OrderForm';

const HomePage = ({
  homeData,
}) => (

);

HomePage.propTypes = {
  homeData: PropTypes.shape({}).isRequired,
};

HomePage.defaultProps = {
  // 
};

const withDataOnLoad = lifecycle({
  componentDidMount() {
    const {
      fetchHomeData,
    } = this.props;
    fetchHomeData();
  },
});

export default compose(
  withDataOnLoad,
)(HomePage);