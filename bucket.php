<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bucket</title>
</head>
<body>
    <h1>BUCKET LIST</h1>
    <?php
	$conn=mysqli_connect("localhost","2ill","cuby1103","list");
        if(!$conn){
            echo 'db에 연결하지 못 했습니다'.mysqli_connect_error();
        }
	$sql = "SELECT * FROM achieve WHERE category='bucket'";
	$result = mysqli_query($conn,$sql);

	echo "UNCOMPLETED LIST";
	echo "<table width='800'><tr style='background-color:lightgrey'><th>TITLE</th><th width='160'>CREATE-DATE</th></tr>";

	while($row = mysqli_fetch_array($result)){
	    if($row['achieve']==0)
	        echo "<tr><td><a href=\"view_bucket.php?num={$row['num']}\">{$row["title"]}</a> </td><td> {$row["create_date"]} </td></tr>";
        }  
	echo "</table>";

	echo "<br><br><br>";
	echo "COMPLETED LIST";

	mysqli_close($conn);
	$conn=mysqli_connect("localhost","2ill","cuby1103","list");
	$sql = "SELECT * FROM achieve WHERE category='bucket'";
	$result = mysqli_query($conn,$sql);

	echo "<table width='960'><tr style='background-color:lightgrey'><th>TITLE</th><th width='160'>CREATE-DATE</th><th width='160'>COMPLETE-DATE</th></tr>";

	while($row = mysqli_fetch_array($result)){
	    if($row['achieve']==1)
                echo "<tr><td><a href=\"view_bucket_com.php?num={$row['num']}\">{$row["title"]}</a> </td><td> {$row["create_date"]} </td><td> {$row["complete_date"]} </td></tr>";
        }
        echo "</table>";

	mysqli_close($conn);
    ?>
    <br>
    <a href = "write_bucket.php">add new</a>
    <a href = "index.html">Home</a>
</body>
</html>
