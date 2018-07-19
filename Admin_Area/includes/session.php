<?php

session_start();
function error_Message(){
    if(isset($_SESSION['ErrorMessage'])){
        $output ="<div class=\"alert alert-danger \" >";
        $output .= htmlentities($_SESSION['ErrorMessage']);
        $_SESSION['ErrorMessage']=null;
        return $output;
    }


}
function success_Message(){
    if(isset($_SESSION['SuccessMessage'])){
        $output ="<div class=\"alert alert-success\" >";
        $output .= htmlentities($_SESSION['SuccessMessage']);
        $_SESSION['SuccessMessage']=null;
        return $output;
    }


}