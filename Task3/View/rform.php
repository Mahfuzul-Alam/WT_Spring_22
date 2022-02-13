<html>
    <body>
        <h2>Registration Form</h2>
        <form action="" method="post" enctype= "multipart/form-data">
        
            First Name:
            <input type="text" name="fname"><br>
            Last Name:
            <input type="text" name="lname"><br>
            Age:
            <input type="number" name="age"><br>
            Designation:
            
            <input type="radio" name="myradio" value ="Junior Programmar">Junior Programmar
            <input type="radio" name="myradio" value= "Senior Programmar">Senior Programmar
            <input type="radio" name="myradio" value= "Project Lead">Project Lead <br> 
            Preferred Language:
           
            <input type="checkbox" name="mycheckbox" value="Java"> Java
            <input type="checkbox" name="mycheckbox" value="PHP"> PHP
            <input type="checkbox" name="mycheckbox" value=" C++"> C++ <br>
            Email:
            <input type="text" name="email"> <br>
            Password:
            <input type="password" name="pass"><br>
            Select Chose a file:
            <input type="file" name="fileToUpload" id="fileToUpload"><br>
            <input type="submit" name="Submit">
            <input type="Reset">
  

</form>
           
        </body>
</html>
<?php
include "../Control/results.php";
?>