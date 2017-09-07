<?php
/**
 * Created by PhpStorm.
 * User: Chandu Dissanayake
 * ID  : A00853877
 * Date: 2017-09-07
 * Time: 12:48 PM
 * Student class
 */

class Student
{
    //Main constructor
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    //Add an email to email array
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    //Add a grade to grade array
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    //Averages the grades in the array
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }

    //Displays the student name, average, and emails
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}