<html>
    <head><title>Faculty Home</title>
<script>
    function validate()
             {
            var x = document.getElementById('t1').value;
            if (x.length<7 || x.length>7) 
            {
                alert("Check code  length!");
                return true;
            }
            }
        </script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <style>
            body
            {
                background-color:lightgrey;
            }
        </style>
</head>
    <body>
            <b><center><h1><p class="text-success">Welcome!</p></h1></center></b><br>
                <center><?php
                echo "Date: " . date("d/m/Y"); echo"||";
                echo "Time: " . date("h:i:sa");
                ?>
                <form method="post" action="info1.php" onsubmit="return validate();">
                    <br><br>
                <input type="text" name="rn" placeholder="Enter the subject code" name="sc" id="t1" required></center>
                <br><br>
                <center><input type="submit" class="btn btn-info" value="Get"></center><br>
    </body>
</html>