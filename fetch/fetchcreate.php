<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Create</title>
</head>

<body>
    <script>
        function createApi() {
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
        }

        createApi();
    </script>
    <h1>Fetch API Create</h1>
</body>

</html>