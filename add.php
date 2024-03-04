
<html>
    <head>
        <style>
            /* CSS */
            h1{
                color: white;
            }

            .main-content {
                background-image: url('animebg.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                padding: 50;
            }

            td {
                font-size: 20px;
                text-align: center;
                color: white;
                padding: 10;
            }

            table {
                background-color: #20242ED6;
                padding: 5;
                width: 600;
            }

            .large-tb {
                font-size: 20px;
                width: 400px;
                height: 120px;
            }

            .tb {
                font-size: 20px;
                width: 400px;
            }

            body {
                background-color: #20242E;
            }

            .green-button {
                appearance: none;
                background-color: #2ea44f;
                box-sizing: border-box;
                color: #fff;
                cursor: pointer;
                display: inline-block;
                font-family: -apple-system,system-ui,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji";
                font-size: 15px;
                font-weight: 600;
                line-height: 20px;
                padding: 6px 180px;
                position: relative;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <center>
        <h1>ADD NEW ANIME</h1>
        <form method="post" action="action_add.php" onsubmit="return validateForm()">
            
            <div class = "main-content">
            <table>
                <tr>
                    <td>Name</td>
                </tr>
                <tr>
                    <td><input type="text" name="name" class = "tb"></td>
                </tr>
                <tr>
                    <td>Genre</td>
                </tr>
                <tr>
                    <td><input type="text" name="genre" class = "tb"></td>
                </tr>
                <tr>
                    <td>Description</td>
                </tr>
                <tr>
                    <td><textarea name="description" class = "large-tb"></textarea></td>
                </tr>
                <tr>
                    <td>Picture</td>
                </tr>
                <tr>
                    <td><textarea name="picture" class = "large-tb"></textarea></td>
                </tr>
                <tr>
                    <td><input type="submit" value="SAVE" class = "green-button"></td>
                </tr>
            </table>
            </div>
        </form>
        </center>

        <script>
            function validateForm() {
                var name = document.forms[0]["name"].value;
                var description = document.forms[0]["description"].value;
                var genre = document.forms[0]["genre"].value;
                var picture = document.forms[0]["picture"].value;

                if (name === '') {
                    alert("Enter name of the anime");
                } else if (description === ''){
                    alert("Enter description of the anime");
                } else if (genre === ''){
                    alert("Enter genre of the anime");
                } else if (picture === ''){
                    alert("Enter image url of the anime");
                } else {
                    //allows submission if all of the fields are filled
                    return true;
                }
                    //deny submission if some or all fields are empty
                    return false;
                }
        </script>
    </body>
</html>