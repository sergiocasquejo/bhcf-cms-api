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
curl -X GET -G "http://localhost/api/v1/leadership-level" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/leadership-level");

let headers = {
    "Authorization": "Bearer {token}",
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
curl -X POST "http://localhost/api/v1/leadership-level" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"name":"voC3khPnvUCVX6W0","descriptions":"AqjaQuPzyjZwsfXG"}'

```

```javascript
const url = new URL("http://localhost/api/v1/leadership-level");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "voC3khPnvUCVX6W0",
    "descriptions": "AqjaQuPzyjZwsfXG"
}

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
{
    "data": "Error message ..."
}
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
curl -X GET -G "http://localhost/api/v1/leadership-level/{leadership_level}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/leadership-level/{leadership_level}");

let headers = {
    "Authorization": "Bearer {token}",
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
{
    "data": "Error message ..."
}
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
curl -X PUT "http://localhost/api/v1/leadership-level/{leadership_level}" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"name":"sSMtXQxOBqE1v90K","descriptions":"G4HauTI72KryowVo"}'

```

```javascript
const url = new URL("http://localhost/api/v1/leadership-level/{leadership_level}");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "sSMtXQxOBqE1v90K",
    "descriptions": "G4HauTI72KryowVo"
}

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
{
    "data": "Error message ..."
}
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
curl -X DELETE "http://localhost/api/v1/leadership-level/{leadership_level}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/leadership-level/{leadership_level}");

let headers = {
    "Authorization": "Bearer {token}",
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
{
    "data": "Error message ..."
}
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

#Member Auxiliary Group management

APIs for managing Auxiliary Group member
<!-- START_67ec1738998daf674020f6431b7a80b0 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/auxiliary-groups" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/auxiliary-groups");

let headers = {
    "Authorization": "Bearer {token}",
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
curl -X POST "http://localhost/api/v1/auxiliary-groups" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"name":"QuIymd4bUq3b2HJe","descriptions":"zlJwUpESQARtnKBO"}'

```

```javascript
const url = new URL("http://localhost/api/v1/auxiliary-groups");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "QuIymd4bUq3b2HJe",
    "descriptions": "zlJwUpESQARtnKBO"
}

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
{
    "data": "Error message ..."
}
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
curl -X GET -G "http://localhost/api/v1/auxiliary-groups/{auxiliary_group}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/auxiliary-groups/{auxiliary_group}");

let headers = {
    "Authorization": "Bearer {token}",
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
{
    "data": "Error message ..."
}
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
curl -X PUT "http://localhost/api/v1/auxiliary-groups/{auxiliary_group}" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"name":"0cxUU9Oa6sL1wctH","descriptions":"ss6ZLjdIq6DqM3ny"}'

```

```javascript
const url = new URL("http://localhost/api/v1/auxiliary-groups/{auxiliary_group}");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "0cxUU9Oa6sL1wctH",
    "descriptions": "ss6ZLjdIq6DqM3ny"
}

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
{
    "data": "Error message ..."
}
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
curl -X DELETE "http://localhost/api/v1/auxiliary-groups/{auxiliary_group}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/auxiliary-groups/{auxiliary_group}");

let headers = {
    "Authorization": "Bearer {token}",
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
{
    "data": "Error message ..."
}
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

#Member Category management

APIs for managing category member
<!-- START_4e6bc7f59323906ab6f1823c4bdb5958 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/members/category" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/members/category");

let headers = {
    "Authorization": "Bearer {token}",
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
curl -X POST "http://localhost/api/v1/members/category" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"name":"UU9GIojgDBgNRMRb","descriptions":"JVxV2xK2CaNkfpPz"}'

```

```javascript
const url = new URL("http://localhost/api/v1/members/category");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "UU9GIojgDBgNRMRb",
    "descriptions": "JVxV2xK2CaNkfpPz"
}

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
{
    "data": "Error message ..."
}
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
curl -X GET -G "http://localhost/api/v1/members/category/{category}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/members/category/{category}");

