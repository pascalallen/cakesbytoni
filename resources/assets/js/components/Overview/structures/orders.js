import React from 'react';
import { Link } from 'react-router-dom';
import matchSorter from 'match-sorter';

  // `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  // `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  // `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  // `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  // `product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  // `instructions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  // `due_date` date NOT NULL,
  // `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  // `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  // `image` blob,
  // `completed` tinyint(1) NOT NULL,
  // `unique_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  // `created_at` timestamp NULL DEFAULT NULL,
  // `updated_at` timestamp NULL DEFAULT NULL,

  export default [
    {
      Header: 'ID',
      accessor: 'id',
      width: 50,
      Cell: id => (<Link to={`/images/${id.value}`}>{id.value}</Link>),
      filterMethod: (filter, rows) =>
        matchSorter(rows, filter.value, { keys: ['id'] }),
      filterAll: true,
    },
    {
      Header: 'First Name',
      accessor: 'first_name',
      width: 100,
    },
    {
      Header: 'Last Name',
      accessor: 'last_name',
      width: 100,
    },
    {
      Header: 'Email',
      accessor: 'email',
      width: 100,
    },
    {
      Header: 'Product',
      accessor: 'product',
      width: 100,
    },
    {
      Header: 'Due Date',
      accessor: 'due_date',
      width: 100,
    },
    {
      Header: 'Phone Number',
      accessor: 'phone_number',
      width: 100,
    },
    {
      Header: 'Price',
      accessor: 'price',
      width: 50,
    },
    {
      Header: 'Completed',
      accessor: 'completed',
      width: 50,
    },
    {
      Header: 'Created At',
      accessor: 'created_at',
      width: 100,
    },
    {
      Header: 'Updated At',
      accessor: 'created_at',
      width: 100,
    },
  ];
