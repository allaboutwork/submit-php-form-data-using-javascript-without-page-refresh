<?php 
    if (isset($_POST["name"])) {
        
        $connect = new PDO("mysql:host=localhost; dbname=testing", "root", "");
        
        $data = array(
            ':name'         =>  $_POST["name"],
            ':email'        =>  $_POST["email"],
            ':website'      =>  $_POST["website"],
            ':comment'      =>  $_POST["comment"],
            ':gender'       =>  $_POST["gender"]
        );

        $query = " 
        INSERT INTO data_sample 
        (name, email, website, comment, gender) 
        VALUES (:name, :email, :website, :comment, :gender)
        ";

        $statement = $connect->prepare($query);

        $statement->execute($data);

        echo '<div class="alert alert-success">Data Saved</div>';
    }
    else{
        echo '<div class="alert alert-danger">No connection to database</div>';
    }

?>