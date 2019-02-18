---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#Leadership Level management

APIs for managing Leadership Levels
<!-- START_748e74264ab4427e8d6ffa91ab182415 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/leadership-level" 
```

```javascript
const url = new URL("http://localhost/api/v1/leadership-level");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": [
        {
            "id": 1,
            "name": "Cell Leader",
            "descriptions": "",
            "created_by": 1,
            "created_at": "2019-02-06 09:58:46",
            "updated_at": "2019-02-06 09:58:46",
            "deleted_at": null
        }
    ]
}
```

### HTTP Request
`GET api/v1/leadership-level`


<!-- END_748e74264ab4427e8d6ffa91ab182415 -->

<!-- START_e872db0db90b7f0b1d94ddac29a0da61 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/leadership-level"     -d "name"="tbxHDs9CGicfXWWP" \
    -d "descriptions"="Uik9WjIdyixInJ4G" 
```

```javascript
const url = new URL("http://localhost/api/v1/leadership-level");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "tbxHDs9CGicfXWWP",
    "descriptions": "Uik9WjIdyixInJ4G",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": {
        "name": "SUYNIL",
        "descriptions": "",
        "updated_at": "2019-02-06 12:49:41",
        "created_at": "2019-02-06 12:49:41",
        "id": 2
    }
}
```
> Example response (500):

```json
{}
```
> Example response (422):

```json
{
    "success": false,
    "data": {
        "first_name": [
            "The :attribute field is required."
        ]
    }
}
```

### HTTP Request
`POST api/v1/leadership-level`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | the name of the school status
    descriptions | string |  optional  | optional descriptions of the status

<!-- END_e872db0db90b7f0b1d94ddac29a0da61 -->

<!-- START_4ac7397897dbe64ba1a182e4f9b78bcb -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/leadership-level/{leadership_level}" 
```

```javascript
const url = new URL("http://localhost/api/v1/leadership-level/{leadership_level}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": {
        "name": "SUYNIL",
        "descriptions": "Descriptions here...",
        "created_by": 1,
        "updated_by": 1,
        "updated_at": "2019-02-06 13:35:26",
        "created_at": "2019-02-06 13:35:26",
        "id": 9
    }
}
```
> Example response (500):

```json
{}
```
> Example response (404):

```json
{
    "message": "Record not found"
}
```

### HTTP Request
`GET api/v1/leadership-level/{leadership_level}`


<!-- END_4ac7397897dbe64ba1a182e4f9b78bcb -->

<!-- START_ae06e85e754a089807199cf5193b40cb -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/leadership-level/{leadership_level}"     -d "name"="dt8VnXqOrJSdFEkq" \
    -d "descriptions"="lilvDuuNIRs70b0g" 
```

```javascript
const url = new URL("http://localhost/api/v1/leadership-level/{leadership_level}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "dt8VnXqOrJSdFEkq",
    "descriptions": "lilvDuuNIRs70b0g",
})

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true
}
```
> Example response (500):

```json
{}
```
> Example response (422):

```json
{
    "success": false,
    "data": {
        "first_name": [
            "The :attribute field is required."
        ]
    }
}
```

### HTTP Request
`PUT api/v1/leadership-level/{leadership_level}`

`PATCH api/v1/leadership-level/{leadership_level}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | the name of the school status
    descriptions | string |  optional  | optional descriptions of the status

<!-- END_ae06e85e754a089807199cf5193b40cb -->

<!-- START_a91ebe740f30dc530ef868bab07447a5 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/leadership-level/{leadership_level}" 
```

```javascript
const url = new URL("http://localhost/api/v1/leadership-level/{leadership_level}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true
}
```
> Example response (500):

```json
{}
```
> Example response (404):

```json
{
    "message": "Record not found"
}
```

### HTTP Request
`DELETE api/v1/leadership-level/{leadership_level}`


<!-- END_a91ebe740f30dc530ef868bab07447a5 -->

#Member Category management

APIs for managing category member
<!-- START_4e6bc7f59323906ab6f1823c4bdb5958 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/members/category" 
```

```javascript
const url = new URL("http://localhost/api/v1/members/category");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": [
        {
            "id": 1,
            "name": "Category 1",
            "descriptions": "",
            "created_by": 1,
            "created_at": "2019-02-06 09:58:46",
            "updated_at": "2019-02-06 09:58:46",
            "deleted_at": null
        }
    ]
}
```

### HTTP Request
`GET api/v1/members/category`


<!-- END_4e6bc7f59323906ab6f1823c4bdb5958 -->

<!-- START_aa1e1b881e8a99fe93a4349c0c040521 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/members/category"     -d "name"="IHXlWKkkI6KASiVr" \
    -d "descriptions"="eyZTYpOmcMXqrJH6" 
```

```javascript
const url = new URL("http://localhost/api/v1/members/category");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "IHXlWKkkI6KASiVr",
    "descriptions": "eyZTYpOmcMXqrJH6",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": {
        "name": "SUYNIL",
        "descriptions": "",
        "updated_at": "2019-02-06 12:49:41",
        "created_at": "2019-02-06 12:49:41",
        "id": 2
    }
}
```
> Example response (500):

```json
{}
```
> Example response (422):

```json
{
    "success": false,
    "data": {
        "first_name": [
            "The :attribute field is required."
        ]
    }
}
```

### HTTP Request
`POST api/v1/members/category`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | the name of the school status
    descriptions | string |  optional  | optional descriptions of the status

<!-- END_aa1e1b881e8a99fe93a4349c0c040521 -->

<!-- START_ae2dc01d1ba09d222135218e7b3fc5da -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/members/category/{category}" 
```

```javascript
const url = new URL("http://localhost/api/v1/members/category/{category}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": {
        "name": "SUYNIL",
        "descriptions": "Descriptions here...",
        "created_by": 1,
        "updated_by": 1,
        "updated_at": "2019-02-06 13:35:26",
        "created_at": "2019-02-06 13:35:26",
        "id": 9
    }
}
```
> Example response (500):

```json
{}
```
> Example response (404):

```json
{
    "message": "Record not found"
}
```

### HTTP Request
`GET api/v1/members/category/{category}`


<!-- END_ae2dc01d1ba09d222135218e7b3fc5da -->

<!-- START_d9c19e9aecadce9600fbf3fadb211e5f -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/members/category/{category}"     -d "name"="AMhkNGMajeFcObdm" \
    -d "descriptions"="j6huLHjOVvwdacdJ" 
```

