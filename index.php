<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p style="text-align:right">
        <a href="index.php?menu=post">[Post]</a> 
        <a href="index.php?menu=friend">[Friend]</a> 
        <a href="index.php?menu=photo">[Photo]</a> 
        <a href="index.php?menu=group">[group]</a> 
    </p>
    <h1>NVC Social</h1>
    <hr>
    <!-- ส่วนที่จะเอาหน้าต่าง ๆ มา include -->
    <?php
        if(isset($_GET['menu']))
            $menu = $_GET['menu'];
        else $menu = "";
        $page = "";
        switch($menu){
            case "post":{
                $page = "post.php";
                break;
            }
            case "friend":{
                $page = "friend.php";
                break;
            }
            case "photo":{
                $page = "photo.php";
                break;
            }
            case "group":{
                $page = "group.php";
                break;
            }
            default: $page ="main.php";
        }
        include($page);
    ?>
</body>
</html>

<!-- การบ้าน หัดสร้าง template ด้วย bootstrap -->