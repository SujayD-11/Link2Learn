<?php
 include 'header.php';
 ?>
<html>
    <head><title>Application Form</title>
    <style>

.header {
        padding: 0px;  
        background: #091043;
        color: white;
        text-decoration: none;
        box-sizing: border-box;
        background-image: url('jobs.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }

body {
  text-align: center;
  font-family: tahoma;
  color: white;
}

input[type=textName], select {
  width: 40%;
  height: 30px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=textShort], select {
  width: 40%;
  height: 75px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=textLong], select {
  width: 40%;
  height: 100px;
  padding: 12px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

label{
    display: inline-block;
    clear: left;
    padding-left: 50px;
    width: 250px;
    text-align: right;
}

.submit{
  width: 50%;
  background-color: #4CAF50;
  color: white;
  font-family: Tahoma;
  padding: 14px 28px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
    background-color: #ddd;
}
.resume-submit{
  margin-left:180px;
}
</style>
</head>
<body style="background-color:rgb(17, 26, 48)"> 
<!-- <div class="header">
        <h1 style="font-family: Arial">STEP4CAREER - Application Form</h1>
    </div> -->
    <br><br>
    <h1 style="color: white;">Internship Application</h1>
    <br><br>
<form name="resume" method = "post">
    <label>Name:</label> <input type="textName" name="name" style="padding: 0px" required>
    <br><br>
    <label>E-mail:</label> <input type="textName" name="email" required>
    <br><br>
    <label>Work Experience:</label> <input type="textLong" name="we" required>
    <br><br>
    <label>Previous Positions of Responsibility:</label> <input type="textShort" name="por" required>
    <br><br>
    <label>Trainings/Courses:</label> <input type="textLong" name="tc" required>
    <br><br>
    <label>Academics/Personal Projects:</label> <input type="textLong" name="proj" required>
    <br><br>
    <label>Skills:</label> <input type="textShort" name="skills" required>
    <br><br>
    <label>Accomplishments:</label> <input type="textLong" name="accomp" required>
    <br><br>
    <div class="resume-submit">
      <button class="submit"><a href="resume-onsubmit.php" style="text-decoration:none;color:white;">Submit</a></button> 
    </div>
</form>
</body>
<html>

<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "step4career";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
  if(!$conn){
      die('Could not Connect MySql Server :' .mysqli_connect_error());;
    }

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $we=$_POST['we'];
    $por=$_POST['por'];
    $tc=$_POST['tc'];
    $proj=$_POST['proj'];
    $skills=$_POST['skills'];
    $accomp=$_POST['accomp'];
    $query = "insert into applicants (name, email, we, por, tc, proj, skills, accomp) values ('$name', '$email', '$we', '$por', '$tc', '$proj', '$skills', '$accomp')";
    if(mysqli_query($conn, $query)){
        echo "<h3>Your application has been submitted!</h3>";
    }
}
?>