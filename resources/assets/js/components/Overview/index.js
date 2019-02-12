import React from 'react';
import PropTypes from 'prop-types';
import { connect } from 'react-redux';
import ReactTable from 'react-table';
import 'react-table/react-table.css';
import { Link } from 'react-router-dom';
import { fetchUser } from '../../actions/user';
import { fetchAll } from '../../actions/resource';

import structure from './structures';

const mapStateToProps = state => ({
  user: state.user.user,
  items: state.dataList.data,
  isDataFetched: state.dataList.fetched,
  params: state.dataList.params,
});

class Overview extends React.Component {
  constructor(props) {
    super(props);
  }

  componentDidMount() {
      this.props.fetchDataList(this.props.panelObject.panelSlug);
  }

  updateTable(state) {
    this.props.fetchDataList(this.props.panelObject.panelSlug, state);
  }

  /* eslint-disable no-param-reassign */
  render() {
    const {
      items, isDataFetched, params, panelObject,
    } = this.props;
    let renderedItems = [];

    if (isDataFetched && Array.isArray(items)) {
      renderedItems = items;
    }

    /* eslint-enable no-param-reassign */
    return (
      <div>
        <ReactTable
          filterable
          data={renderedItems}
          columns={structure(panelObject.panelSlug)}
          manual
          pages={params.pages}
          loading={params.loading} // Display the loading overlay when we need it
          onFetchData={this.updateTable}
          className="-striped -highlight"
        />
      </div>
    );
  }
}

Overview.propTypes = {
  fetchDataList: PropTypes.func.isRequired,
  panelObject: PropTypes.shape({
    panelSlug: PropTypes.string,
    panelName: PropTypes.string,
  }).isRequired,
  isDataFetched: PropTypes.bool.isRequired,
  items: PropTypes.oneOfType([
    PropTypes.array,
    PropTypes.object,
  ]).isRequired,
};

export default connect(
  mapStateToProps,
  {
    fetchUser,
    fetchDataList,
  },
)(Overview);