```javascript
const url = new URL("http://localhost/api/v1/members/category/{category}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "AMhkNGMajeFcObdm",
    "descriptions": "j6huLHjOVvwdacdJ",
})

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true
}
```
> Example response (500):

```json
{}
```
> Example response (422):

```json
{
    "success": false,
    "data": {
        "first_name": [
            "The :attribute field is required."
        ]
    }
}
```

### HTTP Request
`PUT api/v1/members/category/{category}`

`PATCH api/v1/members/category/{category}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | the name of the school status
    descriptions | string |  optional  | optional descriptions of the status

<!-- END_d9c19e9aecadce9600fbf3fadb211e5f -->

<!-- START_e0901c42c88bf74a56e3fee8db856b62 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/members/category/{category}" 
```

```javascript
const url = new URL("http://localhost/api/v1/members/category/{category}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true
}
```
> Example response (500):

```json
{}
```
> Example response (404):

```json
{
    "message": "Record not found"
}
```

### HTTP Request
`DELETE api/v1/members/category/{category}`


<!-- END_e0901c42c88bf74a56e3fee8db856b62 -->

<!-- START_67ec1738998daf674020f6431b7a80b0 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/auxiliary-groups" 
```

```javascript
const url = new URL("http://localhost/api/v1/auxiliary-groups");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": [
        {
            "id": 1,
            "name": "Category 1",
            "descriptions": "",
            "created_by": 1,
            "created_at": "2019-02-06 09:58:46",
            "updated_at": "2019-02-06 09:58:46",
            "deleted_at": null
        }
    ]
}
```

### HTTP Request
`GET api/v1/auxiliary-groups`


<!-- END_67ec1738998daf674020f6431b7a80b0 -->

<!-- START_1f1205f8d77a3e106ecadc7503649c61 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/auxiliary-groups"     -d "name"="GS5reB6LKDecRMBE" \
    -d "descriptions"="QW5yOFaM5bqoaqyQ" 
```

```javascript
const url = new URL("http://localhost/api/v1/auxiliary-groups");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "GS5reB6LKDecRMBE",
    "descriptions": "QW5yOFaM5bqoaqyQ",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": {
        "name": "Blessed Couple",
        "descriptions": "",
        "updated_at": "2019-02-06 12:49:41",
        "created_at": "2019-02-06 12:49:41",
        "id": 2
    }
}
```
> Example response (500):

```json
{}
```
> Example response (422):

```json
{
    "success": false,
    "data": {
        "first_name": [
            "The :attribute field is required."
        ]
    }
}
```

### HTTP Request
`POST api/v1/auxiliary-groups`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | the name of the school status
    descriptions | string |  optional  | optional descriptions of the status

<!-- END_1f1205f8d77a3e106ecadc7503649c61 -->

<!-- START_f78ce61cee4e26ee4b5097a9c70e17c5 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/auxiliary-groups/{auxiliary_group}" 
```

```javascript
const url = new URL("http://localhost/api/v1/auxiliary-groups/{auxiliary_group}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": {
        "name": "SUYNIL",
        "descriptions": "Descriptions here...",
        "created_by": 1,
        "updated_by": 1,
        "updated_at": "2019-02-06 13:35:26",
        "created_at": "2019-02-06 13:35:26",
        "id": 9
    }
}
```
> Example response (500):

```json
{}
```
> Example response (404):

```json
{
    "message": "Record not found"
}
```

### HTTP Request
`GET api/v1/auxiliary-groups/{auxiliary_group}`


<!-- END_f78ce61cee4e26ee4b5097a9c70e17c5 -->

<!-- START_ceb9e90b14086580b52663d2a0a53740 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/auxiliary-groups/{auxiliary_group}"     -d "name"="6j7T4TWrdhzyCdMe" \
    -d "descriptions"="etiSXwUC1wfS8T6r" 
```

```javascript
const url = new URL("http://localhost/api/v1/auxiliary-groups/{auxiliary_group}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "6j7T4TWrdhzyCdMe",
    "descriptions": "etiSXwUC1wfS8T6r",
})

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true
}
```
> Example response (500):

```json
{}
```
> Example response (422):

```json
{
    "success": false,
    "data": {
        "first_name": [
            "The :attribute field is required."
        ]
    }
}
```

### HTTP Request
`PUT api/v1/auxiliary-groups/{auxiliary_group}`

`PATCH api/v1/auxiliary-groups/{auxiliary_group}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | the name of the school status
    descriptions | string |  optional  | optional descriptions of the status

<!-- END_ceb9e90b14086580b52663d2a0a53740 -->

<!-- START_63ad70cdb7b345c970108ac72bf456c3 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/auxiliary-groups/{auxiliary_group}" 
```

```javascript
const url = new URL("http://localhost/api/v1/auxiliary-groups/{auxiliary_group}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true
}
```
> Example response (500):

```json
{}
```
> Example response (404):

```json
{
    "message": "Record not found"
}
```

### HTTP Request
`DELETE api/v1/auxiliary-groups/{auxiliary_group}`


<!-- END_63ad70cdb7b345c970108ac72bf456c3 -->

#Member management

