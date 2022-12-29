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
        function singlereadApi() {
            fetch('http://localhost/restful-php/api/single_read.php?id=5')
                .then((response) => response.json())
                .then((data) => console.log(data));
        }

        singlereadApi();
    </script>
    <h1>Fetch API Single Read</h1>
</body>

</html>