<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</head>

<body>
    <button id="btnBack"> back </button>
    <div id="main">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th> Details </th>
                </tr>
            </thead>
            <tbody id="tblPosts">
            </tbody>
        </table>
    </div>

    <div id="detail">
        sssssss

    </div>

    <div id="detail">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>UserID</th>
                </tr>
            </thead>
            <tbody id="tblDetails">
            </tbody>
        </table>
    </div>

</body>

<script>
   
    function loadPosts() {
        $("#main").show();
        $("#details").hide();
        //
        var url = "https://jsonplaceholder.typicode.com/posts";
        $.getJSON(url)
            .done((data) => {
                    console.log(item1);
                    var line = "<tr>";
                    line += "<td>" + item.id + "</td>";
                    line += "<td><b>" + item.title + "</b><br/>";
                    line += item.body + "</td>";
                    line += "<td> <button onClick='showDetails(" + item.id + ");' > link </button> </td>";
                    line += "</tr>";
                    $("#tblPosts").append(line);
                
            })
            .fail((xhr, status, error) => {

            })


    }

    function LoadPosts() {
        var url = "https://jsonplaceholder.typicode.com/posts"

        $.getJSON(url)
            .done((data) => {
                $.each(data, (k, item) => {
                    //
                    var line = "<tr>";
                    line += "<td>" + item.id + "</td>"
                    line += "<td><b>" + item.title + "</b><br/>"
                    line += item.body + "</td>"
                    line += "<td><button onClick='showDetails(" + item.id + ");'>Link</button></td>"
                    line += "</tr>";
                    $("#tblPost").append(line);
                });
                $("#main").show();
            })
            .fail((xhr, err, status) => {

            })
    }

    $(()=>{

        loadPosts();
        $("#detail").hide();
        $("#btnBack").click(()=>{
                $("#main").show();
                $("#detail").hide();
                $("#detailROW").remove()

        });
    })

</script>


</html>