APIs for managing member
<!-- START_93652cc886b6606148cd67f1719bdc17 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/members" 
```

```javascript
const url = new URL("http://localhost/api/v1/members");

    let params = {
            "offset": "2",
            "limit": "16",
            "sort": "bDbzUKJjEZeERqWY",
            "sortBy": "K6g9d2u8KRVvQNkI",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
[
    {
        "first_name": "serg",
        "last_name": "casquejo",
        "middle_name": "degamo",
        "birthdate": "1989-09-07",
        "address": "Colo, camolinas, poblacion, cordova, cebu",
        "city": "Cebu",
        "contact_no": "09219945312",
        "updated_at": "2019-02-06 09:59:04",
        "created_at": "2019-02-06 09:59:04",
        "id": 101
    }
]
```

### HTTP Request
`GET api/v1/members`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    offset |  optional  | The page offset to return
    limit |  required  | The number of rows to return
    sort |  optional  | Field to sort by
    sortBy |  optional  | Ascending or descending

<!-- END_93652cc886b6606148cd67f1719bdc17 -->

<!-- START_0cfc7c9960957e4f295140b91b211062 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/members"     -d "leader_id"="18" \
    -d "invited_by"="6" \
    -d "first_name"="roHOBizLaESV9Hgr" \
    -d "last_name"="OZswmFJbElx2JGun" \
    -d "middle_name"="MbgcMSblCCxjxz1z" \
    -d "birthdate"="qfqFAJUZdjsjj23t" \
    -d "address"="DOihhwxVfJ6fMBQ1" \
    -d "city"="1dNgQS7L2z6Lon6e" \
    -d "contact_no"="lxUoDPVn6cYp4L0o" \
    -d "secondary_contact_no"="FvSBdXY58YZQDz7d" \
    -d "facebook_name"="XFNW3w9lxbgam1RI" \
    -d "avatar"="CUbJ9OcPXN1MSL5p" \
    -d "school_status_id"="3" \
    -d "leadership_level_id"="13" \
    -d "auxiliary_group_id"="5" \
    -d "status_id"="4" \
    -d "category_id"="19" \
    -d "remarks"="c2DAGVuQDk4Rc2kr" 
```

```javascript
const url = new URL("http://localhost/api/v1/members");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "leader_id": "18",
    "invited_by": "6",
    "first_name": "roHOBizLaESV9Hgr",
    "last_name": "OZswmFJbElx2JGun",
    "middle_name": "MbgcMSblCCxjxz1z",
    "birthdate": "qfqFAJUZdjsjj23t",
    "address": "DOihhwxVfJ6fMBQ1",
    "city": "1dNgQS7L2z6Lon6e",
    "contact_no": "lxUoDPVn6cYp4L0o",
    "secondary_contact_no": "FvSBdXY58YZQDz7d",
    "facebook_name": "XFNW3w9lxbgam1RI",
    "avatar": "CUbJ9OcPXN1MSL5p",
    "school_status_id": "3",
    "leadership_level_id": "13",
    "auxiliary_group_id": "5",
    "status_id": "4",
    "category_id": "19",
    "remarks": "c2DAGVuQDk4Rc2kr",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "first_name": "serg",
    "last_name": "casquejo",
    "middle_name": "degamo",
    "birthdate": "1989-09-07",
    "address": "Colo, camolinas, poblacion, cordova, cebu",
    "city": "Cebu",
    "contact_no": "09219945312",
    "updated_at": "2019-02-06 09:59:04",
    "created_at": "2019-02-06 09:59:04",
    "id": 101
}
```
> Example response (500):

```json
{}
```
> Example response (422):

```json
{
    "success": false,
    "data": {
        "first_name": [
            "First name is required!"
        ]
    }
}
```

### HTTP Request
`POST api/v1/members`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    leader_id | integer |  optional  | optional the ID of the leader
    invited_by | integer |  optional  | optional the ID of the member
    first_name | string |  required  | the first name of the member
    last_name | string |  required  | the last name of the member
    middle_name | string |  required  | the middle name of the member
    birthdate | string |  required  | (YYYY-mm-dd) the birthdate of the member
    address | string |  required  | the address of the member
    city | string |  required  | the city of the member
    contact_no | string |  required  | the contact no of the member
    secondary_contact_no | string |  optional  | optional the secondary no of the member
    facebook_name | string |  optional  | optional the facebook username of the member
    avatar | string |  optional  | optional the image url of the member
    school_status_id | integer |  optional  | optional the school status member
    leadership_level_id | integer |  optional  | optional the leadership id of the member
    auxiliary_group_id | integer |  optional  | optional the auxiliary group of the member
    status_id | integer |  optional  | optional the status of the member
    category_id | integer |  optional  | optional the category of the member
    remarks | string |  optional  | optional the remarks

<!-- END_0cfc7c9960957e4f295140b91b211062 -->

<!-- START_96207d40e79ed11180ddc90fb54ddcf0 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/members/{member}" 
```

```javascript
const url = new URL("http://localhost/api/v1/members/{member}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 103,
        "user_id": null,
        "leader_id": null,
        "invited_by": null,
        "first_name": "Sergio",
        "last_name": "casquejo",
        "middle_name": "degamo",
        "birthdate": "1989-09-07",
        "address": "Colo, camolinas, poblacion, cordova, cebu",
        "city": "cebu",
        "contact_no": "09219945112",
        "secondary_contact_no": null,
        "facebook_name": null,
        "avatar": null,
        "school_status_id": null,
        "leadership_level_id": null,
        "auxiliary_group_id": null,
        "status_id": null,
        "category_id": null,
        "remarks": null,
        "created_by": null,
        "created_at": "2019-02-06 11:28:46",
        "updated_at": "2019-02-06 11:48:27",
        "deleted_at": null
    }
}
```
> Example response (500):

```json
{}
```
> Example response (404):

```json
{
    "message": "Record not found"
}
```

### HTTP Request
`GET api/v1/members/{member}`


<!-- END_96207d40e79ed11180ddc90fb54ddcf0 -->

<!-- START_e2a57764f562113d9b43d407314e2033 -->
## Update resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/members/{member}"     -d "leader_id"="12" \
    -d "invited_by"="18" \
    -d "first_name"="z2FcakU4KCt57Xix" \
    -d "last_name"="Dkjo8HYzwiLvqFPy" \
    -d "middle_name"="gQH91yfxqvrgKthM" \
    -d "birthdate"="3F6JTahMfaB7ubqa" \
    -d "address"="gxquJz4KjRYTwH3f" \
    -d "city"="CBwblikDfwRnRjvy" \
    -d "contact_no"="4C9eu1EuB9orFLEB" \
    -d "secondary_contact_no"="dOFldeIGxUOvCGsl" \
    -d "facebook_name"="H2k5lJrs1RSlRnC9" \
    -d "avatar"="B2ttomucnaQvrXzB" \
    -d "school_status_id"="12" \
    -d "leadership_level_id"="13" \
    -d "auxiliary_group_id"="9" \
    -d "status_id"="6" \
    -d "category_id"="12" \
    -d "remarks"="Nr8wGNbAabysRA8s" \
    -d "_method"="sUGlg5GDYzhl7ODe" 
```

