<?php

function validate_email($input) {
    if (filter_var($input, FILTER_VALIDATE_EMAIL)) {
        return true;
    }else{
        return false;
    }
}

function validateInteger($input){
    if(is_numeric($input)){
        return true;
    }else{
        return false;
    }
}

function validate_alphNumeric($input) {
    if (filter_var($input, FILTER_VALIDATE_REGEXP, '^[a-zA-Z0-9]+$')) {
        return true;
    }else{
        return false;
    }
}

function validate_alphbetic($input) {
    if (filter_var($input, FILTER_VALIDATE_REGEXP, '^[a-zA-Z]+$')) {
        return true;
    }else{
        return false;
    }
}

function validate_url($input) {
    if (filter_var($input, FILTER_VALIDATE_URL)) {
        return true;
    }else{
        return false;
    }
}

function validate_IP_address($input) {
    if (filter_var($input, FILTER_VALIDATE_IP)) {
        return true;
    }else{
        return false;
    }
}

/**
 * 
 * @param type $input
 * @return boolean
 * uses MM/DD/YYYY
 * only lasts from 1900 to 2099
 */
function validate_date_MMDDYYYY($input) {
    if (filter_var($input, FILTER_VALIDATE_REGEXP, '/^((0?[1-9]|1[012])[- /.](0?[1-9]|[12][0-9]|3[01])[- /.](19|20)?[0-9]{2})*$/')) {
        return true;
    }else{
        return false;
    }
}
/**
 * 
 * @param type $input
 * @param type $range
 * @return boolean
 * used to check if an int is between a certain range eg.. 1 and 3. range is an array that requieres two attributes 'min' and 'max'
 */
function validate_integer_over_range($input, $range){
    $options = array(
    'options' => array(
                      'min_range' => $range['min'],
                      'max_range' => $range['max'],
                      )
        );
    $options['options']['default'] = 1;
    if (filter_var($input, FILTER_VALIDATE_INT, $range) !== FALSE) {
        return true;
    }else{
        return false;
    }
}
/**
 * 
 * @param type $input
 * @return boolean
 * test for a strong password with this regex. The password must contain one lowercase letter, one uppercase letter, one number, and be at least 6 characters long.
 */
function validate_password_strength($input) {
    if (filter_var($input, FILTER_VALIDATE_REGEXP, "(?=^.{6,}$)((?=.*[A-Za-z0-9])(?=.*[A-Z])(?=.*[a-z]))^.*")) {
        return true;
    }else{
        return false;
    }
}

function cleanEmail($str){
   if (isset($str)) {
        return preg_replace("[^a-zA-Z0-9\.\-@]", '', $str);
    } else {
        return "";
    }
}

function cleanText($str) {
    if (isset($str)) {
        return preg_replace("[^a-zA-Z0-9 ]", '', $str);
    } else {
        return "";
    }
}

function toAscii($str, $replace=array(), $delimiter='-') {
 if(isset($str)){
 if( !empty($replace) ) {
  $str = str_replace((array)$replace, ' ', $str);
 }

 $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
 $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
 $clean = strtolower(trim($clean, '-'));
 $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);

 return $clean;
 }
 else{
     return "";
 }
}

function clean($str){
    
//    $str = mysql_real_escape_string($str);
    $str = cleanText($str);
    
    return $str;
}
?>
