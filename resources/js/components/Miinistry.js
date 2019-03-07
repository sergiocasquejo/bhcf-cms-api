import React, { Component } from 'react';
import {api} from './Common';
import { Link } from 'react-router-dom';
import { ValidationForm, TextInput } from 'react-bootstrap4-form-validation';
import Alert from 'react-s-alert';
import BootstrapTable from 'react-bootstrap-table-next';
import paginationFactory from 'react-bootstrap-table2-paginator';
import ToolkitProvider  from 'react-bootstrap-table2-toolkit';
import 'react-bootstrap-table2-paginator/dist/react-bootstrap-table2-paginator.min.css';
const sizePerPage = parseInt(process.env.MIX_PAGINATION_SIZE_PER_PAGE);

class TableList extends Component {
    _isMounted = false;
    _page = 1;
    _totalSize = 0;
    constructor(props){
        super(props);
    
        this.state = {
            items: []
        };
        this._ministryID = this.props.match.params.id;
    }

    componentDidUpdate(prevProps) {
        // Typical usage (don't forget to compare props):
        if (this.props.flag !== prevProps.flag) {
            this.fetch({offset: 0, limit: sizePerPage});
        }
    }
    

    componentDidMount() {
        this._isMounted = true;
        this.fetch({offset: 0, limit: sizePerPage});
    }

    componentWillUnmount() {
        this._isMounted = false;
    }

    fetch({ offset: offset, limit: limit, keywords: keywords = '', sort: sort = 'name', order: order = 'desc'}) {
        
       

        api.get('ministries', {
            params: {
                offset: offset,
                limit: limit,
                keywords: keywords,
                sort: sort,
                order: order
            }
        }).then(res => {
            if (this._isMounted) {
                const response = res.data;
                this._totalSize = response.totalSize
                this.setState({ items: response.data });
            }
        });
    }

    
    render() {
        let _props = this.props;
        const columns = [{
            dataField: 'name',
            text: 'Name',
            sort: true,
            formatter: function(cell, row) {
                return (
                    <a href="#" onClick={(e) => {
                        e.preventDefault();
                        _props.onSelectedItem(e, row);
                        }}>{cell}</a>
                )
            },
            onSort: (field, order) => {
                console.log(field, order);
            }
        },  
        {
            dataField: 'descriptions',
            text: 'Descriptions'
        }];
    
    const items = this.state.items;
    const page = this._page;
    const totalSize = this._totalSize;
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
            this._page = page;
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
            data={ items }
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

class Ministry extends Component {
    _isMounted = false;
    _isFormSubmit =  false;
    _ministryID = null;
    constructor(props){
        super(props);
    
        this.state = {
            flag: false,
            name: "",
            descriptions: ""
        };

        this.handleChange = this.handleChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
    }

    componentDidMount() {
       this._isMounted = true;
    }

    componentWillUnmount() {
        this._isMounted = false;
    }
    
    handleChange (e) {
        this.setState({
            [e.target.name]: e.target.value
        })
    }

    selectedItem(e, item) {
        this._ministryID = item.id;
        const newState = Object.assign(this.state, item);
        this.setState(newState);
            
        
    }

    handleSubmit(e, formData, inputs) {
        e.preventDefault();
        this._isFormSubmit = true;
        let url = 'ministries';
        if (this._ministryID) {
            formData['_method'] = 'PUT';
            url = `ministries/${this._ministryID}`;
        }

        api.post(url, formData).then(res => {
            if (this._isMounted) {
                let response = res.data;
                if (response.ok) {
                    Alert.success('Successfully saved!');
                    this.setState({flag: !this.state.flag});
                    this.props.history.push(`ministries`);
                }else {
                    Alert.error(response.data);
                }
                this._isFormSubmit = false;
            }
        });
    }

    handleErrorSubmit(e, formData, errorInputs){
        console.error(errorInputs)
    }

    

    render() {
        const props = this.props;
        return (
            <div className="row">
                <div className="col-md-6">
                    <ValidationForm onSubmit={this.handleSubmit} onErrorSubmit={this.handleErrorSubmit}>
                        <div className="form-group">
                            <label>Name</label>
                            <TextInput name="name" id="name" type="text" 
                            required
                            errorMessage={{required:"Name is required"}} 
                            value={this.state.name} 
                            onChange={this.handleChange}
                            />
                        </div>
                        <div className="form-group">
                            <label>Descriptions</label>
                            <TextInput 
                            name="descriptions" 
                            id="descriptions" 
                            multiline
                            value={this.state.descriptions} 
                            onChange={this.handleChange} 
                            />
                        </div>
                        <button className="btn btn-primary" type="submit">{this._isFormSubmit ? 'Saving' : 'Save' }</button>
                    </ValidationForm>
                </div>
                <div className="col-md-6">
                    <Link className="btn btn-success" to={'/ministries'}>Add New</Link>
                    <TableList onSelectedItem={this.selectedItem.bind(this)} flag={this.state.flag} {...props}/>
                </div>
            </div>
        )
    }
}

export default Ministry;