```javascript
const url = new URL("http://localhost/api/v1/members/{member}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "leader_id": "12",
    "invited_by": "18",
    "first_name": "z2FcakU4KCt57Xix",
    "last_name": "Dkjo8HYzwiLvqFPy",
    "middle_name": "gQH91yfxqvrgKthM",
    "birthdate": "3F6JTahMfaB7ubqa",
    "address": "gxquJz4KjRYTwH3f",
    "city": "CBwblikDfwRnRjvy",
    "contact_no": "4C9eu1EuB9orFLEB",
    "secondary_contact_no": "dOFldeIGxUOvCGsl",
    "facebook_name": "H2k5lJrs1RSlRnC9",
    "avatar": "B2ttomucnaQvrXzB",
    "school_status_id": "12",
    "leadership_level_id": "13",
    "auxiliary_group_id": "9",
    "status_id": "6",
    "category_id": "12",
    "remarks": "Nr8wGNbAabysRA8s",
    "_method": "sUGlg5GDYzhl7ODe",
})

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{}
```
> Example response (500):

```json
{}
```
> Example response (422):

```json
{
    "success": false,
    "data": {
        "first_name": [
            "First name is required!"
        ]
    }
}
```

### HTTP Request
`PUT api/v1/members/{member}`

`PATCH api/v1/members/{member}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    leader_id | integer |  optional  | optional the ID of the leader
    invited_by | integer |  optional  | optional the ID of the member
    first_name | string |  required  | the first name of the member
    last_name | string |  required  | the last name of the member
    middle_name | string |  required  | the middle name of the member
    birthdate | string |  required  | (YYYY-mm-dd) the birthdate of the member
    address | string |  required  | the address of the member
    city | string |  required  | the city of the member
    contact_no | string |  required  | the contact no of the member
    secondary_contact_no | string |  optional  | optional the secondary no of the member
    facebook_name | string |  optional  | optional the facebook username of the member
    avatar | string |  optional  | optional the image url of the member
    school_status_id | integer |  optional  | optional the school status member
    leadership_level_id | integer |  optional  | optional the leadership id of the member
    auxiliary_group_id | integer |  optional  | optional the auxiliary group of the member
    status_id | integer |  optional  | optional the status of the member
    category_id | integer |  optional  | optional the category of the member
    remarks | string |  optional  | optional the remarks
    _method | string |  required  | options(PUT|PATCH)

<!-- END_e2a57764f562113d9b43d407314e2033 -->

<!-- START_466bdfe0f4e034aa5d61038dd1176fb7 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/members/{member}" 
```

```javascript
const url = new URL("http://localhost/api/v1/members/{member}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true
}
```
> Example response (500):

```json
{}
```
> Example response (404):

```json
{
    "message": "Record not found"
}
```

### HTTP Request
`DELETE api/v1/members/{member}`


<!-- END_466bdfe0f4e034aa5d61038dd1176fb7 -->

#Ministries management

APIs for managing ministries member
<!-- START_d40a43dfa3933a200fc2f82b2a738029 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/ministries" 
```

```javascript
const url = new URL("http://localhost/api/v1/ministries");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": [
        {
            "id": 1,
            "name": "Praise and Workship",
            "descriptions": "",
            "created_by": 1,
            "created_at": "2019-02-06 09:58:46",
            "updated_at": "2019-02-06 09:58:46",
            "deleted_at": null
        }
    ]
}
```

### HTTP Request
`GET api/v1/ministries`


<!-- END_d40a43dfa3933a200fc2f82b2a738029 -->

<!-- START_7331444d15518518f9f10c7a22bd8cad -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/ministries"     -d "name"="1YwgVOTx3ZigdEzK" \
    -d "descriptions"="voRwrzx1jL9MikKl" 
```

```javascript
const url = new URL("http://localhost/api/v1/ministries");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "1YwgVOTx3ZigdEzK",
    "descriptions": "voRwrzx1jL9MikKl",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": {
        "name": "SUYNIL",
        "descriptions": "",
        "updated_at": "2019-02-06 12:49:41",
        "created_at": "2019-02-06 12:49:41",
        "id": 2
    }
}
```
> Example response (500):

```json
{}
```
> Example response (422):

```json
{
    "success": false,
    "data": {
        "first_name": [
            "The :attribute field is required."
        ]
    }
}
```

### HTTP Request
`POST api/v1/ministries`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | the name of the school status
    descriptions | string |  optional  | options descriptions of the status

<!-- END_7331444d15518518f9f10c7a22bd8cad -->

<!-- START_6836b955740f4587dfbe59641b130e6f -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/ministries/{ministry}" 
```

```javascript
const url = new URL("http://localhost/api/v1/ministries/{ministry}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": {
        "name": "SUYNIL",
        "descriptions": "Descriptions here...",
        "created_by": 1,
        "updated_by": 1,
        "updated_at": "2019-02-06 13:35:26",
        "created_at": "2019-02-06 13:35:26",
        "id": 9
    }
}
```
> Example response (500):

```json
{}
```
> Example response (404):

```json
{
    "message": "Record not found"
}
```

### HTTP Request
`GET api/v1/ministries/{ministry}`


<!-- END_6836b955740f4587dfbe59641b130e6f -->

<!-- START_b0750f4fb70796aadddf5cfd48b9ce0f -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/ministries/{ministry}"     -d "name"="0G5HBYCKzTotI1zW" \
    -d "descriptions"="ufyuwTuEwmAk0c05" 
```

```javascript
const url = new URL("http://localhost/api/v1/ministries/{ministry}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "0G5HBYCKzTotI1zW",
    "descriptions": "ufyuwTuEwmAk0c05",
})

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true
}
```
> Example response (500):

```json
{}
```
> Example response (422):

```json
{
    "success": false,
    "data": {
        "first_name": [
            "The :attribute field is required."
        ]
    }
}
```

### HTTP Request
`PUT api/v1/ministries/{ministry}`

`PATCH api/v1/ministries/{ministry}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | the name of the school status
    descriptions | string |  optional  | options descriptions of the status

<!-- END_b0750f4fb70796aadddf5cfd48b9ce0f -->

<!-- START_c0f6b3c6afb2719bb663252c1480d4fb -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/ministries/{ministry}" 
```

```javascript
const url = new URL("http://localhost/api/v1/ministries/{ministry}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true
}
```
> Example response (500):

```json
{}
```
> Example response (404):

```json
{
    "message": "Record not found"
}
```

### HTTP Request
`DELETE api/v1/ministries/{ministry}`


<!-- END_c0f6b3c6afb2719bb663252c1480d4fb -->

#School Monitoring management

