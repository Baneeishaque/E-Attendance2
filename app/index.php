<?php
//<!--This file works as controller, contains no view codes-->
require_once 'config.php';
session_start();  //to handle user login
$client = true;

// requiring the class files
require("models/user.php");
require("models/student.php");
require("models/complaint.php");

$action = isset( $_GET['action'] ) ? $_GET['action'] : "";
$user = isset( $_SESSION['student'] ) ? $_SESSION['student'] : "";
//if session not started and action is not login, then show login form
if ( $action != "login" && !$user ) {
    login();
    exit;
}

switch ( $action ) {
    //user login to cPanel
    case 'login':
        login();
        break;
    //user logout from cPanel
    case 'logout':
        logout();
        break;
    default:
        dashboard();    //if no actions exist in and session 'user' exist, show student Dashboard
}

// Functions

/**
 * Show the student Dashboard
 */
function dashboard() {
    $results['student'] = Student::getByAdNo( $_SESSION['student'] );
    $data = Complaint::getByAdNo((int)$_SESSION['student']);    //call getByAdNo function
    $results['complaints'] = $data['results'];    //store complaints data
    $results['totalRows'] = $data['totalRows']; //store total rows data
    //show dashboard
    require( "templates/dashboard.php" );
}

/**
 * Checks weather user data matches with username and password
 */
function login() {
    $user = isset( $_SESSION['student'] ) ? $_SESSION['student'] : "";
    if ( $user ) {
        dashboard();
        exit;
    }
    $results = array(); //to store error messages
    //if student submitted login form process login data
    if ( isset( $_POST['login'] ) ) {
        $results['student'] = Student::login( $_POST['admission_no'], $_POST['dob'] );

        if ( isset($results['student'])) {
//            // Login successful: Create a session and show dashboard
            $data = Complaint::getByAdNo((int)$_POST['admission_no']);    //call getByAdNo function
            $results['complaints'] = $data['results'];    //store complaints data
            $results['totalRows'] = $data['totalRows']; //store total rows data

            $_SESSION['student'] = $_POST['admission_no'];
            $_SESSION['name'] = $results['student']->name;
            require("templates/dashboard.php" );
        } else {
            // Login failed: display an error message to the user and redirect to login page
            $results['errorMessage'] = "Incorrect Admission No or Date of Birth. Try again.";
            header("Location:templates/login.php?msg=".$results['errorMessage']);
        }
    } else {
        // User has not posted the login form yet: display the login form
        header("Location:templates/login.php");
    }
}

/**
 *Logout Function
 */
function logout() {

    //clear student session and redirect to login page
    unset( $_SESSION['student'] );
    unset( $_SESSION['name'] );
    header("Location:templates/login.php");
}
