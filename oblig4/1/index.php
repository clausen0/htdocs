<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Navn</h1>
    <form action="index.php" method="post">
        <input type="text" name="name"><br>
        <input type="submit" value="send inn">
    </form>
    <?php
    if (empty($_POST["name"])) return;
        $name = $_POST["name"];

    function Hello (){
        for($i = 0; $i < 5; $i++){
            echo $name;
        }
        return;
    }
    ?>
</body>
</html>