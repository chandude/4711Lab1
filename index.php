<!--
    * User: Chandu Dissanayake
    * ID  : A00853877
    * Date: 2017-09-07
    * Time: 12:48 PM
-->
<!DOCTYPE html>
<html>
    <head>
         <meta charset="UTF-8">
          <title></title>
    </head>
    <body>
        <?php


            //Imports Student class
            include('Student.php');

            //Create Student array
            $students = array();

            //Initialize first student
            $first = new Student();
            $first->surname = "Doe";
            $first->first_name = "John";
            $first->add_email('home','john@doe.com');
            $first->add_email('work','jdoe@mcdonalds.com');
            $first->add_grade(65);
            $first->add_grade(75);
            $first->add_grade(55);
            $students['j123'] = $first;

            //Initializes second student
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

            //Initializes third student
            $third = new Student();
            $third->surname = "Dissanayake";
            $third->first_name = "Chandu";
            $third->add_email('home','chandu@esketit.com');
            $third->add_email('work1','chandude@bcit.ca');
            $third->add_grade(95);
            $third->add_grade(80);
            $third->add_grade(75);
            $students['b69'] = $third;

            //Sort and display students.
            ksort($students);
            foreach($students as $student)
                echo $student->toString();
        ?>
    </body>
</html>
