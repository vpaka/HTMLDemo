<?php
            include 'connection.php';
            $sql = "SELECT username, password FROM user WHERE username = '".$_POST["uname"]."' and password= '".$_POST["password"]."'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    header('location:details.php');

                }
            }
            else{
                header('location:index.php');
            }
?>