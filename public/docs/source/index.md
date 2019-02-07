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
curl -X POST "http://localhost/api/v1/leadership-level"     -d "name"="X5AtTqf6W18YqM3b" \
    -d "descriptions"="z5cfvkFIzTUOc0iE" 
```

```javascript
const url = new URL("http://localhost/api/v1/leadership-level");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "X5AtTqf6W18YqM3b",
    "descriptions": "z5cfvkFIzTUOc0iE",
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
    descriptions | string |  optional  | options descriptions of the status

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
curl -X PUT "http://localhost/api/v1/leadership-level/{leadership_level}"     -d "name"="fJFSGsH9NYLQhKEg" \
    -d "descriptions"="OEmpNPONwQM0Yoe5" 
```

```javascript
const url = new URL("http://localhost/api/v1/leadership-level/{leadership_level}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "fJFSGsH9NYLQhKEg",
    "descriptions": "OEmpNPONwQM0Yoe5",
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
    descriptions | string |  optional  | options descriptions of the status

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
<!-- START_28b45afb44c32ca4c87eeba669e2961f -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/member/category" 
```

```javascript
const url = new URL("http://localhost/api/v1/member/category");

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
`GET api/v1/member/category`


<!-- END_28b45afb44c32ca4c87eeba669e2961f -->

<!-- START_d1f99b335f030297c2f479933f1ff9f5 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/member/category"     -d "name"="1n9eyl3si0nNnCCg" \
    -d "descriptions"="daCVCewA1xj3veOz" 
```

```javascript
const url = new URL("http://localhost/api/v1/member/category");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "1n9eyl3si0nNnCCg",
    "descriptions": "daCVCewA1xj3veOz",
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
`POST api/v1/member/category`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | the name of the school status
    descriptions | string |  optional  | options descriptions of the status

<!-- END_d1f99b335f030297c2f479933f1ff9f5 -->

<!-- START_4e2c3a052d76b1f8c9c518746cc08a49 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/member/category/{category}" 
```

```javascript
const url = new URL("http://localhost/api/v1/member/category/{category}");

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
`GET api/v1/member/category/{category}`


<!-- END_4e2c3a052d76b1f8c9c518746cc08a49 -->

<!-- START_79a3eafca7040d6db9dae83a53c0e225 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/member/category/{category}"     -d "name"="WNnfKu0G9O4B12pU" \
    -d "descriptions"="oXqtqnxUmSmGuy7v" 
```

```javascript
const url = new URL("http://localhost/api/v1/member/category/{category}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "WNnfKu0G9O4B12pU",
    "descriptions": "oXqtqnxUmSmGuy7v",
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
`PUT api/v1/member/category/{category}`

`PATCH api/v1/member/category/{category}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | the name of the school status
    descriptions | string |  optional  | options descriptions of the status

<!-- END_79a3eafca7040d6db9dae83a53c0e225 -->

<!-- START_cc606d588c2a800a60603731260940b5 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/member/category/{category}" 
```

```javascript
const url = new URL("http://localhost/api/v1/member/category/{category}");

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
`DELETE api/v1/member/category/{category}`


<!-- END_cc606d588c2a800a60603731260940b5 -->

<!-- START_722ca97e06a83a2ae82ef7250ade79e5 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/auxiliary-group" 
```

```javascript
const url = new URL("http://localhost/api/v1/auxiliary-group");

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
`GET api/v1/auxiliary-group`


<!-- END_722ca97e06a83a2ae82ef7250ade79e5 -->

<!-- START_641074fad805e6abba26301e1848983d -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/auxiliary-group"     -d "name"="caiLJLBgZKBsbhyA" \
    -d "descriptions"="TMGFavOgoKY5R7sP" 
```

```javascript
const url = new URL("http://localhost/api/v1/auxiliary-group");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "caiLJLBgZKBsbhyA",
    "descriptions": "TMGFavOgoKY5R7sP",
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
`POST api/v1/auxiliary-group`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | the name of the school status
    descriptions | string |  optional  | options descriptions of the status

<!-- END_641074fad805e6abba26301e1848983d -->

<!-- START_f071ccc680bfa5f0c50090886ca319d2 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/auxiliary-group/{auxiliary_group}" 
```

```javascript
const url = new URL("http://localhost/api/v1/auxiliary-group/{auxiliary_group}");

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
`GET api/v1/auxiliary-group/{auxiliary_group}`


<!-- END_f071ccc680bfa5f0c50090886ca319d2 -->

<!-- START_b2b041c1e114dc3b7c11defb9f9c4533 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/auxiliary-group/{auxiliary_group}"     -d "name"="GN5yjoZB2RKiWLE1" \
    -d "descriptions"="sUrFoAtga90UqfX5" 
```

```javascript
const url = new URL("http://localhost/api/v1/auxiliary-group/{auxiliary_group}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "GN5yjoZB2RKiWLE1",
    "descriptions": "sUrFoAtga90UqfX5",
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
`PUT api/v1/auxiliary-group/{auxiliary_group}`

`PATCH api/v1/auxiliary-group/{auxiliary_group}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | the name of the school status
    descriptions | string |  optional  | options descriptions of the status

<!-- END_b2b041c1e114dc3b7c11defb9f9c4533 -->

<!-- START_1cccafae501672ef85c60160bb7a4c57 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/auxiliary-group/{auxiliary_group}" 
```

```javascript
const url = new URL("http://localhost/api/v1/auxiliary-group/{auxiliary_group}");

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
`DELETE api/v1/auxiliary-group/{auxiliary_group}`


<!-- END_1cccafae501672ef85c60160bb7a4c57 -->

#Member management

APIs for managing member
<!-- START_0b763107d8b496bed3acc8f8817ce9e3 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/member" 
```

```javascript
const url = new URL("http://localhost/api/v1/member");

    let params = {
            "offset": "13",
            "limit": "17",
            "sort": "L5mDZBSw1RKmYIVd",
            "sortBy": "XhN7FNPKDboN0XeL",
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

> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/member`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    offset |  optional  | The page offset to return
    limit |  required  | The number of rows to return
    sort |  optional  | Field to sort by
    sortBy |  optional  | Ascending or descending

<!-- END_0b763107d8b496bed3acc8f8817ce9e3 -->

<!-- START_76b954ef1b36e323833cf19dd0b05fd4 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/member"     -d "leader_id"="10" \
    -d "invited_by"="18" \
    -d "first_name"="fP71lQVi70rqeSb0" \
    -d "last_name"="pU8VZKWe7y990fM0" \
    -d "middle_name"="73Aiz0m3DmgGxUuN" \
    -d "birthdate"="KcatEExCGRITqPWP" \
    -d "address"="8QXYGlMTOa4MvUcJ" \
    -d "city"="Np0JkK4ai1XSqu2U" \
    -d "contact_no"="JR224MzOXl0P0T0J" \
    -d "secondary_contact_no"="s9d28WzRpGVdlts5" \
    -d "facebook_name"="XI8Tw5ba18L0BCTl" \
    -d "avatar"="cv7ZiZZLWWJe28g9" \
    -d "school_status_id"="6" \
    -d "leadership_level_id"="18" \
    -d "auxiliary_group_id"="4" \
    -d "status_id"="17" \
    -d "category_id"="1" \
    -d "remarks"="doGuSaKhjszcuF8I" 
```

```javascript
const url = new URL("http://localhost/api/v1/member");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "leader_id": "10",
    "invited_by": "18",
    "first_name": "fP71lQVi70rqeSb0",
    "last_name": "pU8VZKWe7y990fM0",
    "middle_name": "73Aiz0m3DmgGxUuN",
    "birthdate": "KcatEExCGRITqPWP",
    "address": "8QXYGlMTOa4MvUcJ",
    "city": "Np0JkK4ai1XSqu2U",
    "contact_no": "JR224MzOXl0P0T0J",
    "secondary_contact_no": "s9d28WzRpGVdlts5",
    "facebook_name": "XI8Tw5ba18L0BCTl",
    "avatar": "cv7ZiZZLWWJe28g9",
    "school_status_id": "6",
    "leadership_level_id": "18",
    "auxiliary_group_id": "4",
    "status_id": "17",
    "category_id": "1",
    "remarks": "doGuSaKhjszcuF8I",
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
`POST api/v1/member`

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

<!-- END_76b954ef1b36e323833cf19dd0b05fd4 -->

<!-- START_f1c316041edd1bce6a237e112c142ae0 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/member/{member}" 
```

```javascript
const url = new URL("http://localhost/api/v1/member/{member}");

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
`GET api/v1/member/{member}`


<!-- END_f1c316041edd1bce6a237e112c142ae0 -->

<!-- START_8a5a3f26150e98ef1049a5e7311f3677 -->
## Update resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/member/{member}"     -d "leader_id"="16" \
    -d "invited_by"="1" \
    -d "first_name"="q52PIyA2bN2Sbwuf" \
    -d "last_name"="zKCTClJU1sR3thsQ" \
    -d "middle_name"="kO16aWBvQxqlJaM1" \
    -d "birthdate"="mmcUnAuoBeqQnhgi" \
    -d "address"="zbt8j3JgwJIvYSfI" \
    -d "city"="FpTb186Fh9HGHZEl" \
    -d "contact_no"="1DEvc4euB6rjarXZ" \
    -d "secondary_contact_no"="YuGftcRZBHDQlXAT" \
    -d "facebook_name"="6cH3zKLcSF7DCGQP" \
    -d "avatar"="xuO1jBL8nyzq8cZl" \
    -d "school_status_id"="20" \
    -d "leadership_level_id"="2" \
    -d "auxiliary_group_id"="15" \
    -d "status_id"="18" \
    -d "category_id"="9" \
    -d "remarks"="p9AXoRtnBhUDpJbO" \
    -d "_method"="vQt2BqYBfCRzoBjn" 
```

```javascript
const url = new URL("http://localhost/api/v1/member/{member}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "leader_id": "16",
    "invited_by": "1",
    "first_name": "q52PIyA2bN2Sbwuf",
    "last_name": "zKCTClJU1sR3thsQ",
    "middle_name": "kO16aWBvQxqlJaM1",
    "birthdate": "mmcUnAuoBeqQnhgi",
    "address": "zbt8j3JgwJIvYSfI",
    "city": "FpTb186Fh9HGHZEl",
    "contact_no": "1DEvc4euB6rjarXZ",
    "secondary_contact_no": "YuGftcRZBHDQlXAT",
    "facebook_name": "6cH3zKLcSF7DCGQP",
    "avatar": "xuO1jBL8nyzq8cZl",
    "school_status_id": "20",
    "leadership_level_id": "2",
    "auxiliary_group_id": "15",
    "status_id": "18",
    "category_id": "9",
    "remarks": "p9AXoRtnBhUDpJbO",
    "_method": "vQt2BqYBfCRzoBjn",
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
`PUT api/v1/member/{member}`

`PATCH api/v1/member/{member}`

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

<!-- END_8a5a3f26150e98ef1049a5e7311f3677 -->

<!-- START_ce9cb8aedaeb98e09b894d790e755233 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/member/{member}" 
```

```javascript
const url = new URL("http://localhost/api/v1/member/{member}");

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
`DELETE api/v1/member/{member}`


<!-- END_ce9cb8aedaeb98e09b894d790e755233 -->

#Ministries management

APIs for managing ministries member
<!-- START_711dd09418187b2eab9e83e0170c89db -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/ministry" 
```

```javascript
const url = new URL("http://localhost/api/v1/ministry");

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
`GET api/v1/ministry`


<!-- END_711dd09418187b2eab9e83e0170c89db -->

<!-- START_87238a9a88169520e4a59ad68b9c651e -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/ministry"     -d "name"="WtOC7nENzktXMjVh" \
    -d "descriptions"="ppyucxgZwPaISibU" 
```

```javascript
const url = new URL("http://localhost/api/v1/ministry");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "WtOC7nENzktXMjVh",
    "descriptions": "ppyucxgZwPaISibU",
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
`POST api/v1/ministry`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | the name of the school status
    descriptions | string |  optional  | options descriptions of the status

<!-- END_87238a9a88169520e4a59ad68b9c651e -->

<!-- START_bdf2607f2ffe3eb2e16569eb5f981db6 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/ministry/{ministry}" 
```

```javascript
const url = new URL("http://localhost/api/v1/ministry/{ministry}");

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
`GET api/v1/ministry/{ministry}`


<!-- END_bdf2607f2ffe3eb2e16569eb5f981db6 -->

<!-- START_84d8c6cc003d8f31f342f6520d2aef77 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/ministry/{ministry}"     -d "name"="Ntmn0Ojv8zpo63Wa" \
    -d "descriptions"="18tIePKH5BGbnwCX" 
```

```javascript
const url = new URL("http://localhost/api/v1/ministry/{ministry}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "Ntmn0Ojv8zpo63Wa",
    "descriptions": "18tIePKH5BGbnwCX",
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
`PUT api/v1/ministry/{ministry}`

`PATCH api/v1/ministry/{ministry}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | the name of the school status
    descriptions | string |  optional  | options descriptions of the status

<!-- END_84d8c6cc003d8f31f342f6520d2aef77 -->

<!-- START_3bb9521ab37726b544994e3fb1bf6146 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/ministry/{ministry}" 
```

```javascript
const url = new URL("http://localhost/api/v1/ministry/{ministry}");

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
`DELETE api/v1/ministry/{ministry}`


<!-- END_3bb9521ab37726b544994e3fb1bf6146 -->

#School Status management

APIs for managing School statuses
<!-- START_bc2ef12e6c3414789d786bb934ecbaac -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/school-status" 
```

```javascript
const url = new URL("http://localhost/api/v1/school-status");

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
`GET api/v1/school-status`


<!-- END_bc2ef12e6c3414789d786bb934ecbaac -->

<!-- START_4812d05cbd2db719a3dc1e723ec80c11 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/school-status"     -d "name"="J4MfolmdyL0G72Q5" \
    -d "descriptions"="7D9lW9VZcUHwpQaA" 
```

```javascript
const url = new URL("http://localhost/api/v1/school-status");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "J4MfolmdyL0G72Q5",
    "descriptions": "7D9lW9VZcUHwpQaA",
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
`POST api/v1/school-status`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | the name of the school status
    descriptions | string |  optional  | options descriptions of the status

<!-- END_4812d05cbd2db719a3dc1e723ec80c11 -->

<!-- START_a0902a99ef962c0805683abe30f32ca9 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/school-status/{school_status}" 
```

```javascript
const url = new URL("http://localhost/api/v1/school-status/{school_status}");

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
`GET api/v1/school-status/{school_status}`


<!-- END_a0902a99ef962c0805683abe30f32ca9 -->

<!-- START_3fa56b1c40196004e1657ec03941e95f -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/school-status/{school_status}"     -d "name"="4TmvFWRifl1Wp64I" \
    -d "descriptions"="rNP31ldNowhSE7vh" 
```

```javascript
const url = new URL("http://localhost/api/v1/school-status/{school_status}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "4TmvFWRifl1Wp64I",
    "descriptions": "rNP31ldNowhSE7vh",
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
`PUT api/v1/school-status/{school_status}`

`PATCH api/v1/school-status/{school_status}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | the name of the school status
    descriptions | string |  optional  | options descriptions of the status

<!-- END_3fa56b1c40196004e1657ec03941e95f -->

<!-- START_f2efc4a4bb6fab653a157fac0638a6ee -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/school-status/{school_status}" 
```

```javascript
const url = new URL("http://localhost/api/v1/school-status/{school_status}");

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
`DELETE api/v1/school-status/{school_status}`


<!-- END_f2efc4a4bb6fab653a157fac0638a6ee -->

#Status management

APIs for managing statuses
<!-- START_486e017f30b5ba33270db457014951a8 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/status" 
```

```javascript
const url = new URL("http://localhost/api/v1/status");

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
`GET api/v1/status`


<!-- END_486e017f30b5ba33270db457014951a8 -->

<!-- START_7e987af97c1971c3327e9a8a99b293f2 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/status"     -d "name"="qjRlYgl8ak3B58Sl" \
    -d "descriptions"="yTocNa5eTHqYY9oc" 
```

```javascript
const url = new URL("http://localhost/api/v1/status");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "qjRlYgl8ak3B58Sl",
    "descriptions": "yTocNa5eTHqYY9oc",
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
`POST api/v1/status`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | the name of the school status
    descriptions | string |  optional  | options descriptions of the status

<!-- END_7e987af97c1971c3327e9a8a99b293f2 -->

<!-- START_1edf775701afa87ed3546e22cae5d0dd -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/status/{status}" 
```

```javascript
const url = new URL("http://localhost/api/v1/status/{status}");

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
`GET api/v1/status/{status}`


<!-- END_1edf775701afa87ed3546e22cae5d0dd -->

<!-- START_b11b5aa4ef53dfc58afb9a3c3d5745ea -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/status/{status}"     -d "name"="WiCVSXVKQDN4Hwx9" \
    -d "descriptions"="3pezysBx4Se9AaWZ" 
```

```javascript
const url = new URL("http://localhost/api/v1/status/{status}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "WiCVSXVKQDN4Hwx9",
    "descriptions": "3pezysBx4Se9AaWZ",
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
`PUT api/v1/status/{status}`

`PATCH api/v1/status/{status}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | the name of the school status
    descriptions | string |  optional  | options descriptions of the status

<!-- END_b11b5aa4ef53dfc58afb9a3c3d5745ea -->

<!-- START_f07abb2fedb355bac8b6f02aff3aa69f -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/status/{status}" 
```

```javascript
const url = new URL("http://localhost/api/v1/status/{status}");

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
`DELETE api/v1/status/{status}`


<!-- END_f07abb2fedb355bac8b6f02aff3aa69f -->

#User Authentication

APIs for user auth
<!-- START_8c0e48cd8efa861b308fc45872ff0837 -->
## User Login

> Example request:

```bash
curl -X POST "http://localhost/api/v1/login"     -d "username"="0PjTMtBid1ie7QOz" \
    -d "password"="Zm1tX4kcehh5pO7q" 
```

```javascript
const url = new URL("http://localhost/api/v1/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "username": "0PjTMtBid1ie7QOz",
    "password": "Zm1tX4kcehh5pO7q",
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
<!-- START_96b8840d06e94c53a87e83e9edfb44eb -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/user"     -d "username"="YOaqbul6jUJu6F71" \
    -d "name"="q2K6zlSQ9Ldml1rx" \
    -d "email"="hG8jkX81OJVEswDX" \
    -d "password"="9CdrwLPPoii24AvO" \
    -d "confirm_password"="yXZUGbT4KuFWrgqa" \
    -d "role_id"="14" \
    -d "member_id"="4" 
```

```javascript
const url = new URL("http://localhost/api/v1/user");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "username": "YOaqbul6jUJu6F71",
    "name": "q2K6zlSQ9Ldml1rx",
    "email": "hG8jkX81OJVEswDX",
    "password": "9CdrwLPPoii24AvO",
    "confirm_password": "yXZUGbT4KuFWrgqa",
    "role_id": "14",
    "member_id": "4",
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
`POST api/v1/user`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    username | string |  required  | the username of the user
    name | string |  required  | display name of the user
    email | string |  required  | the email of the user
    password | string |  required  | the password of the user
    confirm_password | string |  required  | the password confirmation
    role_id | integer |  required  | the role of the user
    member_id | integer |  optional  | optional the member id

<!-- END_96b8840d06e94c53a87e83e9edfb44eb -->

<!-- START_a8f148df1f2cd4bc2d67314d2cb9fa3d -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/user/{user}" 
```

```javascript
const url = new URL("http://localhost/api/v1/user/{user}");

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
`GET api/v1/user/{user}`


<!-- END_a8f148df1f2cd4bc2d67314d2cb9fa3d -->

<!-- START_1006d782d67bb58039bde349972eb2f0 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/user/{user}"     -d "name"="kj3v10P0LuLTmJdC" \
    -d "email"="BWaFRrdYAtk9ZT2k" \
    -d "role_id"="6" \
    -d "id"="4" 
```

```javascript
const url = new URL("http://localhost/api/v1/user/{user}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "kj3v10P0LuLTmJdC",
    "email": "BWaFRrdYAtk9ZT2k",
    "role_id": "6",
    "id": "4",
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
`PUT api/v1/user/{user}`

`PATCH api/v1/user/{user}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | display name of the user
    email | string |  required  | the email of the user
    role_id | integer |  optional  | optional the role of the user
    id | integer |  required  | the ID of the user

<!-- END_1006d782d67bb58039bde349972eb2f0 -->

<!-- START_a5d7655acadc1b6c97d48e68f1e87be9 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/user/{user}" 
```

```javascript
const url = new URL("http://localhost/api/v1/user/{user}");

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
`DELETE api/v1/user/{user}`


<!-- END_a5d7655acadc1b6c97d48e68f1e87be9 -->


