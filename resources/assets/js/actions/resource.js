import axios from 'axios/index';
import * as constants from '../constants';

const baseUrl = '/api';

export function fetchSingle(component, slug, params = {}) {
  return (dispatch) => {
    dispatch({ type: constants.FETCH_SINGLE });
    axios.get(`${baseUrl}/${component}/${slug}`, {
      params,
    })
      .then((response) => {
        dispatch({
          type: constants.FETCH_SINGLE_SUCCESS,
          payload: response.data,
        });
      })
      .catch((err) => {
        dispatch({ type: constants.FETCH_SINGLE_ERROR, payload: err });
      });
  };
}

export function fetchAll(component, optionalParams = {}) {
  return (dispatch) => {
    dispatch({ type: constants.FETCH_ALL });
    axios.get(`${baseUrl}/${component}`, {
      params: optionalParams,
    })
      .then((response) => {
        dispatch({
          type: constants.FETCH_ALL_SUCCESS,
          payload: response.data,
        });
      })
      .catch((err) => {
        dispatch({ type: constants.FETCH_ALL_ERROR, payload: err });
      });
  };
}
