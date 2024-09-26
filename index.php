<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Forms</h1>

    <?= "text form php"; ?>
    <?php echo "<h3>this is h3 from php<h3>"; ?>
    <?php
    $sometext = "some text";
    echo $sometext;
    ?>
    <a href="/about.php">About</a>
    <form action="" method="get">
        <label for="title">Title</label>
        <br>
        <input required type="text" id="title" name="title" placeholder="Enter text">
        <br>
        <br>    
        <label for="content">Content</label>
        <br>
        <textarea name="content" id="content"></textarea>
        <br>
        <input type="radio" name="vegetable" id="carrot" value="carrot">
        <label for="carrot">Carrot</label>
        <input type="radio" name="vegetable" id="lettuce" value="lettuce">
        <label for="lettuce">Lettuce</label>
        <br>
        <br>
        <select name="snack" id="snack">
            <option value="Chocolate">Chocolate</option>
            <option value="Lollipop">Lollipop</option>
            <option value="Icecream">Icecream</option>
            <option value="Crisps">Crisps</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Send">
    </form>

    <div data-color="red"></div>
</body>
</html>