let headers = {
    "Authorization": "Bearer {token}",
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
{
    "data": "Error message ..."
}
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
curl -X PUT "http://localhost/api/v1/members/category/{category}" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"name":"851raN59A57oadmc","descriptions":"CK5ruZY1Fv8kfaLJ"}'

```

```javascript
const url = new URL("http://localhost/api/v1/members/category/{category}");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "851raN59A57oadmc",
    "descriptions": "CK5ruZY1Fv8kfaLJ"
}

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
{
    "data": "Error message ..."
}
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
curl -X DELETE "http://localhost/api/v1/members/category/{category}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/members/category/{category}");

let headers = {
    "Authorization": "Bearer {token}",
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
{
    "data": "Error message ..."
}
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

#Member management

APIs for managing member
<!-- START_db2b4c508ae84f978691116bec87eed4 -->
## Update member profile picture

> Example request:

```bash
curl -X POST "http://localhost/api/v1/members/{id}/avatar" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"avatar":"eyXy0i4Jz4kdWyc0","_method":"fO4WiQDlURQc9tBD"}'

```

```javascript
const url = new URL("http://localhost/api/v1/members/{id}/avatar");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "avatar": "eyXy0i4Jz4kdWyc0",
    "_method": "fO4WiQDlURQc9tBD"
}

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
    "avatar": {
        "original": "public_path\/avatar\/avatar.jpg",
        "thumbnail": "..."
    }
}
```
> Example response (500):

```json
{
    "data": "Error message ..."
}
```
> Example response (422):

```json
{
    "success": false,
    "data": {
        "first_name": [
            "avatar is required!"
        ]
    }
}
```

### HTTP Request
`POST api/v1/members/{id}/avatar`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    avatar | file |  optional  | optional the file from file upload
    _method | string |  required  | options(PUT|PATCH)

<!-- END_db2b4c508ae84f978691116bec87eed4 -->

<!-- START_93652cc886b6606148cd67f1719bdc17 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/members" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/members");

    let params = {
            "offset": "14",
            "limit": "16",
            "sort": "zmgjCG4nn11sRF4V",
            "sortBy": "5AKjI1kZRysYWLV8",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {token}",
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
curl -X POST "http://localhost/api/v1/members" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"leader_id":6,"invited_by":7,"first_name":"MSD9onyHGZHqGuW2","last_name":"BuSKk2UFnpJz6kGp","middle_name":"HdPy7a5S65hUL2CC","birthdate":"cKAPKrNp6uO3J6D7","address":"QdUcoRM30qMyOeJC","city":"Q6oLvUL16Kn9Zilr","contact_no":"pddahgZzcmQEfVkQ","secondary_contact_no":"g93jZOwYBLKoI9VM","facebook_name":"XVjb6QLpmHbsoYUk","avatar":"gbPyhKnlHn6Uz0U2","school_status_id":17,"leadership_level_id":10,"auxiliary_group_id":15,"status_id":10,"category_id":12,"remarks":"NJbQeCpbC8SiigNP"}'

```

```javascript
const url = new URL("http://localhost/api/v1/members");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "leader_id": 6,
    "invited_by": 7,
    "first_name": "MSD9onyHGZHqGuW2",
    "last_name": "BuSKk2UFnpJz6kGp",
    "middle_name": "HdPy7a5S65hUL2CC",
    "birthdate": "cKAPKrNp6uO3J6D7",
    "address": "QdUcoRM30qMyOeJC",
    "city": "Q6oLvUL16Kn9Zilr",
    "contact_no": "pddahgZzcmQEfVkQ",
    "secondary_contact_no": "g93jZOwYBLKoI9VM",
    "facebook_name": "XVjb6QLpmHbsoYUk",
    "avatar": "gbPyhKnlHn6Uz0U2",
    "school_status_id": 17,
    "leadership_level_id": 10,
    "auxiliary_group_id": 15,
    "status_id": 10,
    "category_id": 12,
    "remarks": "NJbQeCpbC8SiigNP"
}

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
{
    "data": "Error message ..."
}
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
curl -X GET -G "http://localhost/api/v1/members/{member}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/members/{member}");

