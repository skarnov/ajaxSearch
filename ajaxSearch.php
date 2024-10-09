<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ajax Search</title>
    </head>

    <body>
        <input type="text" id="searchString" onkeyup="ajaxSearch()" placeholder="Type Anything"/>
        <div id="result"></div>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script>
            function ajaxSearch() {
                var searchString = $('#searchString').val();
                $.ajax({
                    type: "POST",
                    url: "process.php",
                    data: {
                        searchString: searchString
                    },
                    cache: false,
                    success: function (data) {
                        $("#result").html(data);
                    },
                    error: function () {}
                });
            }
        </script>
    </body>
</html>