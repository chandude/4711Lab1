<?php
/**
 * Created by PhpStorm.
 * User: chand
 * Date: 2017-09-07
 * Time: 12:48 PM
 */

class Student
{
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
}