let headers = {
    "Authorization": "Bearer {token}",
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
{
    "data": "Error message ..."
}
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
curl -X PUT "http://localhost/api/v1/members/{member}" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"leader_id":13,"invited_by":17,"first_name":"jyXpUT37vQZFObYR","last_name":"DYQd5Eztc9Up24At","middle_name":"RrgpXbat0AWLgyMs","birthdate":"77k4gcdOBWtIZL6G","address":"tjdQyEZATT9bismm","city":"sca8kU3wwcpOPhAP","contact_no":"6nSOXQfm6fvdreeX","secondary_contact_no":"k7M2jSyBGuLvzWin","facebook_name":"kPQhLfUQgV0Qbs73","avatar":"yjMrRXhdh35wbbZD","school_status_id":18,"leadership_level_id":13,"auxiliary_group_id":13,"status_id":3,"category_id":20,"remarks":"Lio6mbnJ58ghvvtX","_method":"RzBt7JzEqxM59NMD"}'

```

```javascript
const url = new URL("http://localhost/api/v1/members/{member}");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "leader_id": 13,
    "invited_by": 17,
    "first_name": "jyXpUT37vQZFObYR",
    "last_name": "DYQd5Eztc9Up24At",
    "middle_name": "RrgpXbat0AWLgyMs",
    "birthdate": "77k4gcdOBWtIZL6G",
    "address": "tjdQyEZATT9bismm",
    "city": "sca8kU3wwcpOPhAP",
    "contact_no": "6nSOXQfm6fvdreeX",
    "secondary_contact_no": "k7M2jSyBGuLvzWin",
    "facebook_name": "kPQhLfUQgV0Qbs73",
    "avatar": "yjMrRXhdh35wbbZD",
    "school_status_id": 18,
    "leadership_level_id": 13,
    "auxiliary_group_id": 13,
    "status_id": 3,
    "category_id": 20,
    "remarks": "Lio6mbnJ58ghvvtX",
    "_method": "RzBt7JzEqxM59NMD"
}

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
{
    "data": "Error message ..."
}
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
curl -X DELETE "http://localhost/api/v1/members/{member}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/members/{member}");

let headers = {
    "Authorization": "Bearer {token}",
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
{
    "data": "Error message ..."
}
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
curl -X GET -G "http://localhost/api/v1/ministries" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/ministries");

let headers = {
    "Authorization": "Bearer {token}",
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
curl -X POST "http://localhost/api/v1/ministries" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"name":"8VMuj8WenThNKqB3","descriptions":"4c5cZ04XAP5g8rfR"}'

```

```javascript
const url = new URL("http://localhost/api/v1/ministries");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "8VMuj8WenThNKqB3",
    "descriptions": "4c5cZ04XAP5g8rfR"
}

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
{
    "data": "Error message ..."
}
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
curl -X GET -G "http://localhost/api/v1/ministries/{ministry}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/ministries/{ministry}");

let headers = {
    "Authorization": "Bearer {token}",
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
{
    "data": "Error message ..."
}
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
curl -X PUT "http://localhost/api/v1/ministries/{ministry}" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"name":"RgHkeKoZSWctXW2U","descriptions":"wyOP8RWpv4fu4mYW"}'

```

```javascript
const url = new URL("http://localhost/api/v1/ministries/{ministry}");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "RgHkeKoZSWctXW2U",
    "descriptions": "wyOP8RWpv4fu4mYW"
}

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
{
    "data": "Error message ..."
}
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
curl -X DELETE "http://localhost/api/v1/ministries/{ministry}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/ministries/{ministry}");

