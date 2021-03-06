<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>COMP4711 Lab #1 - Development Environment</title>
  </head>
  <body>
    <?php
    include('Student.php');

    $students = array();

    $first = new Student();
    $first->surname = "Doe";
    $first->first_name = "John";
    $first->add_email('home', 'john@doe.com');
    $first->add_email('work', 'jdoe@mcdonalds.com');
    $first->add_grade(65);
    $first->add_grade(75);
    $first->add_grade(55);
    $students['j123'] = $first;

    $second = new Student();
    $second->surname = "Einstein";
    $second->first_name = "Albert";
    $second->add_email('home','albert@braniacs.com');
    $second->add_email('work1','a_einstein@bcit.ca');
    $second->add_email('work2','albert@physics.mit.edu');
    $second->add_grade(95);
    $second->add_grade(80);
    $second->add_grade(50);
    $students['a456'] = $second;

    $third = new Student();
    $third->surname = "Brotonel";
    $third->first_name = "Bryan";
    $third->add_email('home','bryanbrotonel@gmail.com');
    $third->add_email('work1','hello@bryanbrotonel.me');
    $third->add_grade(50);
    $third->add_grade(20);
    $third->add_grade(35);
    $students['a072'] = $third;

    ksort($students); // one of the many sort functions

    foreach ($students as $student) {
        echo $student->toString();
    }
        ?>
  </body>
</html>
