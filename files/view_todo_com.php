<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
</head>
<body>
    <?php
	$conn=mysqli_connect("localhost","2ill","cuby1103","list");
        if(!$conn){
            echo 'db에 연결하지 못했습니다'.mysqli_connect_error();
	}

	$num = $_GET['num'];
	$sql = "SELECT * FROM achieve WHERE num = $num";
       	$result = mysqli_query($conn,$sql);

	$row = mysqli_fetch_array($result);
	echo "<h1>{$row['title']}</h1>";
	echo "<p style='color:grey'>create-date : {$row['create_date']}";
	echo "&nbsp &nbsp  complete-date : {$row['complete_date']}</p>";

	echo "<hr>";
	echo "<p>{$row['description']}</p>";

	mysqli_close($conn);
    ?>

    <br>
    <a href="modify_todo.php?num=<?= $row['num'] ?>">MODIFY</a>   
    <a href="delete_todo.php?num=<?= $row['num'] ?>">DELETE</a> <br><br>  
    <a href="todo.php">BACK TO LIST</a>   

</body>
</html>
