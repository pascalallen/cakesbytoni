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
    this.updateTable = this.updateTable.bind(this);
    this.state = {
      filterContents: {},
    };
  }

  componentDidUpdate(prevProps) {
    if (this.props.isDataFetched && prevProps.panelObject.panelSlug !== this.props.panelObject.panelSlug) {
      // this.props.fetchDataList(this.props.panelObject.panelSlug);
    }
  }

  updateTable(state) {
    // TODO: what's this delay about?
    const delay = 1000;
    if (state.filtered && state.filtered.length > 0 && state.filtered !== this.state.filterContents) {
      clearTimeout(this.timer);
      // this.timer = setTimeout(() => this.props.fetchDataList(this.props.panelObject.panelSlug, state), delay);
    } else {
      // this.props.fetchDataList(this.props.panelObject.panelSlug, state);
    }
  }

  /* eslint-disable no-param-reassign */
  render() {
    const {
      items, isDataFetched, params, panelObject,
    } = this.props;
    let renderedItems = [];

    if (isDataFetched && Array.isArray(items)) {
      // Loop over items and replace approved by id with first and last name of actual person
      renderedItems = items.map((item) => {
        if (item.approved_by_user) {
          item.approved_by = `${item.approved_by_user.first_name} ${item.approved_by_user.last_name}`;
        } else {
          item.approved_by = '';
        }

        if (!item.created_by) {
          item.created_by = `"Legacy ${panelObject.panelSingularName}"`;
        } else {
          item.created_by = item.created_by.fullName;
        }

        return item;
      });
    }
    /* eslint-enable no-param-reassign */

    return (
      <MainPage>
        <h1>{panelObject.panelName} Overview</h1>
        <div style={{ textAlign: 'right' }}>
          { panelObject.settings && panelObject.settings.can_create_models &&
            <Link to={`/${panelObject.panelSlug}/editor`}>
              <button className="btn btn-primary">
                New {panelObject.panelSingularName}
              </button>
            </Link>
          }
        </div>
        <br />
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
      </MainPage>
    );
  }
}

Overview.propTypes = {
  // fetchDataList: PropTypes.func.isRequired,
  panelObject: PropTypes.shape({
    panelSlug: PropTypes.string,
    panelName: PropTypes.string,
  }).isRequired,
  isDataFetched: PropTypes.bool.isRequired,
  params: PropTypes.shape({
    loading: PropTypes.bool,
    from: PropTypes.number,
    to: PropTypes.number,
    total: PropTypes.number,
    totalErrors: PropTypes.number,
    newQuestions: PropTypes.number,
    currentPage: PropTypes.number,
    totalPages: PropTypes.number,
  }).isRequired,
  items: PropTypes.oneOfType([
    PropTypes.array,
    PropTypes.object,
  ]).isRequired,
};

export default connect(
  mapStateToProps,
  {
    fetchUser,
    // fetchDataList,
  },
)(Overview);
