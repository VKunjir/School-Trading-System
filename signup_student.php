<?php
    $insert = false ;
    if($_POST['name'])
    {

        $server = "localhost";
        $username = "root" ;
        $password = "" ;

        $con = mysqli_connect($server, $username, $password);

        if(!$con){
            die("connection to this database failed due to ". mysqli_connect_error());
        }


        $name = $_POST['name'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $cc = $_POST['cc'];
        $pincode = $_POST['pincode'];
        $age = $_POST['age'];
        $phone_number = $_POST['phone_number'];
        $gender = $_POST['gender'];
        $DOB = $_POST['DOB'];
        $ubp = $_POST['ubp'];
        $email = $_POST['email'];
        $ID = $_POST['ID'];
        $adhar_card = $_POST['adhar_card'];
        $ID1 = $_POST['ID1'];
        $cd = $_POST['cd'];
        $institute_name = $_POST['institute_name'];
        $id_number = $_POST['id_number'];
        $address2 = $_POST['address2'];
        $cc1 = $_POST['cc1'];
        $pincode2 = $_POST['pincode2'];



        $sql = "INSERT INTO `bank`.`studentdata` (`srno`, `name`, `mname`, `lname`, `address`, `cc`, `pincode`, `age`, `phone_number`, `gender`, `DOB`, `ubp`, `email`, `ID`, `adhar_card`, `ID1`, `cd`, `institute_name`, `id_number`, `address2`, `cc1`, `pincode2`, `Time`) VALUES ('$name', '$mname', '$lname', '$address', '$cc', '$pincode', '$age', '$phone_number', '$gender', '$DOB', '$ubpm', '$email', '$ID', '$adhar_card', '$ID1', '$cd', '$institute_name', '$id_number', '$address2', '$cc1', ' $pincode2', current_timestamp());";




        if($con->query($sql) == true){
            //echo "Successfully inserted ";
            $insert = true ;
        }
        else
        {
            echo "ERROR: $sql <br> $con->error";
        }
    
        $con->close();
    }
?>








<!-- 
    Aim: Design the contact form using css and html 
    step 1: visualise the design of the form.
   step 2: list all element which you are going to add in form. 
          1. heading 
          2.personal details-----user name,user address, user mobile number 
                                ,user id,user DOB,user adhar number. 
          3.submit button 
    step 3: list all tags that going to be used 
        1] image tag 
        2]head 
        3]title tag 
        4]h1 tag
        5]input tag 
        6]address tag 
-->
<!DOCTYPE html>
<html>

<head>
    <title>apni bank signup apna_bank_signup_page</title>
    <link rel="stylesheet" href="signup_student.css">

</head>

<body>
    <div class="container">
        <form action="signup_student.php" class="main_masala">
            <h1>Signup form of apni bank</h1>
            <br>
            <br>
            <!--now getting the input from user-->
            <!--now using p and input tag to get user personal data-->
            <fieldset>
                <legend>Student's personal details</legend>
                <p class="un">
                    <input type="text" name="name" placeholder="student's first name">

                    <input type="text" name="mname" placeholder="student's middle name">

                    <input type="text" name="lname" placeholder="student's last name">
                </p>
                <p>
                    <textarea name="address" cols="100" rows="4" placeholder="student's residential address" required></textarea>
                </p>

                <p>
                    <input type="text" placeholder="student current city" id="cc" name="cc">
                </p>

                <p>
                    <input type="text" name="pincode" placeholder="pincode of current city" required></input>
                </p>
                <p>
                    <b>student's age: </b> <input type="number" class="age" name="age" placeholder="enter your age">
                </p>
                <p>
                    <input type="text" name="phone_number" id="pn" placeholder="phone number of student" required>
                </p>
                <hr>
                <br>
                <p> <b> Gender</b>
                    <br> <br>
                    Male:<input type="radio" name="gender" id="1">
                    Female:<input type="radio" name="gender" id="2">
                    other:<input type="radio" name="gender" id="3">
                </p>
                <br>
                <hr>
                <p>
                <p><b>date of birth</b></p>
                <input type="datetime-local" name="DOB" id="DOB" placeholder="student's date of birth" required></input>
                </p>

                <p>
                    <input type="text" name="ubp" id="ubp1" placeholder="birthplace">
                </p>
                <p>
                    <input type="email" name="email" id="email" placeholder="Srudent's mail id" required>
                </p>


                <p>
                    <b> ID type</b><select name="ID" id="ID" required>
                        <option value="select your id">_select your id_</option>
                        <option value="VISA">VISA</option>
                        <option value="adhar card">adhar card</option>
                        <option value="PAN CARD">PAN CARD</option>
                    </select>
                </p>
                <p><input type="text" name="adhar_card" id="dob" placeholder="goverment id number" required></input>
                </p>
            </fieldset>
            <!-- personal details is finished -->
            <br>
            <br>

            <!-- Educational details -->
            <fieldset>
                <legend>Educational information</legend>
                <p>
                    <select name="ID1" id="ID1">
                        <option value="select your coaching institute">_Studying at_</option>
                        <option value="School">school</option>
                        <option value="College">College</option>
                        <option value="medical institute">medical institute</option>
                        <option value="engineering college">engineering college</option>
                        <option value="diploma college">diploma college</option>
                        <option value="other">other</option>

                </p>
                <br>
                <p>
                    <b>current class</b> <input type="text" class="cd" name="cd" placeholder="student's current education status">
                </p>
                <p>
                    <input type="text" name="institute_name" placeholder="student's school or college name" required>
                </p>
                <p>
                    <input type="text" name="id_number" placeholder="student's school or college current id number"
                        required></input>
                </p>
                <p>
                    <textarea name="address2" cols="100" rows="4" placeholder="institute address" required></textarea>
                </p>

                <p>
                    <input type="text" placeholder="city of institute" id="cc" name="cc1">
                </p>


                <p>
                    <input type="text" name="pincode2" placeholder="institute pincode" required></input>
                </p>

                <!--user konsa id use karta hai?-->

            </fieldset>

            <br>

            <h3 class="response">For filling information about your account please click on button below</h3>
            <p>
                <input type="submit" value="next" href="index.html">
            </p>
        </form>

</body>
</div>

</html>

