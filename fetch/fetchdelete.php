<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Delete</title>
</head>

<body>
    <script>
        function deleteApi() {
            const jsonData = {
                id:2
            }
            var options = {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(jsonData)
            }

            fetch('http://localhost/restful-php/api/delete.php',options)
                .then((response) => response.json())
                .then((data) => console.log(data));
        }

        deleteApi();
    </script>
    <h1>Fetch API Delete</h1>
</body>

</html>