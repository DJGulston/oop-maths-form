<?php

abstract class UniversityStudent {
    
    // Protected class attributes for UniversityStudent that will be inherited by the
    // MathematicsStudent class.
    protected $surname;
    protected $first_name;
    protected $student_number;
    protected $degree_major;
    
    // Constructor for UniversityStudent class.
    public function __construct($surname, $first_name, $student_number, $degree_major) {
        $this->surname = $surname;
        $this->first_name = $first_name;
        $this->student_number = $student_number;
        $this->degree_major = $degree_major;
    }
    
    // Getter method for surname.
    public function get_surname() {
        return $this->surname;
    }
    
    // Getter method for first name.
    public function get_first_name() {
        return $this->first_name;
    }
    
    // Getter method for student number.
    public function get_student_number() {
        return $this->student_number;
    }
    
    // Getter method for degree major.
    public function get_degree_major() {
        return $this->degree_major;
    }
    
    // Abstract method for getting the average grade.
    public abstract function get_avg_grade();
}

class MathematicsStudent extends UniversityStudent {
    
    // Private class attributes for MathematicsStudent exclusive to this class.
    private $avg_grade;
    private $fav_number;
    
    // Constructor for MathematicsStudent class.
    public function __construct($surname, $first_name, $student_number, $avg_grade, $fav_number) {
        parent::__construct($surname, $first_name, $student_number, 'Mathematics');
        $this->avg_grade = $avg_grade;
        $this->fav_number = $fav_number;
    }
    
    // Getter method for average grade.
    // Also the implemented abstract method from the UniversityStudent class.
    public function get_avg_grade() {
        return $this->avg_grade;
    }
    
    // Setter method for average grade.
    public function set_avg_grade($avg_grade) {
        $this->avg_grade = $avg_grade;
    }
    
    // Getter method for favourite number.
    public function get_fav_number() {
        return $this->fav_number;
    }
    
    // Setter method for favourite number.
    public function set_fav_number($fav_number) {
        $this->fav_number = $fav_number;
    }
}