let headers = {
    "Authorization": "Bearer {token}",
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
{
    "data": "Error message ..."
}
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
curl -X GET -G "http://localhost/api/v1/school/classes" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/school/classes");

let headers = {
    "Authorization": "Bearer {token}",
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
curl -X POST "http://localhost/api/v1/school/classes" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"batch_name":"uiAJDQ70dMC9INOx","school_year":9,"school_type_id":14,"remarks":"ujGSP2C8huF1eWvO"}'

```

```javascript
const url = new URL("http://localhost/api/v1/school/classes");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "batch_name": "uiAJDQ70dMC9INOx",
    "school_year": 9,
    "school_type_id": 14,
    "remarks": "ujGSP2C8huF1eWvO"
}

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
{
    "data": "Error message ..."
}
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
curl -X GET -G "http://localhost/api/v1/school/classes/{class}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/school/classes/{class}");

let headers = {
    "Authorization": "Bearer {token}",
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
{
    "data": "Error message ..."
}
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
curl -X PUT "http://localhost/api/v1/school/classes/{class}" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"batch_name":"a9Y7Gqz98VFdKjTm","school_year":11,"school_type_id":12,"remarks":"UdAaA7uM5lQN8KgF"}'

```

```javascript
const url = new URL("http://localhost/api/v1/school/classes/{class}");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "batch_name": "a9Y7Gqz98VFdKjTm",
    "school_year": 11,
    "school_type_id": 12,
    "remarks": "UdAaA7uM5lQN8KgF"
}

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
{
    "data": "Error message ..."
}
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
curl -X DELETE "http://localhost/api/v1/school/classes/{class}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/school/classes/{class}");

let headers = {
    "Authorization": "Bearer {token}",
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
{
    "data": "Error message ..."
}
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
curl -X GET -G "http://localhost/api/v1/school/statuses" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/school/statuses");

let headers = {
    "Authorization": "Bearer {token}",
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
curl -X POST "http://localhost/api/v1/school/statuses" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"name":"g78IRs5N5Sx9bNkV","descriptions":"0TyCyYfxyJRAAy8K"}'

```

```javascript
const url = new URL("http://localhost/api/v1/school/statuses");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "g78IRs5N5Sx9bNkV",
    "descriptions": "0TyCyYfxyJRAAy8K"
}

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
{
    "data": "Error message ..."
}
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
curl -X GET -G "http://localhost/api/v1/school/statuses/{status}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/school/statuses/{status}");

let headers = {
    "Authorization": "Bearer {token}",
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
{
    "data": "Error message ..."
}
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
curl -X PUT "http://localhost/api/v1/school/statuses/{status}" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"name":"ygqV0zjxvoZq03Ne","descriptions":"UGjwdeXRe3yBkNao"}'

```

```javascript
const url = new URL("http://localhost/api/v1/school/statuses/{status}");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "ygqV0zjxvoZq03Ne",
    "descriptions": "UGjwdeXRe3yBkNao"
}

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
{
    "data": "Error message ..."
}
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
curl -X DELETE "http://localhost/api/v1/school/statuses/{status}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/school/statuses/{status}");

let headers = {
    "Authorization": "Bearer {token}",
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
{
    "data": "Error message ..."
}
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
curl -X GET -G "http://localhost/api/v1/school/types" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/school/types");

let headers = {
    "Authorization": "Bearer {token}",
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
curl -X POST "http://localhost/api/v1/school/types" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"name":"pR1i9OCI2ctKtbnj","descriptions":"2xNhZ289tHQ7wdlw"}'

```

```javascript
const url = new URL("http://localhost/api/v1/school/types");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "pR1i9OCI2ctKtbnj",
    "descriptions": "2xNhZ289tHQ7wdlw"
}

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
{
    "data": "Error message ..."
}
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
curl -X GET -G "http://localhost/api/v1/school/types/{type}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/school/types/{type}");

let headers = {
    "Authorization": "Bearer {token}",
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
{
    "data": "Error message ..."
}
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
curl -X PUT "http://localhost/api/v1/school/types/{type}" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"name":"cB4LCfZ888LMDQ97","descriptions":"SOqmPdF16k5BMA5Z"}'

```

```javascript
const url = new URL("http://localhost/api/v1/school/types/{type}");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "cB4LCfZ888LMDQ97",
    "descriptions": "SOqmPdF16k5BMA5Z"
}

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
{
    "data": "Error message ..."
}
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
curl -X DELETE "http://localhost/api/v1/school/types/{type}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/school/types/{type}");

