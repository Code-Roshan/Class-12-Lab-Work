<!-- 15.Write a PHP program to insert records in a database named student having table student with fields id, name and grade. -->
<?php
$conn=mysqli_connect('localhost','root','','student');
if(!$conn){
    echo "connection not successful";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Enter Name: <input type="text" name="name" id="name"><br><br>
        Enter Grade: <input type="number" name="grade" id="grade"><br><br>
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $grade=$_POST['grade'];
        $res="insert into std (name,grade) values('$name','$grade');";
        mysqli_query($conn,$res);
    }
    ?>
</body>
</html>