APIs for managing statuses
<!-- START_23cde0a3b715c1816cfdcf74f2fed979 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/school/classes" 
```

```javascript
const url = new URL("http://localhost/api/v1/school/classes");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": [
        {
            "id": 1,
            "batch_name": "Kamonggay",
            "remarks": "",
            "school_year": "2019",
            "school_type_id": 1,
            "created_by": 1,
            "updated_by": 1,
            "created_at": "2019-02-06 09:58:46",
            "updated_at": "2019-02-06 09:58:46",
            "deleted_at": null
        }
    ]
}
```

### HTTP Request
`GET api/v1/school/classes`


<!-- END_23cde0a3b715c1816cfdcf74f2fed979 -->

<!-- START_e78a081436c85e7af621d819c5ccf2d2 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/school/classes"     -d "batch_name"="Jg5BblDWlV0H7pMv" \
    -d "school_year"="18" \
    -d "school_type_id"="4" \
    -d "remarks"="fuaydE5V3iIH4ySX" 
```

```javascript
const url = new URL("http://localhost/api/v1/school/classes");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "batch_name": "Jg5BblDWlV0H7pMv",
    "school_year": "18",
    "school_type_id": "4",
    "remarks": "fuaydE5V3iIH4ySX",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": {
        "id": 1,
        "batch_name": "Kamonggay",
        "remarks": "",
        "school_year": "2019",
        "school_type_id": 1,
        "created_by": 1,
        "updated_by": 1,
        "created_at": "2019-02-06 09:58:46",
        "updated_at": "2019-02-06 09:58:46",
        "attendances": []
    }
}
```
> Example response (500):

```json
{}
```
> Example response (422):

```json
{
    "success": false,
    "data": {
        "first_name": [
            "The :attribute field is required."
        ]
    }
}
```

### HTTP Request
`POST api/v1/school/classes`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    batch_name | string |  required  | the name of the batch
    school_year | integer |  optional  | requred the year
    school_type_id | integer |  required  | the school type (SUYNIL, Life Clas, SOL 1, ...)
    remarks | string |  optional  | optional remarks

<!-- END_e78a081436c85e7af621d819c5ccf2d2 -->

<!-- START_08e730fd47282822d5d1b4d5d580e37c -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/school/classes/{class}" 
```

```javascript
const url = new URL("http://localhost/api/v1/school/classes/{class}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": {
        "id": 1,
        "batch_name": "Kamonggay",
        "remarks": "",
        "school_year": "2019",
        "school_type_id": 1,
        "created_by": 1,
        "updated_by": 1,
        "created_at": "2019-02-06 09:58:46",
        "updated_at": "2019-02-06 09:58:46",
        "attendances": []
    }
}
```
> Example response (500):

```json
{}
```
> Example response (404):

```json
{
    "message": "Record not found"
}
```

### HTTP Request
`GET api/v1/school/classes/{class}`


<!-- END_08e730fd47282822d5d1b4d5d580e37c -->

<!-- START_df21bce210e0f0762af4db6b5085584b -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/school/classes/{class}"     -d "batch_name"="xq7FrTWdW616yfX3" \
    -d "school_year"="5" \
    -d "school_type_id"="20" \
    -d "remarks"="g8SLVUPduw2kY4pQ" 
```

```javascript
const url = new URL("http://localhost/api/v1/school/classes/{class}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "batch_name": "xq7FrTWdW616yfX3",
    "school_year": "5",
    "school_type_id": "20",
    "remarks": "g8SLVUPduw2kY4pQ",
})

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true
}
```
> Example response (500):

```json
{}
```
> Example response (422):

```json
{
    "success": false,
    "data": {
        "first_name": [
            "The :attribute field is required."
        ]
    }
}
```

### HTTP Request
`PUT api/v1/school/classes/{class}`

`PATCH api/v1/school/classes/{class}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    batch_name | string |  required  | the name of the batch
    school_year | integer |  optional  | requred the year
    school_type_id | integer |  required  | the school type (SUYNIL, Life Clas, SOL 1, ...)
    remarks | string |  optional  | optional remarks

<!-- END_df21bce210e0f0762af4db6b5085584b -->

<!-- START_88f9b38d412bb9bba212a0c9fb17f88b -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/school/classes/{class}" 
```

```javascript
const url = new URL("http://localhost/api/v1/school/classes/{class}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true
}
```
> Example response (500):

```json
{}
```
> Example response (404):

```json
{
    "message": "Record not found"
}
```

### HTTP Request
`DELETE api/v1/school/classes/{class}`


<!-- END_88f9b38d412bb9bba212a0c9fb17f88b -->

#School Status management

APIs for managing School statuses
<!-- START_f91cc127541df7dac9442a6380bc3323 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/school/statuses" 
```

```javascript
const url = new URL("http://localhost/api/v1/school/statuses");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": [
        {
            "id": 1,
            "name": "SUYNIL",
            "descriptions": "",
            "created_by": 1,
            "created_at": "2019-02-06 09:58:46",
            "updated_at": "2019-02-06 09:58:46",
            "deleted_at": null
        }
    ]
}
```

### HTTP Request
`GET api/v1/school/statuses`


<!-- END_f91cc127541df7dac9442a6380bc3323 -->

<!-- START_37840fee52f5e38a50f36ef880940ee8 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/school/statuses"     -d "name"="AlR6EAIu1KAVVxxa" \
    -d "descriptions"="4NCn5C7aFLjg8g1G" 
```

```javascript
const url = new URL("http://localhost/api/v1/school/statuses");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "AlR6EAIu1KAVVxxa",
    "descriptions": "4NCn5C7aFLjg8g1G",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": {
        "name": "SUYNIL",
        "descriptions": "",
        "updated_at": "2019-02-06 12:49:41",
        "created_at": "2019-02-06 12:49:41",
        "id": 2
    }
}
```
> Example response (500):

```json
{}
```
> Example response (422):

```json
{
    "success": false,
    "data": {
        "first_name": [
            "The :attribute field is required."
        ]
    }
}
```

### HTTP Request
`POST api/v1/school/statuses`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | the name of the school status
    descriptions | string |  optional  | optional descriptions of the status

<!-- END_37840fee52f5e38a50f36ef880940ee8 -->

