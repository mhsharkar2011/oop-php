<?php 
include "Person.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP Learning</title>
</head>
<body>
    <?php 
    // $obj = new Person();
    // echo $obj->setName("Hossain ");
    // echo $obj->setAge("33 ");
    // echo $obj->getName();
    // echo "<br>";
    // echo $obj->name;
    // echo "<br>";
    // unset($obj);
    // echo "<br>";

    // $objAge = new Person();
    // echo $objAge->setAge("33 ");
    // echo $objAge->getAge();
    // echo "<br>";
    // unset($objAge);

    echo Person::setSex("Female ","Red");
    echo "<br>";
    $obj = new Person();
    // $obj->setSex1("Other");
    echo "<br>";
    echo $obj->getSex();
    

    ?>
</body>
</html>