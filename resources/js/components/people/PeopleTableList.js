import React, { Component } from 'react';
import { Link } from 'react-router-dom';
import { appState, api } from '../Common';
import BootstrapTable from 'react-bootstrap-table-next';
import Avatar from 'react-avatar';
import paginationFactory from 'react-bootstrap-table2-paginator';
import ToolkitProvider  from 'react-bootstrap-table2-toolkit';

import 'react-bootstrap-table2-paginator/dist/react-bootstrap-table2-paginator.min.css';

const sizePerPage = parseInt(process.env.MIX_PAGINATION_SIZE_PER_PAGE);

export default class PeopleTableList extends Component {
    constructor(props) {
        super(props);
        this.state = {
            people: [],
            page:1,
            totalSize: 0,
        }
    }

    componentDidMount() {
        
        this.fetch({offset: 0, limit: sizePerPage});
    }

    fetch({ offset: offset, limit: limit, keywords: keywords = '', sort: sort = 'full_name', order: order = 'desc'}) {
        const id = this.props.id;
       

        api.get(`members/${id}/people`, {
            params: {
                offset: offset,
                limit: limit,
                keywords: keywords,
                sort: sort,
                order: order
            }
        }).then(res => {
            this.setState({
                people: res.data.people,
                totalSize: res.data.totalSize
            })
        });
    }


    render() {

        const columns = [{
                dataField: 'full_name',
                text: 'Name',
                sort: true,
                formatter: function(cell, row) {
                    return (
                        <Link to={ `/people/${row['id']}` }><Avatar size="30" name={cell} round="20px" /> {cell}</Link>
                    )
                },
                onSort: (field, order) => {
                    console.log(field, order);
                }
            },  
            {
                dataField: 'leader',
                text: 'Cell Leader',
                sort: true,
                formatter: function(cell, row) {
                    return (
                        cell ? <Link to={ `/people/${cell['id']}` }>{cell['first_name'] + ' ' + cell['last_name']}</Link> : ''
                    )
                },
                onSort: (field, order) => {
                    console.log(field, order);
                }
            },
            {
                dataField: 'leadership_level',
                text: 'Leadership Level',
                sort: true,
                formatter: function(cell, row) {
                    return (
                        cell ? <span>{cell['name']}</span> : ''
                    )
                }
            },
            {
                dataField: 'school_status',
                text: 'School Status',
                sort: true,
                formatter: function(cell, row) {
                    return (
                        cell ? <span>{cell['name']}</span> : ''
                    )
                }
            },
            {
                dataField: 'created_at',
                text: 'Date Created',
                sort: true
            }];
        
        const people = this.state.people;
        const page = this.state.page;
        const totalSize = this.state.totalSize;
        let paginatioFactory = paginationFactory({
            page, // Specify the current page. It's necessary when remote is enabled
            sizePerPage, // Specify the size per page. It's necessary when remote is enabled
            totalSize, // Total data size. It's necessary when remote is enabled
            showTotal: true, // display pagination information
            sizePerPageList: [ {
              text: '5', value: 5
            }, {
              text: '10', value: 10
            }, {
              text: 'All', value: totalSize
            } ], // A numeric array is also available: [5, 10]. the purpose of above example is custom the text
            withFirstAndLast: false, // hide the going to first and last page button
            alwaysShowAllBtns: true, // always show the next and previous page button
            firstPageText: 'First', // the text of first page button
            prePageText: 'Prev', // the text of previous page button
            nextPageText: 'Next', // the text of next page button
            lastPageText: 'Last', // the text of last page button
            nextPageTitle: 'Go to next', // the title of next page button
            prePageTitle: 'Go to previous', // the title of previous page button
            firstPageTitle: 'Go to first', // the title of first page button
            lastPageTitle: 'Go to last', // the title of last page button
            hideSizePerPage: true, // hide the size per page dropdown
            hidePageListOnlyOnePage: true, // hide pagination bar when only one page, default is false
            onPageChange: (page, sizePerPage) => {
                this.setState({page: page});
                this.fetch({offset: page, limit: sizePerPage});
            }, // callback function when page was changing
            // onSizePerPageChange: (sizePerPage, page) => {}, // callback function when page size was changing
            // paginationTotalRenderer: (from, to, size) => {  }  // custom the pagination total
          });

          const onTableChange = (type, newState) => {
            // handle any data change here
            console.log(type);
          }

          const CustomSearch = (props) => {
            let input;
            const handleClick = () => {
              
              this.fetch({offset: this.state.page, limit: sizePerPage, keywords: input.value});
              props.onSearch(input.value);
            };
            
            return (
              <div>
                <input
                  className="form-control"
                  ref={ n => input = n }
                  type="text"
                />
                <button className="btn btn-primary" onClick={ handleClick }>Search</button>
              </div>
            );
          };

          const ClearSearchButton = (props) => {
            const handleReset = () => {
                this.fetch({offset: '', limit: sizePerPage});
            }
            return (
            <button className="btn btn-default" onClick={handleReset}>Clear</button>
            )
          }

        return (
            <ToolkitProvider
            keyField="id"
            data={ people }
            columns={ columns }
            search
            >
            {
                props => (
                <div>
                    <CustomSearch { ...props.searchProps }/>
                    <ClearSearchButton { ...props.searchProps } />
                    <hr />
                    <BootstrapTable keyField='id' remote={ { filter: true, pagination: true, sort: true, cellEdit: false,search: true } } pagination={ paginatioFactory } onTableChange={ onTableChange } { ...props.baseProps }/>
                </div>
                )
            }
            </ToolkitProvider>
        )
    }
}