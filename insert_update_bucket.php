<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
    $conn=mysqli_connect("localhost","2ill","cuby1103","list");
    if(!$conn){
	echo 'db에 연결하지 못 했습니다'.mysqli_connect_error();
    }
    else{
	echo 'db에 접속했습니다';
    }

    $num=$_POST['num'];
    $list_title=$_POST['title'];
    $list_description=$_POST['description'];

    $sql = "UPDATE achieve SET title = '$list_title', description = '$list_description' WHERE num = '$num'";
    $result = mysqli_query($conn,$sql);

    if($result==false){
	echo "저장하지 못했습니다";
	error_log(mysqli_error($conn));
    }
    else{
	echo("<script>location.replace('bucket.php');</script>");
    }

    mysqli_close($conn);

?>

</body>
</html>
    
    
