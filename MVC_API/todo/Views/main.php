<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <style>
        table {
            margin: 20px auto;
        }
    </style>
</head>

<body>

    <form method="post" id="form" onsubmit="additem()">
        <table>
            <tr>
                <td><label for="name">Name</label></td>
                <td><input type="text" name="name" id="name" required></td>
                <td><input type="submit" name="add" id="add"></td>
            </tr>
        </table>
    </form>

    <table border="1px" style="width: 20%;">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="tbltada">

        </tbody>
    </table>
</body>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>

    $().ready(function () {         // This function call when load file
        showdata()
    })

    function showdata() {               // SELECT to show data
        result = {}
        fetch("http://localhost/todo/showdata").then((res) => res.json()).then((result) => {

            console.log(result);

            let disp = ""
            result.data.forEach(element => {
                disp += `<tr><td>${element.id}</td>
                <td>${element.name}</td>
                <td align="center"><button onclick="updatedata(${element.id})">Update</button>
                <button onclick="deletedata(${element.id})">Delete</button></td></tr>`
            });
            $("#tbltada").html(disp);
        })
    }

    function additem() {               // INSERT to insert data
        // event.preventDefault();
        result = {}
        $.each($('form').serializeArray(), function () {
            result[this.name] = this.value;
        })
        console.log(result)
        fetch("http://localhost/todo/savedata", {
            headers: {
                'Accept': 'application/json',
                'content-type': 'application/json'
            }, method: "POST", body: JSON.stringify(result)
        }).then((res) => res.json()).then((result) => {
            console.log(result);
        })
    };

    function updatedata(id) {               // UPDATE to update data
        fetch(`http://localhost/todo/updatedata?id=${id}`,{
            headers: {
                'Accept': 'application/json',
                'content-type': 'application/json'
            }, method: "POST", body: JSON.stringify(result)
        }).then((res) => res.json()).then((result) => {
            console.log(result);
        })
        showdata()
    }

    function deletedata(id) {               // DELETE to delete data
        fetch(`http://localhost/todo/deletedata?id=${id}`,).then((res) => res.json()).then((result) => {
            console.log(result);
        })
        // console.log(id);
        showdata()
    }

</script>

</html>