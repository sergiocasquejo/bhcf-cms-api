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
curl -X POST "http://localhost/api/v1/leadership-level"     -d "name"="I5eSduNc6rdQ8SPl" \
    -d "descriptions"="2imMQIOny8iA6XWq" 
```

```javascript
const url = new URL("http://localhost/api/v1/leadership-level");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "I5eSduNc6rdQ8SPl",
    "descriptions": "2imMQIOny8iA6XWq",
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
curl -X PUT "http://localhost/api/v1/leadership-level/{leadership_level}"     -d "name"="5NOI2QA0rmH99mKd" \
    -d "descriptions"="nFe6n6xUakN8oBUi" 
```

```javascript
const url = new URL("http://localhost/api/v1/leadership-level/{leadership_level}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "5NOI2QA0rmH99mKd",
    "descriptions": "nFe6n6xUakN8oBUi",
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
curl -X POST "http://localhost/api/v1/member/category"     -d "name"="Za9XPeWCtKvvEEHA" \
    -d "descriptions"="btSRTjg8U3ctDTOO" 
```

```javascript
const url = new URL("http://localhost/api/v1/member/category");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "Za9XPeWCtKvvEEHA",
    "descriptions": "btSRTjg8U3ctDTOO",
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
    descriptions | string |  optional  | optional descriptions of the status

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
curl -X PUT "http://localhost/api/v1/member/category/{category}"     -d "name"="qu0U3PPQRPWxo6mX" \
    -d "descriptions"="RcRlF5d1D221IHee" 
```

```javascript
const url = new URL("http://localhost/api/v1/member/category/{category}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "qu0U3PPQRPWxo6mX",
    "descriptions": "RcRlF5d1D221IHee",
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
    descriptions | string |  optional  | optional descriptions of the status

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
curl -X POST "http://localhost/api/v1/auxiliary-group"     -d "name"="itHPssk11IB0lkyZ" \
    -d "descriptions"="JBm2Ta9Cf1DKEIXd" 
```

```javascript
const url = new URL("http://localhost/api/v1/auxiliary-group");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "itHPssk11IB0lkyZ",
    "descriptions": "JBm2Ta9Cf1DKEIXd",
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
    descriptions | string |  optional  | optional descriptions of the status

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
curl -X PUT "http://localhost/api/v1/auxiliary-group/{auxiliary_group}"     -d "name"="nJiUjszNPB8WhjbQ" \
    -d "descriptions"="D1KBYqO4gs2fWFCm" 
```

```javascript
const url = new URL("http://localhost/api/v1/auxiliary-group/{auxiliary_group}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "nJiUjszNPB8WhjbQ",
    "descriptions": "D1KBYqO4gs2fWFCm",
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
    descriptions | string |  optional  | optional descriptions of the status

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
            "offset": "2",
            "limit": "9",
            "sort": "cVCS24YbMaK8EMBU",
            "sortBy": "YS7jvIsTmB5CrmMb",
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
curl -X POST "http://localhost/api/v1/member"     -d "leader_id"="2" \
    -d "invited_by"="18" \
    -d "first_name"="xCn82XsFSL9kOnte" \
    -d "last_name"="uc9kVc8nlk62WYtC" \
    -d "middle_name"="0Qf2sEOh03p7x8Wm" \
    -d "birthdate"="tI9SyKeW2mF62DIF" \
    -d "address"="9R0YaSHM8XXAKDI6" \
    -d "city"="LxrOh2GgC86O1Jph" \
    -d "contact_no"="jk8Vt2xyMtsPRMTF" \
    -d "secondary_contact_no"="1yNrrk79vYdeQNCV" \
    -d "facebook_name"="ADr2mEEoGdfIUSbT" \
    -d "avatar"="axJK0sQIz2RAxtPc" \
    -d "school_status_id"="7" \
    -d "leadership_level_id"="14" \
    -d "auxiliary_group_id"="1" \
    -d "status_id"="4" \
    -d "category_id"="17" \
    -d "remarks"="Mwc854e7fg48JM8g" 
```

```javascript
const url = new URL("http://localhost/api/v1/member");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "leader_id": "2",
    "invited_by": "18",
    "first_name": "xCn82XsFSL9kOnte",
    "last_name": "uc9kVc8nlk62WYtC",
    "middle_name": "0Qf2sEOh03p7x8Wm",
    "birthdate": "tI9SyKeW2mF62DIF",
    "address": "9R0YaSHM8XXAKDI6",
    "city": "LxrOh2GgC86O1Jph",
    "contact_no": "jk8Vt2xyMtsPRMTF",
    "secondary_contact_no": "1yNrrk79vYdeQNCV",
    "facebook_name": "ADr2mEEoGdfIUSbT",
    "avatar": "axJK0sQIz2RAxtPc",
    "school_status_id": "7",
    "leadership_level_id": "14",
    "auxiliary_group_id": "1",
    "status_id": "4",
    "category_id": "17",
    "remarks": "Mwc854e7fg48JM8g",
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
curl -X PUT "http://localhost/api/v1/member/{member}"     -d "leader_id"="19" \
    -d "invited_by"="14" \
    -d "first_name"="c0mL6ODeIGtMSOLz" \
    -d "last_name"="iLUXT9Cdtp4i615p" \
    -d "middle_name"="SC7mqN2DCvP5Mpox" \
    -d "birthdate"="9PsIC56L6pogk6Hs" \
    -d "address"="6ooJ9nX3GYyfvxOk" \
    -d "city"="5hmTJSgeeacQR1ov" \
    -d "contact_no"="uGJBMwz7tnzDFagK" \
    -d "secondary_contact_no"="qyFSVDTnRY3Wd3EM" \
    -d "facebook_name"="B92KkbXjSiQyJ089" \
    -d "avatar"="xU9HpePyKQ8vd01x" \
    -d "school_status_id"="6" \
    -d "leadership_level_id"="16" \
    -d "auxiliary_group_id"="9" \
    -d "status_id"="2" \
    -d "category_id"="6" \
    -d "remarks"="1d94wucXY6ZfoEn5" \
    -d "_method"="jW3mb0Bw8h2Km8xb" 
```

```javascript
const url = new URL("http://localhost/api/v1/member/{member}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "leader_id": "19",
    "invited_by": "14",
    "first_name": "c0mL6ODeIGtMSOLz",
    "last_name": "iLUXT9Cdtp4i615p",
    "middle_name": "SC7mqN2DCvP5Mpox",
    "birthdate": "9PsIC56L6pogk6Hs",
    "address": "6ooJ9nX3GYyfvxOk",
    "city": "5hmTJSgeeacQR1ov",
    "contact_no": "uGJBMwz7tnzDFagK",
    "secondary_contact_no": "qyFSVDTnRY3Wd3EM",
    "facebook_name": "B92KkbXjSiQyJ089",
    "avatar": "xU9HpePyKQ8vd01x",
    "school_status_id": "6",
    "leadership_level_id": "16",
    "auxiliary_group_id": "9",
    "status_id": "2",
    "category_id": "6",
    "remarks": "1d94wucXY6ZfoEn5",
    "_method": "jW3mb0Bw8h2Km8xb",
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
curl -X POST "http://localhost/api/v1/ministry"     -d "name"="IRahNleA6wJCKKaB" \
    -d "descriptions"="JeDCEZ7y6bVRyIPu" 
```

```javascript
const url = new URL("http://localhost/api/v1/ministry");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "IRahNleA6wJCKKaB",
    "descriptions": "JeDCEZ7y6bVRyIPu",
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
curl -X PUT "http://localhost/api/v1/ministry/{ministry}"     -d "name"="PaAgWHO72GfksZzJ" \
    -d "descriptions"="clB9s7j2TcqL5tD9" 
```

```javascript
const url = new URL("http://localhost/api/v1/ministry/{ministry}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "PaAgWHO72GfksZzJ",
    "descriptions": "clB9s7j2TcqL5tD9",
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

#School Monitoring management

APIs for managing statuses
<!-- START_6c7055a96b4e29cb242730635351344c -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/school-monitoring" 
```

```javascript
const url = new URL("http://localhost/api/v1/school-monitoring");

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
`GET api/v1/school-monitoring`


<!-- END_6c7055a96b4e29cb242730635351344c -->

<!-- START_0e5006bb2f126f49dc91bea017e7f5ed -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/school-monitoring"     -d "batch_name"="n1V7r6Tju21ldrGp" \
    -d "school_year"="9" \
    -d "school_type_id"="16" \
    -d "remarks"="NE2ohr7gNlWDIKl2" 
```

```javascript
const url = new URL("http://localhost/api/v1/school-monitoring");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "batch_name": "n1V7r6Tju21ldrGp",
    "school_year": "9",
    "school_type_id": "16",
    "remarks": "NE2ohr7gNlWDIKl2",
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
`POST api/v1/school-monitoring`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    batch_name | string |  required  | the name of the batch
    school_year | integer |  optional  | requred the year
    school_type_id | integer |  required  | the school type (SUYNIL, Life Clas, SOL 1, ...)
    remarks | string |  optional  | optional remarks

<!-- END_0e5006bb2f126f49dc91bea017e7f5ed -->

<!-- START_3a3a278df419e9efad6a49a021f4a750 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/school-monitoring/{school_monitoring}" 
```

```javascript
const url = new URL("http://localhost/api/v1/school-monitoring/{school_monitoring}");

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
`GET api/v1/school-monitoring/{school_monitoring}`


<!-- END_3a3a278df419e9efad6a49a021f4a750 -->

<!-- START_77372951c29dd3d449c05508f3f223ef -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/school-monitoring/{school_monitoring}"     -d "batch_name"="kvLroKasvWm40Tol" \
    -d "school_year"="10" \
    -d "school_type_id"="14" \
    -d "remarks"="rHxWbvL9IDsgzsfp" 
```

```javascript
const url = new URL("http://localhost/api/v1/school-monitoring/{school_monitoring}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "batch_name": "kvLroKasvWm40Tol",
    "school_year": "10",
    "school_type_id": "14",
    "remarks": "rHxWbvL9IDsgzsfp",
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
`PUT api/v1/school-monitoring/{school_monitoring}`

`PATCH api/v1/school-monitoring/{school_monitoring}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    batch_name | string |  required  | the name of the batch
    school_year | integer |  optional  | requred the year
    school_type_id | integer |  required  | the school type (SUYNIL, Life Clas, SOL 1, ...)
    remarks | string |  optional  | optional remarks

<!-- END_77372951c29dd3d449c05508f3f223ef -->

<!-- START_34fc5414f868b95338c5b29a6fd3a8f4 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/school-monitoring/{school_monitoring}" 
```

```javascript
const url = new URL("http://localhost/api/v1/school-monitoring/{school_monitoring}");

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
`DELETE api/v1/school-monitoring/{school_monitoring}`


<!-- END_34fc5414f868b95338c5b29a6fd3a8f4 -->

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
curl -X POST "http://localhost/api/v1/school-status"     -d "name"="w3rbjzxCQsjHfsGm" \
    -d "descriptions"="TeEe0zP5wpjKqRo2" 
```

```javascript
const url = new URL("http://localhost/api/v1/school-status");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "w3rbjzxCQsjHfsGm",
    "descriptions": "TeEe0zP5wpjKqRo2",
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
    descriptions | string |  optional  | optional descriptions of the status

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
curl -X PUT "http://localhost/api/v1/school-status/{school_status}"     -d "name"="S1kkA8R458FmIf6a" \
    -d "descriptions"="04epbicX2QSjscG0" 
```

```javascript
const url = new URL("http://localhost/api/v1/school-status/{school_status}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "S1kkA8R458FmIf6a",
    "descriptions": "04epbicX2QSjscG0",
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
    descriptions | string |  optional  | optional descriptions of the status

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

#School Types management

APIs for managing statuses
<!-- START_254573b6639b8a70b3387499824c51da -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/school-type" 
```

```javascript
const url = new URL("http://localhost/api/v1/school-type");

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
`GET api/v1/school-type`


<!-- END_254573b6639b8a70b3387499824c51da -->

<!-- START_8a55c7b8750a26a691fc3ccbef0b1dd2 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/school-type"     -d "name"="AaRFOjy8fufCg5ew" \
    -d "descriptions"="xnHGJwaZJGseglWg" 
```

```javascript
const url = new URL("http://localhost/api/v1/school-type");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "AaRFOjy8fufCg5ew",
    "descriptions": "xnHGJwaZJGseglWg",
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
`POST api/v1/school-type`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | the name of the school status
    descriptions | string |  optional  | optional descriptions of the status

<!-- END_8a55c7b8750a26a691fc3ccbef0b1dd2 -->

<!-- START_f1135468ab63b6b4195eefcf04e14ae0 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/school-type/{school_type}" 
```

```javascript
const url = new URL("http://localhost/api/v1/school-type/{school_type}");

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
`GET api/v1/school-type/{school_type}`


<!-- END_f1135468ab63b6b4195eefcf04e14ae0 -->

<!-- START_a5a602454c360397bd41f5bb1eae0347 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/school-type/{school_type}"     -d "name"="cOIjnPLYF1eqOY1n" \
    -d "descriptions"="rT7VBpXqrivvn7KM" 
```

```javascript
const url = new URL("http://localhost/api/v1/school-type/{school_type}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "cOIjnPLYF1eqOY1n",
    "descriptions": "rT7VBpXqrivvn7KM",
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
`PUT api/v1/school-type/{school_type}`

`PATCH api/v1/school-type/{school_type}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | the name of the school status
    descriptions | string |  optional  | optional descriptions of the status

<!-- END_a5a602454c360397bd41f5bb1eae0347 -->

<!-- START_1526c4e6b137ffe61c00ba60791f5aeb -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/school-type/{school_type}" 
```

```javascript
const url = new URL("http://localhost/api/v1/school-type/{school_type}");

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
`DELETE api/v1/school-type/{school_type}`


<!-- END_1526c4e6b137ffe61c00ba60791f5aeb -->

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
curl -X POST "http://localhost/api/v1/status"     -d "name"="geuBO8HnsoULpmvU" \
    -d "descriptions"="ApYnyvMHmkvngiNO" 
```

```javascript
const url = new URL("http://localhost/api/v1/status");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "geuBO8HnsoULpmvU",
    "descriptions": "ApYnyvMHmkvngiNO",
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
    descriptions | string |  optional  | optional descriptions of the status

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
curl -X PUT "http://localhost/api/v1/status/{status}"     -d "name"="ya7qmsGPnDOcuwLB" \
    -d "descriptions"="IYEJ2s1ornCkwEty" 
```

```javascript
const url = new URL("http://localhost/api/v1/status/{status}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "ya7qmsGPnDOcuwLB",
    "descriptions": "IYEJ2s1ornCkwEty",
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
    descriptions | string |  optional  | optional descriptions of the status

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

#Sunday Celebration Status management

APIs for managing statuses
<!-- START_45d4bca761d3bf2ca0acf70e34d7eed9 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/sc-status" 
```

```javascript
const url = new URL("http://localhost/api/v1/sc-status");

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
`GET api/v1/sc-status`


<!-- END_45d4bca761d3bf2ca0acf70e34d7eed9 -->

<!-- START_21c49fcb3e07aefc66141be0f33d57b2 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/sc-status"     -d "name"="iuLMRqcEWa31VB9U" \
    -d "descriptions"="vM3psKvIGToZs7SS" 
```

```javascript
const url = new URL("http://localhost/api/v1/sc-status");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "iuLMRqcEWa31VB9U",
    "descriptions": "vM3psKvIGToZs7SS",
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
`POST api/v1/sc-status`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | the name of the school status
    descriptions | string |  optional  | optional descriptions of the status

<!-- END_21c49fcb3e07aefc66141be0f33d57b2 -->

<!-- START_6e1dd9278be2ae24584f825ba8f73df7 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/sc-status/{sc_status}" 
```

```javascript
const url = new URL("http://localhost/api/v1/sc-status/{sc_status}");

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
`GET api/v1/sc-status/{sc_status}`


<!-- END_6e1dd9278be2ae24584f825ba8f73df7 -->

<!-- START_33da57ee063e290a59322f8c2f23897e -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/sc-status/{sc_status}"     -d "name"="b0UPTOoDdXltSqW5" \
    -d "descriptions"="zqVDysgcTzumqydf" 
```

```javascript
const url = new URL("http://localhost/api/v1/sc-status/{sc_status}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "b0UPTOoDdXltSqW5",
    "descriptions": "zqVDysgcTzumqydf",
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
`PUT api/v1/sc-status/{sc_status}`

`PATCH api/v1/sc-status/{sc_status}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | the name of the school status
    descriptions | string |  optional  | optional descriptions of the status

<!-- END_33da57ee063e290a59322f8c2f23897e -->

<!-- START_bde5cedbeb1ed20a3bda3536cf9eec9c -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/sc-status/{sc_status}" 
```

```javascript
const url = new URL("http://localhost/api/v1/sc-status/{sc_status}");

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
`DELETE api/v1/sc-status/{sc_status}`


<!-- END_bde5cedbeb1ed20a3bda3536cf9eec9c -->

#User Authentication

APIs for user auth
<!-- START_8c0e48cd8efa861b308fc45872ff0837 -->
## User Login

> Example request:

```bash
curl -X POST "http://localhost/api/v1/login"     -d "username"="ZuEPzqDvkk5gGKtG" \
    -d "password"="MNS7O7SvvYtAQ26x" 
```

```javascript
const url = new URL("http://localhost/api/v1/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "username": "ZuEPzqDvkk5gGKtG",
    "password": "MNS7O7SvvYtAQ26x",
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
curl -X POST "http://localhost/api/v1/user"     -d "username"="sKjSk3iOgGH4A4J6" \
    -d "name"="MqEGySFB9Se1KCR3" \
    -d "email"="2gPUjgUpy9qvmmDE" \
    -d "password"="nh8zw2S9BZ1mNODU" \
    -d "confirm_password"="s9AbJdntypLM9nk2" \
    -d "role_id"="3" \
    -d "member_id"="12" 
```

```javascript
const url = new URL("http://localhost/api/v1/user");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "username": "sKjSk3iOgGH4A4J6",
    "name": "MqEGySFB9Se1KCR3",
    "email": "2gPUjgUpy9qvmmDE",
    "password": "nh8zw2S9BZ1mNODU",
    "confirm_password": "s9AbJdntypLM9nk2",
    "role_id": "3",
    "member_id": "12",
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
curl -X PUT "http://localhost/api/v1/user/{user}"     -d "name"="wm1hyW0AslxQ3Zjo" \
    -d "email"="crTZkKrHBDhnSVga" \
    -d "role_id"="13" \
    -d "id"="6" 
```

```javascript
const url = new URL("http://localhost/api/v1/user/{user}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "wm1hyW0AslxQ3Zjo",
    "email": "crTZkKrHBDhnSVga",
    "role_id": "13",
    "id": "6",
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


