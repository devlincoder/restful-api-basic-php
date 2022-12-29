<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Delete</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Age</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Created</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody id="employees"></tbody>
        </table>
    </div>
    <script>
        function show(data) {
            let tab ="";
            for (let r of data.body) {
                tab += `<tr> 
                    <td>${r.id}</td>
                    <td>${r.name}</td>
                    <td>${r.email}</td>
                    <td>${r.age}</td> 
                    <td>${r.designation}</td>          
                    <td>${r.created}</td>          
                    <td>
                        <a href="fetchdelete.php?id=${r.id}" class="btn btn-danger">Delete</a>
                        <a href="fetchupdate.php" class="btn btn-primary">Update</a>
                    </td>          
                </tr>`;
            }
            // Setting innerHTML as tab variable
            document.getElementById("employees").innerHTML = tab;
        }

        function readApi() {
            fetch('http://localhost/restful-php/api/read.php')
                .then((response) => response.json())
                .then((data) => show(data))
        }

        readApi();
    </script>
</body>

</html>