import React, { Component } from 'react';
import { Link } from 'react-router-dom';
import { appState, api } from '../Common';
import BootstrapTable from 'react-bootstrap-table-next';
import Avatar from 'react-avatar';
import paginationFactory from 'react-bootstrap-table2-paginator';
import ToolkitProvider, { Search } from 'react-bootstrap-table2-toolkit';

import 'react-bootstrap-table2-paginator/dist/react-bootstrap-table2-paginator.min.css';

export default class PeopleTableList extends Component {
    constructor(props) {
        super(props);
        this.state = {
            people: []
        }
    }

    componentDidMount() {
        const id = this.props.id;
        api.get(`members/${id}/people`).then(res => {
            this.setState({
                people: res.data.data
            })
        });
    }


    render() {
        const selectRow = {
            mode: 'checkbox' // multiple row selection
        };

        const columns = [{
            dataField: 'full_name',
            text: 'Name',
            formatter: function(cell, row) {
                return (
                    <Link to={ `/people/${row['id']}` }><Avatar size="30" name={cell} round="20px" /> {cell}</Link>
                )
            }
          },  {
            dataField: 'leader',
            text: 'Cell Leader',
            formatter: function(cell, row) {
                return (
                    <Link to={ `/people/${cell['id']}` }>{cell['first_name'] + ' ' + cell['last_name']}</Link>
                )
            }
          }, 
          {
              dataField: 'leadership_level',
              text: 'Leadership Level',
              formatter: function(cell, row) {
                  return (
                      <span>{cell['name']}</span>
                  )
              }
          },
          {
            dataField: 'school_status',
            text: 'School Status',
            formatter: function(cell, row) {
                return (
                    <span>{cell['name']}</span>
                )
            }
        },
          {
            dataField: 'created_at',
            text: 'Date Created'
          }];
        
        const people = this.state.people;
        const { SearchBar } = Search;

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
                    <SearchBar { ...props.searchProps } />
                    <hr />
                    <BootstrapTable keyField='id' selectRow={ selectRow } pagination={ paginationFactory() } { ...props.baseProps }/>
                </div>
                )
            }
            </ToolkitProvider>
        )
    }
}