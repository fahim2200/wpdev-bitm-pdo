<html>
<head>
    <title>WP-DEV</title>
</head>
<body>
<center>

    <div>
        <h1>On The Job Training on: WordPress Development</h1>
        <div>

            <h2>Trainee's INFO Form</h2>
            <hr/>
            <form action=""  method="post">

                <label>Full Name :</label>
                <input type="text" name="name"  id="name" required="required" placeholder="Please Enter Name"/><br /><br />
                <label> Email :</label>
                <input type="email"  name="email"  required="required" placeholder="wpdev@gmail.com"/><br/><br />
                <label>Address :</label>
                <input type="text" name="address"  required="required" placeholder="Please Enter Your City"/><br/><br />
                <label>Mobile :</label>
                <input type="number" name="mobile"  required="required" placeholder="Please Enter Your City"/><br/><br />
                <label>University :</label>
                <input type="text" name="uni"  required="required" placeholder="Please Enter Your City"/><br/><br />
                <label>Date of Birth :</label>
                <input type="date" name="dob" id="name" required="required" placeholder="Please Enter Name"/><br /><br />

                <div>
                    <label>Gender :</label>
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female
                <input type="radio" name="gender" value="other"> Other
                </div>

                    <label>Image :</label>
                    <input type="file" name="img" id="image" required="required" placeholder="Please Enter Name"/><br /><br />
                    <input type="submit" value=" Submit " name="submit"/><br />
                </form>


    </div>
</center>
</body>
</html>
<?php
if(isset($_POST["submit"])){
    $hostname='localhost';
    $username='root';
    $password='';

    try {
        $dbh = new PDO("mysql:host=$hostname;dbname=wpdev",$username,$password);

        $sql = "INSERT INTO students (tr_name, tr_email, tr_address, tr_num, tr_uni, tr_dob, tr_gender, tr_img)
VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["address"]."','".$_POST["mobile"]."','".$_POST["uni"]."','".$_POST["dob"]."','".$_POST["gender"]."','".$_POST["img"]."')";
        if ($dbh->query($sql)) {
            echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
        }
        else{
            echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
        }

        $dbh = null;
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

}
?>

