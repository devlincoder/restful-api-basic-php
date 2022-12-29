# restful-api-basic-php

<a href="https://www.positronx.io/create-simple-php-crud-rest-api-with-mysql-php-pdo/">Link tutorial</a>

# Create

<h1>Create with POSTMAN</h1>
<a href="https://www.youtube.com/watch?v=E5HABpEp0zc">Create with POSTMAN</a>
Using POSTMAN : http://localhost/restful-php/api/create.php (link)
Headers :  (KEY : Content-Transfer-Encoding) (VALUE : application/json)
Body =>raw : {
    "name": "John Doe New",
    "email": "johndoenew@gmail.com",
    "age": 32,
    "designation": "Data Engineer",
    "created": "2012-06-01 02:12:30"
}
Method : "POST"
=> <button>SEND</button>
<h1>Create with Fetch API using JS</h1>
            const jsonData = {
                name: "Kien Dep Trai",
                email: "kienphan2k3@gmail.com",
                age: 19,
                designation: "PHP basic",
                created: "2012-06-01 02:12:30"
            }
            var options = {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(jsonData)
            }

            fetch('http://localhost/restful-php/api/create.php',options)
                .then((response) => response.json())
                .then((data) => console.log(data));
            console.log(JSON.stringify(jsonData));

<a href="https://www.youtube.com/watch?v=TRjVXmk8q8I&t=1220s">Create with Fetch API in JS</a>
<a href="https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API/Using_Fetch">DOC</a>