<!-- START_db793936380481909842cb9afc4f64cb -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/school/statuses/{status}" 
```

```javascript
const url = new URL("http://localhost/api/v1/school/statuses/{status}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": {
        "name": "SUYNIL",
        "descriptions": "Descriptions here...",
        "created_by": 1,
        "updated_by": 1,
        "updated_at": "2019-02-06 13:35:26",
        "created_at": "2019-02-06 13:35:26",
        "id": 9
    }
}
```
> Example response (500):

```json
{}
```
> Example response (404):

```json
{
    "message": "Record not found"
}
```

### HTTP Request
`GET api/v1/school/statuses/{status}`


<!-- END_db793936380481909842cb9afc4f64cb -->

<!-- START_a7a656fcee765cbbca857bb3ffa9496c -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/school/statuses/{status}"     -d "name"="K25OX3hvZoOU1MsJ" \
    -d "descriptions"="1rSNJw2AqXt0sXk8" 
```

```javascript
const url = new URL("http://localhost/api/v1/school/statuses/{status}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "K25OX3hvZoOU1MsJ",
    "descriptions": "1rSNJw2AqXt0sXk8",
})

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true
}
```
> Example response (500):

```json
{}
```
> Example response (422):

```json
{
    "success": false,
    "data": {
        "first_name": [
            "The :attribute field is required."
        ]
    }
}
```

### HTTP Request
`PUT api/v1/school/statuses/{status}`

`PATCH api/v1/school/statuses/{status}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | the name of the school status
    descriptions | string |  optional  | optional descriptions of the status

<!-- END_a7a656fcee765cbbca857bb3ffa9496c -->

<!-- START_e2afe30bfc7b4705828aef7a8e1d157e -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/school/statuses/{status}" 
```

```javascript
const url = new URL("http://localhost/api/v1/school/statuses/{status}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true
}
```
> Example response (500):

```json
{}
```
> Example response (404):

```json
{
    "message": "Record not found"
}
```

### HTTP Request
`DELETE api/v1/school/statuses/{status}`


<!-- END_e2afe30bfc7b4705828aef7a8e1d157e -->

#School Types management

APIs for managing statuses
<!-- START_287f331c41cd458093442684c94f4ddc -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/school/types" 
```

```javascript
const url = new URL("http://localhost/api/v1/school/types");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": [
        {
            "id": 1,
            "name": "SUYNIL",
            "descriptions": "",
            "created_by": 1,
            "created_at": "2019-02-06 09:58:46",
            "updated_at": "2019-02-06 09:58:46",
            "deleted_at": null
        }
    ]
}
```

### HTTP Request
`GET api/v1/school/types`


<!-- END_287f331c41cd458093442684c94f4ddc -->

<!-- START_7f9a457fea93107d4e4870fe74ba971f -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/school/types"     -d "name"="3f45zGgYI09PP7SX" \
    -d "descriptions"="UNWhFlK4WUh6jSbI" 
```

```javascript
const url = new URL("http://localhost/api/v1/school/types");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "3f45zGgYI09PP7SX",
    "descriptions": "UNWhFlK4WUh6jSbI",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": {
        "name": "SUYNIL",
        "descriptions": "",
        "updated_at": "2019-02-06 12:49:41",
        "created_at": "2019-02-06 12:49:41",
        "id": 2
    }
}
```
> Example response (500):

```json
{}
```
> Example response (422):

```json
{
    "success": false,
    "data": {
        "first_name": [
            "The :attribute field is required."
        ]
    }
}
```

### HTTP Request
`POST api/v1/school/types`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | the name of the school status
    descriptions | string |  optional  | optional descriptions of the status

<!-- END_7f9a457fea93107d4e4870fe74ba971f -->

<!-- START_a0be0d69d5b2253c50d6f4c1c36a6ebc -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/school/types/{type}" 
```

```javascript
const url = new URL("http://localhost/api/v1/school/types/{type}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": {
        "name": "SUYNIL",
        "descriptions": "Descriptions here...",
        "created_by": 1,
        "updated_by": 1,
        "updated_at": "2019-02-06 13:35:26",
        "created_at": "2019-02-06 13:35:26",
        "id": 9
    }
}
```
> Example response (500):

```json
{}
```
> Example response (404):

```json
{
    "message": "Record not found"
}
```

### HTTP Request
`GET api/v1/school/types/{type}`


<!-- END_a0be0d69d5b2253c50d6f4c1c36a6ebc -->

<!-- START_ec7918dc448ed717ed65200e96024aaf -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/school/types/{type}"     -d "name"="7A1Q4CIMbuXqMCnN" \
    -d "descriptions"="njlfKwAnmp63qlHA" 
```

```javascript
const url = new URL("http://localhost/api/v1/school/types/{type}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "7A1Q4CIMbuXqMCnN",
    "descriptions": "njlfKwAnmp63qlHA",
})

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true
}
```
> Example response (500):

```json
{}
```
> Example response (422):

```json
{
    "success": false,
    "data": {
        "first_name": [
            "The :attribute field is required."
        ]
    }
}
```

### HTTP Request
`PUT api/v1/school/types/{type}`

`PATCH api/v1/school/types/{type}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | the name of the school status
    descriptions | string |  optional  | optional descriptions of the status

<!-- END_ec7918dc448ed717ed65200e96024aaf -->

<!-- START_6c9cb19312f4ae5a306720e452a6c31d -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/school/types/{type}" 
```

```javascript
const url = new URL("http://localhost/api/v1/school/types/{type}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true
}
```
> Example response (500):

```json
{}
```
> Example response (404):

```json
{
    "message": "Record not found"
}
```

### HTTP Request
`DELETE api/v1/school/types/{type}`


<!-- END_6c9cb19312f4ae5a306720e452a6c31d -->

#Status management

APIs for managing statuses
<!-- START_3923530d06e40681224d47f591ccf5cc -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/statuses" 
```

```javascript
const url = new URL("http://localhost/api/v1/statuses");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": [
        {
            "id": 1,
            "name": "VIP",
            "descriptions": "",
            "created_by": 1,
            "created_at": "2019-02-06 09:58:46",
            "updated_at": "2019-02-06 09:58:46",
            "deleted_at": null
        }
    ]
}
```

### HTTP Request
`GET api/v1/statuses`


<!-- END_3923530d06e40681224d47f591ccf5cc -->

<!-- START_a7ada8c4f6e927f36d1b35bcad64309f -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/statuses"     -d "name"="avCsQK14SBMn1qYr" \
    -d "descriptions"="WcPwkU8FvjoFHdv3" 
```

