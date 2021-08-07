<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <header class="header">
        St pauls university
    </header>
    <form action="index.php" method="post">
        <div class="form">
            <input type="text" placeholder="first-name" name="fName">
            <input type="text" placeholder="middle-name" name="mName">
            <input type="text" placeholder="Last name" name="lName">
            <input type="text" placeholder="Date of birth" name="Dateofbirth">
            <input type="text" placeholder="mobile number" name="mNumber">
            <input type="text" placeholder="email" name="Email">
            <input type="text" placeholder="Id number" name="iNumber">
            <input type="text" placeholder="Course" name="course">
            <select name="gender" id="">
            <option name="gender" value="Male">Male</option>
            <option name="gender" value="Female">Female</option>
            </select>
            <input type="Submit" value="Send" id="submit">
        </div>
    </form>
    <?php  
    ?>
</body>

</html>