# restful-api-basic-php

[Website Tutorial (Only use Postman)](https://www.positronx.io/create-simple-php-crud-rest-api-with-mysql-php-pdo/)

- Học cách sử dụng POSTMAN : 
- Headers : (KEY : Content-Transfer-Encoding) (VALUE : application/json)
- Body => raw : câu lệnh JSON muốn gửi

- Cách Fetch API 
- const jsonData = {Object}
- `var options = {`
- `    method: 'POST',`
- `    headers: {`
- `        'Content-Type': 'application/json'`
- `    },`
- `    body: JSON.stringify(jsonData)`
- `}`

# Create

## Create with POSTMAN

- Using POSTMAN : http://localhost/restful-php/api/create.php (link)
- Headers : (KEY : Content-Transfer-Encoding) (VALUE : application/json)
- Body => raw :
  `{
    "name": "John Doe New",
    "email": "johndoenew@gmail.com",
    "age": 32,
    "designation": "Data Engineer",
    "created": "2012-06-01 02:12:30"
}`
- Method : "POST"
- Click SEND

## Create with Fetch API using JS

- `const jsonData = {
    name: "Kien Dep Trai",
    email: "kienphan2k3@gmail.com",
    age: 19,
    designation: "PHP basic",
     created: "2012-06-01 02:12:30"
}`
- `var options = {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify(jsonData)
}`

- `fetch('http://localhost/restful-php/api/create.php',options)
  .then((response) => response.json())
  .then((data) => console.log(data));`

- Create new api : http://localhost/restful-php/fetch/fetchcreate.php

# Read

## Read with POSTMAN

http://localhost/restful-php/api/create.php

## Read with Fetch
- `fetch('http://localhost/restful-php/api/read.php')
  .then((response) => response.json())
  .then((data) => console.log(data));`

# Update

## Update with POSTMAN

- Using POSTMAN : http://localhost/restful-php/api/update.php
  `{
    "id":1,
    "name": "John Change",
    "email": "johndoechange@gmail.com",
    "age": 32,
    "designation": "Data Change",
    "created": "2012-06-01 02:12:30"
}`
- Method : "PUT"
- Click SEND

## Update with Fetch API using JS

- `const jsonData = {
    name: "Kien Dep Trai",
    email: "kienphan2k3@gmail.com",
    age: 19,
    designation: "PHP basic",
     created: "2012-06-01 02:12:30"
}`
- `var options = {
    method: 'PUT',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify(jsonData)
}`

- `fetch('http://localhost/restful-php/api/create.php',options)
    .then((response) => response.json())
    .then((data) => console.log(data));`

- Update api : http://localhost/restful-php/fetch/fetchupdate.php

# Delete

## Delete with POSTMAN

- Using POSTMAN : http://localhost/restful-php/api/delete.php
- `{
    "id":1,
}`
- Method : "DELETE"
- Click SEND

## Delete with Fetch API using JS

-`const jsonData = {
    id:3
}` 
-`var options = {
    method: 'DELETE',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify(jsonData)
}`

-`fetch('http://localhost/restful-php/api/delete.php',options)
    .then((response) => response.json())
    .then((data) => console.log(data));`

- Delete api : http://localhost/restful-php/fetch/fetchdelete.php