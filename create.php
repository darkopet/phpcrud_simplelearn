<?php
    include "config.php";

    if(isset($_POST['submit']))
    {
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];

        $sql = "INSERT INTO 'users'('firstname','lastname','email','password','gender') 
                VALUES ('$firstName','$lastName','$email','$password','$gender')";

        $result = $connection->query($sql);

        if($result == TRUE)
        {
            echo "New database recording is successfull.";
        }
        else
        {
            echo "Error:" . $sql . "<br>" . $connection->error;
        }
        $connection->close();
    }
?>


<!DOCTYPE html>
    <html>  
        <body>
            <h1>Sing Up Form</h1>
            
            <form action="" method="POST">
                
                <fieldset>
                    <legend>Personal Information:</legend><br>
                    First Name: <br>
                    <input type="text" name="firstname"><br>
                    Last Name: <br>
                    <input type="text" name="lastname"><br>
                    Email: <br>
                    <input type="email" name="email"><br>
                    Password: <br>
                    <input type="password" name="password"><br><br>
                    Gender: <br>
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female
                    <br><br>
                    <input type="submit" name="submit" value="submit">
                </fieldset>

            </form>
        </body>
    </html>

