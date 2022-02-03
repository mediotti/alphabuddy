<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page</title>
</head>
  
<body>
    <center>
        <?php
        $conn = mysqli_connect("localhost", "root", "F9audzmON58yf-r6", "staff");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $first_name =  $_REQUEST['firstName'];
        $last_name = $_REQUEST['lastName'];
        $phone_number =  $_REQUEST['phoneNumber'];
        $email = $_REQUEST['leadEmail'];
          
        // Performing insert query execution
        // here our table name is alphabuddy
            $sql = "INSERT INTO alphabuddy VALUES ('$first_name','$last_name','$phone_number','$email')";
          
                if(mysqli_query($conn, $sql)){
                    echo "<h3>data stored in a database successfully.";
                } else{
                    echo "ERROR: Hush! Sorry $sql. " 
                        . mysqli_error($conn);
                }
                
                // Close connection
                mysqli_close($conn);
            ?>
        </center>
    </body>
</html>