<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display information</title>
</head>

<body style="background-image: url('img4.jpg');">
    
    <table border="2" style="width:100%">

    <tr style="height:100px">
        <th>Email Id</th>
        <th>Password</th>
    </tr>

    <?php

        include("connection.php");
        error_reporting(0);
        $query = "select * from people";
        $data = mysqli_query($conn,$query);
        $total = mysqli_num_rows($data);
    
        if($total!=0)
        {
            
            while($result = mysqli_fetch_assoc($data))
            {
                echo "
                <tr>
                <th>".$result['emailid']."</th>
                <th>".$result['password']."</th>
                </tr>
                ";
            }
        }
        else{
            echo "No records found";
        }
    ?>
    </table>
</body>
</html>