```javascript
const url = new URL("http://localhost/api/v1/statuses");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "avCsQK14SBMn1qYr",
    "descriptions": "WcPwkU8FvjoFHdv3",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": {
        "name": "SUYNIL",
        "descriptions": "",
        "updated_at": "2019-02-06 12:49:41",
        "created_at": "2019-02-06 12:49:41",
        "id": 2
    }
}
```
> Example response (500):

```json
{}
```
> Example response (422):

```json
{
    "success": false,
    "data": {
        "first_name": [
            "The :attribute field is required."
        ]
    }
}
```

### HTTP Request
`POST api/v1/statuses`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | the name of the school status
    descriptions | string |  optional  | optional descriptions of the status

<!-- END_a7ada8c4f6e927f36d1b35bcad64309f -->

<!-- START_9a24753649bf711db2469b4550be1fd4 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/statuses/{status}" 
```

```javascript
const url = new URL("http://localhost/api/v1/statuses/{status}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": {
        "name": "SUYNIL",
        "descriptions": "Descriptions here...",
        "created_by": 1,
        "updated_by": 1,
        "updated_at": "2019-02-06 13:35:26",
        "created_at": "2019-02-06 13:35:26",
        "id": 9
    }
}
```
> Example response (500):

```json
{}
```
> Example response (404):

```json
{
    "message": "Record not found"
}
```

### HTTP Request
`GET api/v1/statuses/{status}`


<!-- END_9a24753649bf711db2469b4550be1fd4 -->

<!-- START_0898bd606cefca670cfa33547d02e52d -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/statuses/{status}"     -d "name"="cxNnADHcgeIBauQc" \
    -d "descriptions"="vhYpsEUJnzyE3onr" 
```

```javascript
const url = new URL("http://localhost/api/v1/statuses/{status}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "cxNnADHcgeIBauQc",
    "descriptions": "vhYpsEUJnzyE3onr",
})

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true
}
```
> Example response (500):

```json
{}
```
> Example response (422):

```json
{
    "success": false,
    "data": {
        "first_name": [
            "The :attribute field is required."
        ]
    }
}
```

### HTTP Request
`PUT api/v1/statuses/{status}`

`PATCH api/v1/statuses/{status}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | the name of the school status
    descriptions | string |  optional  | optional descriptions of the status

<!-- END_0898bd606cefca670cfa33547d02e52d -->

<!-- START_2d91e3a86a0ac5ddfd01b6ca66016715 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/statuses/{status}" 
```

```javascript
const url = new URL("http://localhost/api/v1/statuses/{status}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true
}
```
> Example response (500):

```json
{}
```
> Example response (404):

```json
{
    "message": "Record not found"
}
```

### HTTP Request
`DELETE api/v1/statuses/{status}`


<!-- END_2d91e3a86a0ac5ddfd01b6ca66016715 -->

#Sunday Celebration Status management

APIs for managing statuses
<!-- START_27281000585cfabbde3e536ce5d16835 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/sc-statuses" 
```

```javascript
const url = new URL("http://localhost/api/v1/sc-statuses");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": [
        {
            "id": 1,
            "name": "SUYNIL",
            "descriptions": "",
            "created_by": 1,
            "created_at": "2019-02-06 09:58:46",
            "updated_at": "2019-02-06 09:58:46",
            "deleted_at": null
        }
    ]
}
```

### HTTP Request
`GET api/v1/sc-statuses`


<!-- END_27281000585cfabbde3e536ce5d16835 -->

<!-- START_1554821376265766307530e0261d56b2 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/sc-statuses"     -d "name"="ulfsOT3jibWr8ukf" \
    -d "descriptions"="ktPcV1aZ4hNkspJ7" 
```

```javascript
const url = new URL("http://localhost/api/v1/sc-statuses");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "ulfsOT3jibWr8ukf",
    "descriptions": "ktPcV1aZ4hNkspJ7",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": {
        "name": "1st Timer",
        "descriptions": "",
        "created_by": 1,
        "updated_at": "2019-02-11 09:04:41",
        "created_at": "2019-02-11 09:04:41",
        "id": 1
    }
}
```
> Example response (500):

```json
{}
```
> Example response (422):

```json
{
    "success": false,
    "data": {
        "first_name": [
            "The :attribute field is required."
        ]
    }
}
```

### HTTP Request
`POST api/v1/sc-statuses`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | the name of the school status
    descriptions | string |  optional  | optional descriptions of the status

<!-- END_1554821376265766307530e0261d56b2 -->

<!-- START_7972d48c4256aad401ec9413df081c29 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/sc-statuses/{sc_status}" 
```

```javascript
const url = new URL("http://localhost/api/v1/sc-statuses/{sc_status}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": {
        "name": "1st Timer",
        "descriptions": "",
        "created_by": 1,
        "updated_at": "2019-02-11 09:04:41",
        "created_at": "2019-02-11 09:04:41",
        "id": 1
    }
}
```
> Example response (500):

```json
{}
```
> Example response (404):

```json
{
    "message": "Record not found"
}
```

### HTTP Request
`GET api/v1/sc-statuses/{sc_status}`


<!-- END_7972d48c4256aad401ec9413df081c29 -->

<!-- START_a0daa1272e1476312239d35b3a0d9d25 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/sc-statuses/{sc_status}"     -d "name"="qGc5aN5YIzBSSgDR" \
    -d "descriptions"="MGcppDJDqEpJU277" 
```

```javascript
const url = new URL("http://localhost/api/v1/sc-statuses/{sc_status}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "qGc5aN5YIzBSSgDR",
    "descriptions": "MGcppDJDqEpJU277",
})

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true
}
```
> Example response (500):

```json
{}
```
> Example response (422):

```json
{
    "success": false,
    "data": {
        "first_name": [
            "The :attribute field is required."
        ]
    }
}
```

### HTTP Request
`PUT api/v1/sc-statuses/{sc_status}`

`PATCH api/v1/sc-statuses/{sc_status}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | the name of the school status
    descriptions | string |  optional  | optional descriptions of the status

<!-- END_a0daa1272e1476312239d35b3a0d9d25 -->

<!-- START_ee9b210e7206aeb5df1c23778362d31e -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/sc-statuses/{sc_status}" 
```

```javascript
const url = new URL("http://localhost/api/v1/sc-statuses/{sc_status}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true
}
```
> Example response (500):

```json
{}
```
> Example response (404):

```json
{
    "message": "Record not found"
}
```

### HTTP Request
`DELETE api/v1/sc-statuses/{sc_status}`


