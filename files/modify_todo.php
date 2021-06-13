<?php
    $conn=mysqli_connect("localhost","2ill","cuby1103","list");
    if(!$conn){
        echo 'db에 연결하지 못 했습니다'.mysqli_connect_error();
    }

    $num = $_GET['num'];
    $sql = "SELECT * FROM achieve WHERE num = $num";
    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_array($result)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>write</title>
</head>
<body>
    <h1>ADD NEW</h1>
    <form action = "insert_update_todo.php" method="POST">
	<input type="hidden" name="num" value="<?=$num?>">
	<p>
	    <label for="title">Title: </label>
	    <input type="text" id="title" name="title" value="<?=$row['title']?>">
	</p>
	<p>
	    <label for="descriptioin">Description: </label>
	    <textarea name="description" id="description" cols="120" rows="20"><?=$row['description']?></textarea>
	</p>
	<input type="submit" value="modify">
    </form>
    <br>
    <a href = "todo.php">cancel</a>

    <?php
        mysqli_close($conn);
    ?>
</body>
</html>
