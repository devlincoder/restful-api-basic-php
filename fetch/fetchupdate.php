<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Update</title>
</head>

<body>
    <script>
        function updateApi() {
            const jsonData = {
                id:1,
                name: "KienChange",
                email: "kienphanchange@gmail.com",
                age: 19,
                designation: "PHP Changed",
                created: "2012-06-01 02:12:30"
            }
            var options = {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(jsonData)
            }

            fetch('http://localhost/restful-php/api/update.php',options)
                .then((response) => response.json())
                .then((data) => console.log(data));
        }

        updateApi();
    </script>
    <h1>Fetch API Update</h1>
</body>

</html>