<!-- END_ee9b210e7206aeb5df1c23778362d31e -->

#User Authentication

APIs for user auth
<!-- START_8c0e48cd8efa861b308fc45872ff0837 -->
## User Login

> Example request:

```bash
curl -X POST "http://localhost/api/v1/login"     -d "username"="ERzRcgU7wFmnXNHO" \
    -d "password"="ysM3A2uddFSH51qV" 
```

```javascript
const url = new URL("http://localhost/api/v1/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "username": "ERzRcgU7wFmnXNHO",
    "password": "ysM3A2uddFSH51qV",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": {
        "id": 1,
        "name": "administrator",
        "email": "serg.casquejo@gmail.com",
        "email_verified_at": null,
        "created_at": "2019-02-04 11:59:31",
        "updated_at": "2019-02-04 12:46:55",
        "api_token": "vpvisH4gOBN5zLu4xz1gVoPZQHMpJKc9Va8mY2MQcNQZ7wR1iMGWQDFtD5jx",
        "role_id": 1
    }
}
```
> Example response (200):

```json
{
    "success": false,
    "data": "User doesn`t exists."
}
```

### HTTP Request
`POST api/v1/login`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    username | string |  required  | The username or email of the user.
    password | string |  required  | The password of the user.

<!-- END_8c0e48cd8efa861b308fc45872ff0837 -->

<!-- START_fb2ae43e2e99ff4e90f22ba03801a735 -->
## User logout

> Example request:

```bash
curl -X POST "http://localhost/api/v1/logout" 
```

```javascript
const url = new URL("http://localhost/api/v1/logout");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": "User logged out."
}
```

### HTTP Request
`POST api/v1/logout`


<!-- END_fb2ae43e2e99ff4e90f22ba03801a735 -->

#User management

APIs for managing user
<!-- START_4194ceb9a20b7f80b61d14d44df366b4 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/users"     -d "username"="Sgn3O8E5KRCMDvt1" \
    -d "name"="OJk6vUFYgyQ1BMT5" \
    -d "email"="otviFdW7KEl8CBIZ" \
    -d "password"="f1rBEEhJwAqCKOTc" \
    -d "confirm_password"="QFDsRm97XW9MksGW" \
    -d "roles"="2NJTugWBDPizAfmS" \
    -d "member_id"="19" 
```

```javascript
const url = new URL("http://localhost/api/v1/users");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "username": "Sgn3O8E5KRCMDvt1",
    "name": "OJk6vUFYgyQ1BMT5",
    "email": "otviFdW7KEl8CBIZ",
    "password": "f1rBEEhJwAqCKOTc",
    "confirm_password": "QFDsRm97XW9MksGW",
    "roles": "2NJTugWBDPizAfmS",
    "member_id": "19",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": {
        "username": "bhcf_admin",
        "name": "BHCF",
        "email": "admin@bhcf.com",
        "updated_at": "2019-02-06 12:49:41",
        "created_at": "2019-02-06 12:49:41",
        "id": 2
    }
}
```
> Example response (500):

```json
{}
```
> Example response (422):

```json
{
    "success": false,
    "data": {
        "first_name": [
            "The :attribute field is required."
        ]
    }
}
```

### HTTP Request
`POST api/v1/users`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    username | string |  required  | the username of the user
    name | string |  required  | display name of the user
    email | string |  required  | the email of the user
    password | string |  required  | the password of the user
    confirm_password | string |  required  | the password confirmation
    roles | array(int) |  required  | array of role ID of the user
    member_id | integer |  optional  | optional the member id

<!-- END_4194ceb9a20b7f80b61d14d44df366b4 -->

<!-- START_cedc85e856362e0e3b46f5dcd9f8f5d0 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/users/{user}" 
```

```javascript
const url = new URL("http://localhost/api/v1/users/{user}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 103,
        "user_id": null,
        "leader_id": null,
        "invited_by": null,
        "first_name": "Sergio",
        "last_name": "casquejo",
        "middle_name": "degamo",
        "birthdate": "1989-09-07",
        "address": "Colo, camolinas, poblacion, cordova, cebu",
        "city": "cebu",
        "contact_no": "09219945112",
        "secondary_contact_no": null,
        "facebook_name": null,
        "avatar": null,
        "school_status_id": null,
        "leadership_level_id": null,
        "auxiliary_group_id": null,
        "status_id": null,
        "category_id": null,
        "remarks": null,
        "created_by": null,
        "created_at": "2019-02-06 11:28:46",
        "updated_at": "2019-02-06 11:48:27",
        "deleted_at": null
    }
}
```
> Example response (500):

```json
{}
```
> Example response (404):

```json
{
    "message": "Record not found"
}
```

### HTTP Request
`GET api/v1/users/{user}`


<!-- END_cedc85e856362e0e3b46f5dcd9f8f5d0 -->

<!-- START_296fac4bf818c99f6dd42a4a0eb56b58 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/users/{user}"     -d "name"="C9d00G0T2xvliYVQ" \
    -d "email"="eQweOW465FWKcBBL" \
    -d "roles"="Kh6Anw0OXOIhC9CB" \
    -d "id"="20" 
```

```javascript
const url = new URL("http://localhost/api/v1/users/{user}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "C9d00G0T2xvliYVQ",
    "email": "eQweOW465FWKcBBL",
    "roles": "Kh6Anw0OXOIhC9CB",
    "id": "20",
})

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true
}
```
> Example response (500):

```json
{}
```
> Example response (422):

```json
{
    "success": false,
    "data": {
        "first_name": [
            "The :attribute field is required."
        ]
    }
}
```

### HTTP Request
`PUT api/v1/users/{user}`

`PATCH api/v1/users/{user}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | display name of the user
    email | string |  required  | the email of the user
    roles | array(int) |  required  | array of role ID of the user
    id | integer |  required  | the ID of the user

<!-- END_296fac4bf818c99f6dd42a4a0eb56b58 -->

<!-- START_22354fc95c42d81a744eece68f5b9b9a -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/users/{user}" 
```

```javascript
const url = new URL("http://localhost/api/v1/users/{user}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true
}
```
> Example response (500):

```json
{}
```
> Example response (404):

```json
{
    "message": "Record not found"
}
```

### HTTP Request
`DELETE api/v1/users/{user}`


<!-- END_22354fc95c42d81a744eece68f5b9b9a -->


