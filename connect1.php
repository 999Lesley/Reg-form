<?php
       session_start();
       $con = mysql_connect("localhost","root","","registration 1");
       if (isset($_POST['Send application'])) {
           $Full name=$_POST['Full name'];
           $Roll No.=$_POST['Roll No'];
           $Sem=$_POST['Semester'];
           $Branch=$_POST['Branch'];
            $Upload Photo=$_POST['Upload Photo'];

           $query="INSERT INTO registration 1(Full name,Roll No,Semester,Branch,Upload Photo)VALUES('$Full name','$Roll No','$Semester',' $Branch','$Upload Photo')";
           $query_run = mysql_query($con,$query);
           if($query_run){
            $_SESSION['status']="Inserted Successfully";
            header("Location: registration form.html");
           }
           else{
            $_SESSION['status']="Inserted Successfully";
            header("Location: registration form.html");
           }

       }
?>