let headers = {
    "Authorization": "Bearer {token}",
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
{
    "data": "Error message ..."
}
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
curl -X GET -G "http://localhost/api/v1/statuses" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/statuses");

let headers = {
    "Authorization": "Bearer {token}",
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
curl -X POST "http://localhost/api/v1/statuses" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"name":"iLvzoCu1Zmm9c9fq","descriptions":"jwDpijKL8YJvE9hH"}'

```

```javascript
const url = new URL("http://localhost/api/v1/statuses");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "iLvzoCu1Zmm9c9fq",
    "descriptions": "jwDpijKL8YJvE9hH"
}

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
{
    "data": "Error message ..."
}
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
curl -X GET -G "http://localhost/api/v1/statuses/{status}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/statuses/{status}");

let headers = {
    "Authorization": "Bearer {token}",
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
{
    "data": "Error message ..."
}
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
curl -X PUT "http://localhost/api/v1/statuses/{status}" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"name":"aWfbQBPsCNcgboa4","descriptions":"HrShgHYNA3W0aMKY"}'

```

```javascript
const url = new URL("http://localhost/api/v1/statuses/{status}");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "aWfbQBPsCNcgboa4",
    "descriptions": "HrShgHYNA3W0aMKY"
}

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
{
    "data": "Error message ..."
}
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
curl -X DELETE "http://localhost/api/v1/statuses/{status}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/statuses/{status}");

let headers = {
    "Authorization": "Bearer {token}",
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
{
    "data": "Error message ..."
}
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
curl -X GET -G "http://localhost/api/v1/sc-statuses" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/sc-statuses");

let headers = {
    "Authorization": "Bearer {token}",
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
curl -X POST "http://localhost/api/v1/sc-statuses" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"name":"FofVex36XpOxArIu","descriptions":"GzrZltdS2Tr2M4k3"}'

```

```javascript
const url = new URL("http://localhost/api/v1/sc-statuses");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "FofVex36XpOxArIu",
    "descriptions": "GzrZltdS2Tr2M4k3"
}

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
{
    "data": "Error message ..."
}
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
curl -X GET -G "http://localhost/api/v1/sc-statuses/{sc_status}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/sc-statuses/{sc_status}");

let headers = {
    "Authorization": "Bearer {token}",
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
{
    "data": "Error message ..."
}
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
curl -X PUT "http://localhost/api/v1/sc-statuses/{sc_status}" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"name":"IZggK1g1d8Q2KdWO","descriptions":"z0TwXJm2DBiceMIt"}'

```

```javascript
const url = new URL("http://localhost/api/v1/sc-statuses/{sc_status}");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "IZggK1g1d8Q2KdWO",
    "descriptions": "z0TwXJm2DBiceMIt"
}

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
{
    "data": "Error message ..."
}
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
curl -X DELETE "http://localhost/api/v1/sc-statuses/{sc_status}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/sc-statuses/{sc_status}");

let headers = {
    "Authorization": "Bearer {token}",
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
{
    "data": "Error message ..."
}
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
curl -X POST "http://localhost/api/v1/login" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"username":"z6PNFfmfJgeq2o4C","password":"xND8AWip5wgeDUZj"}'

```

```javascript
const url = new URL("http://localhost/api/v1/login");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "username": "z6PNFfmfJgeq2o4C",
    "password": "xND8AWip5wgeDUZj"
}

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
curl -X POST "http://localhost/api/v1/logout" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/logout");

