<style>
    /* Styling for the error list items. */
    .error {
        color:red;
    }
</style>

<?php

// Imports the contents of the student.php script.
require './student.php';

// Prints custom error messages as list items.
function print_error_message($message) {
    echo '<li class="error">' . $message . '</li>';
}

echo '<h1>Maths Form Details:</h1>';

// Opening tag for an unordered list.
echo '<ul>';

// All input variables retrieved from the post request.
$surname = $_POST['surname'];
$first_name = $_POST['first_name'];
$student_number = $_POST['student_number'];
$avg_grade = $_POST['avg_grade'];
$fav_number = $_POST['fav_number'];

// Student object created using the input from the post request.
$student = new MathematicsStudent($surname, $first_name, $student_number, $avg_grade, $fav_number);

// If surname has no value, print an error message, otherwise, print the surname
// as a list item.
if(!$student->get_surname()){
    print_error_message('<b>Surname:</b> No input given!');
}
else {
    echo '<li><b>Surname:</b> ' . $student->get_surname() . '</li>';
}

// If first name has no value, print an error message, otherwise, print the first name
// as a list item.
if(!$student->get_first_name()) {
    print_error_message('<b>First Name:</b> No input given!');
}
else {
    echo '<li><b>First Name:</b> ' . $student->get_first_name() . '</li>';;
}

// If student number has no value, print an error message, otherwise, print the student number
// as a list item.
if(!$student->get_student_number()) {
    print_error_message('<b>Student Number:</b> No input given!');
}
else {
    echo '<li><b>Student Number:</b> ' . $student->get_student_number() . '</li>';
}

// Prints the degree major value assigned in the MathematicsStudent class constructor.
echo '<li><b>Degree Major:</b> ' . $student->get_degree_major() . '</li>';

// If average grade has no value, print an error message, otherwise, print the average grade
// as a list item.
if(!$student->get_avg_grade()){
    print_error_message('<b>Average Grade:</b> No input given!');
}
else {
    echo '<li><b>Average Grade:</b> ' . $student->get_avg_grade() . '%</li>';
}

// If favourite number has no value, print an error message, otherwise, print the favourite number
// as a list item.
if(!$student->get_fav_number()){
    print_error_message('<b>Favourite Number:</b> No input given!');
}
else {
    echo '<li><b>Favourite Number:</b> ' . $student->get_fav_number() . '</li>';
}

// Closing tag for an unordered list.
echo '</ul>';

?>