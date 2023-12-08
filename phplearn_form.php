<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Write Back Form</h1>
    <form action="#" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Submit">
    </form>


    <?php
    $connection = mysqli_connect('localhost', 'root', '', 'mydata');
    if (isset($_POST['name'])) {
        $sql = "INSERT INTO `mydata` (`email`, `message`) VALUES ('" . $_POST['email'] . "', '" . $_POST['message'] . "')";
        $result = mysqli_query($connection, $sql);
        echo $_POST['name'];
        if ($result) {
            echo "lsgo";
        } else echo "damn";
    }
    


    ?>


</body>

</html>