let headers = {
    "Authorization": "Bearer {token}",
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

#User Role management

APIs for managing user roles
<!-- START_5f753b2bffb6b34b6136ddfe1be7bcce -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/roles" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"name":"a2aiStl5U1VW6YKT","descriptions":"ND4SnQvwzLJ84yrr"}'

```

```javascript
const url = new URL("http://localhost/api/v1/roles");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "a2aiStl5U1VW6YKT",
    "descriptions": "ND4SnQvwzLJ84yrr"
}

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
        "name": "Administrator",
        "descriptions": "",
        "updated_at": "2019-02-06 12:49:41",
        "created_at": "2019-02-06 12:49:41",
        "id": 2
    }
}
```
> Example response (500):

```json
{
    "data": "Error message ..."
}
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
`POST api/v1/roles`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | the name of the school status
    descriptions | string |  optional  | options descriptions of the status

<!-- END_5f753b2bffb6b34b6136ddfe1be7bcce -->

<!-- START_ba05db58d706b9f94944b1ab79e1e4a2 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/roles/{role}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/roles/{role}");

let headers = {
    "Authorization": "Bearer {token}",
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
        "name": "Administrator",
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
{
    "data": "Error message ..."
}
```
> Example response (404):

```json
{
    "message": "Record not found"
}
```

### HTTP Request
`GET api/v1/roles/{role}`


<!-- END_ba05db58d706b9f94944b1ab79e1e4a2 -->

<!-- START_81ac9047f8db2b92092c5a7f13e5d28d -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/roles/{role}" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"name":"0f32YkOPhrepL2eD","descriptions":"HZZ2MWoVvUKoH6Y3"}'

```

```javascript
const url = new URL("http://localhost/api/v1/roles/{role}");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "0f32YkOPhrepL2eD",
    "descriptions": "HZZ2MWoVvUKoH6Y3"
}

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
{
    "data": "Error message ..."
}
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
`PUT api/v1/roles/{role}`

`PATCH api/v1/roles/{role}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | role name
    descriptions | string |  optional  | optional role descriptions

<!-- END_81ac9047f8db2b92092c5a7f13e5d28d -->

<!-- START_04c524fc2f0ea8c793406426144b4c71 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/roles/{role}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/roles/{role}");

let headers = {
    "Authorization": "Bearer {token}",
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
{
    "data": "Error message ..."
}
```
> Example response (404):

```json
{
    "message": "Record not found"
}
```

### HTTP Request
`DELETE api/v1/roles/{role}`


<!-- END_04c524fc2f0ea8c793406426144b4c71 -->

#User management

APIs for managing user
<!-- START_4194ceb9a20b7f80b61d14d44df366b4 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/users" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"username":"022FBdNYZkJJKyIm","name":"78RY5o9fvLEnROV7","email":"UA8APuTUrJfKrSc6","password":"PiXjlWw8jI5u5PRC","confirm_password":"H1vLMkBjxQbVbR2U","roles":"u3a3ZOHacPkVgxOZ","member_id":4}'

```

```javascript
const url = new URL("http://localhost/api/v1/users");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "username": "022FBdNYZkJJKyIm",
    "name": "78RY5o9fvLEnROV7",
    "email": "UA8APuTUrJfKrSc6",
    "password": "PiXjlWw8jI5u5PRC",
    "confirm_password": "H1vLMkBjxQbVbR2U",
    "roles": "u3a3ZOHacPkVgxOZ",
    "member_id": 4
}

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
{
    "data": "Error message ..."
}
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
curl -X GET -G "http://localhost/api/v1/users/{user}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/users/{user}");

let headers = {
    "Authorization": "Bearer {token}",
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
{
    "data": "Error message ..."
}
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
curl -X PUT "http://localhost/api/v1/users/{user}" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"name":"AVtTbabLH42KZsYH","email":"qHqIqr3rax6IfbOb","roles":"FB3jOSre2SoGkhQw","id":4}'

```

```javascript
const url = new URL("http://localhost/api/v1/users/{user}");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "AVtTbabLH42KZsYH",
    "email": "qHqIqr3rax6IfbOb",
    "roles": "FB3jOSre2SoGkhQw",
    "id": 4
}

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
{
    "data": "Error message ..."
}
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
curl -X DELETE "http://localhost/api/v1/users/{user}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/v1/users/{user}");

let headers = {
    "Authorization": "Bearer {token}",
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
{
    "data": "Error message ..."
}
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


