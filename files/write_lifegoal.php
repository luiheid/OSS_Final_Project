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
    <form action = "insert_lifegoal.php" method="POST">
	<p>
	    <label for="title">Title: </label>
	    <input type="text" id="title" name="title"></input>
	</p>
	<p>
	    <label for="descriptioin">Description: </label>
	    <textarea name="description" id="description" cols="120" rows="20"></textarea>
	</p>
	<input type="submit" value="add">
    </form>
    <br>
    <a href = "lifegoal.php">cancel</a>
</body>
</html>
