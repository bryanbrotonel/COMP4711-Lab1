<?php
/**
 * @author Bryan Brotonel
 */
class Student {

    function __construct() {
      $this->surname = '';
      $this->first_name = '';
      $this->emails = array();
      $this->grades = array();
    }

    function add_email($which, $address) {
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

    function toString() {
      $result = "";
      $result .= '<h1>' . $this->first_name . ' ' . $this->surname . '</h1>';
      $result .= "<span>Average: " . $this->average() . "%</span>\n";
      foreach($this->emails as $which=>$what)
        $result .= $which . ': '. $what. "\n";
      $result .= "\n";
      return '<pre>'.$result.'</pre>';
    }
}
