<?php 

    if (isset($POST["name"])) {
        
        $connect = new PDO("myql:host=localhost; dbname=testing", "root", "");

        $data = array(
            ':name'         =>  $_POST["name"],
            ':email'        =>  $_POST["email"],
            ':website'      =>  $_POST["website"],
            ':comment'      =>  $_POST["comment"],
            ':gender'       =>  $_POST["gender"]
        );

        $query = " INSERT INTO data_sample
                (name, email, webiste, comment, gender) 
                VALUES (:name, :email, :website, :comment, :gender)";

        $statement = $connect -> prepare($query);

        $statement -> execute($data);

        echo '<div class="alert alert-success">Data Saved</div>';
    }
?>