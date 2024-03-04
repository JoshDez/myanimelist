<html>
    <head>
        <?php
        include("config.php");
        include("firebaseRDB.php");
        $db = new firebaseRDB($databaseURL);?>

        <title>Your Anime List</title>
        <style>
            /* CSS */
            body{
                background-color: #20242E;
            }
            .main-content {
                background-image: url('animebg.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                padding: 50;
            }

            .td-modified {
                text-align: center;
                color: white;
                padding: 8;
                
            }

            .title {
                text-align: center;
                color: white;
                padding: 5;
            }

            table {
                background-color: #20242EBC;
                padding: 5;
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
                padding: 6px 16px;
                position: relative;
                text-align: center;
            }
            .red-button {
                appearance: none;
                background-color: #9D163F;
                box-sizing: border-box;
                color: #fff;
                cursor: pointer;
                display: inline-block;
                font-family: -apple-system,system-ui,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji";
                font-size: 15px;
                font-weight: 600;
                line-height: 20px;
                padding: 6px 16px;
                position: relative;
                text-align: center;
            }
        </style>

    </head>
    <body>
        <center>
        <div class = "title">
        <h1>YOUR ANIME LIST</h1>
        </div>

        <div class = "main-content">
        <table border="1">
        <?php
            session_start();
            if(isset($_SESSION['status']))
            {
                echo "<tr><td class = 'td-modified'><h5>" .$_SESSION['status'].  "</h5></td></tr>";
                unset($_SESSION['status']);
            }
        ?>
        <tr>
            <td class = "td-modified"><a href="add.php"><button class="green-button" role="button">ADD NEW ANIME</button></a></td>
        </tr>
        <?php
            $data = $db->retrieve("anime");
            $data = json_decode($data,1);
            if(is_array($data)){
                foreach($data as $id => $anime){
                    echo "<tr><td>
                            <table width='700'>
                                <tr><td class = 'td-modified'><img src='{$anime['imageurl']}' width = '300' height = '500'></td></tr>
                                <tr><td class = 'td-modified'><h2>{$anime['name']}</td></h2></tr>
                                <tr><td class = 'td-modified'><h4>{$anime['genre']}</h4></td></tr>
                                <tr><td class = 'td-modified'>{$anime['description']}</td></tr>
                                <tr><td class = 'td-modified'><a href = 'edit.php?id=$id'><button class='green-button' role='button'>EDIT</button></a></td></tr>
                                <tr><td class = 'td-modified'><a href = 'delete.php?id=$id'><button class='red-button' role='button'>DELETE</button></a></td></tr>
                            </table>
                          </td></tr>";
                }
            }
        ?>
        </table>
        </div>
        </center>
    </body>
</html>


