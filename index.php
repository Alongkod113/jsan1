<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th> <th>Title</th> <th>Author</th>
            </tr>
        </thead>
        <tbody id="tblPosts">
        </tbody>
    </table>
</body>

<script>
    function loadePost(){
        var url ="https://jsonplaceholder.typicode.com/posts";
        $.getJSON(url)
        .done((data)=>{
            $.each(data,  (k, item)=>{
                console.log(k);
                console.log(item);
                var line = "<tr>";
                    line += "<td>" + (k+1) + "</td>";
                    line += "<td>" + item.fname + "</td>";
                    line += "<td>" + item.lname + "</td>";
                    line += "</tr>";
                $("#tblStudent").append(line);
            });
        })
        .fail((xhr, status, err)=>{
        });
}
$(()=>{
    loadJSON();
});
</script>
</html>
    }
</script>
</html>
