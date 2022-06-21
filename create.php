<?php
    include "config.php";

    if(isset($_POST['submit']))
    {
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";
   
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];

        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre><br>";

        $sql = "INSERT INTO users (firstname, lastname, email, password, gender) 
                VALUES ($firstName,$lastName,$email,$password,$gender)";
        
        // echo "<pre>";
        // var_dump($sql);
        // echo "</pre><br>";

        $result = $conn->query($sql);
        if($result == TRUE)
        {
            echo "New database recording is successfull.";
        }
        else
        {
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
        $conn->close();
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

