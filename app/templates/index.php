<!--This file works as controller, contains no view codes-->
<?php
require_once 'config.php';
session_start();  //to handle user login

// requiring the class files
require("../models/user.php");
require("../models/gallery.php");
require("../models/testimonial.php");
require("../models/career.php");
require("../models/client.php");
require("../models/project.php");

$action = isset( $_GET['action'] ) ? $_GET['action'] : "";
$user = isset( $_SESSION['user'] ) ? $_SESSION['user'] : "";
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
    case 'changePassword':
        changePassword();
        break;
    case 'addGallery':
        addGallery();
        break;
    case 'listGallery':
        listGallery();
        break;
    case 'editGallery':
        editGallery();
        break;
    case 'deleteGallery':
        deleteGallery();
        break;
    case 'addTestimonial':
        addTestimonial();
        break;
    case 'listTestimonial':
        listTestimonial();
        break;
    case 'editTestimonial':
        editTestimonial();
        break;
    case 'deleteTestimonial':
        deleteTestimonial();
        break;
    case 'addCareer':
        addCareer();
        break;
    case 'listCareer':
        listCareer();
        break;
    case 'editCareer':
        editCareer();
        break;
    case 'deleteCareer':
        deleteCareer();
        break;
    case 'addClient':
        addClient();
        break;
    case 'listClient':
        listClient();
        break;
    case 'editClient':
        editClient();
        break;
    case 'deleteClient':
        deleteClient();
        break;
    case 'addProject':
        addProject();
        break;
    case 'listProject':
        listProject();
        break;
    case 'editProject':
        editProject();
        break;
    case 'deleteProject':
        deleteProject();
        break;
    default:
        dashboard();    //if no actions exist in and session 'user' exist, show cPanel Dashboard
}

// Functions

/**
 * Show the cPanel Home page with list a of menus to perform different actions
 */
function dashboard() {
    //show dashboard
    require( "templates/dashboard.php" );
}

/**
 * Checks weather user data matches with cPanel username and password
 */
function login() {
    $user = isset( $_SESSION['user'] ) ? $_SESSION['user'] : "";
    if ( $user ) {
        dashboard();
        exit;
    }
    $results = array(); //to store error messages
    //if user submitted login form process login data
    if ( isset( $_POST['login'] ) ) {
        $results['user'] = User::login( $_POST['username'], $_POST['password'] );

        if ( isset($results['user'])) {
//            // Login successful: Create a session and show dashboard
            $_SESSION['user'] = $_POST['username'];
            $_SESSION['alias'] = $results['user']->alias;
            $_SESSION['id'] =  $results['user']->id;
            require("templates/dashboard.php" );
        } else {
            // Login failed: display an error message to the user and redirect to login page
            $results['errorMessage'] = "Incorrect username or password. Try again.";
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

    //clear user session and redirect to login page
    unset( $_SESSION['user'] );
    unset( $_SESSION['alias'] );
    header("Location:templates/login.php");
}

/**
 * Function to change user Password
 */
function changePassword(){
    $results = array();
    $results['pageTitle'] = "Change Password";
    $results['formAction'] = "changePassword";
    if ( isset( $_POST['submit'] ) ) {
        $user=new User;
        $old=hash('md5',$_POST['oldPassword']);
        $res=$user->getById($_SESSION['id']);
        if($res->password==$old)
        {
            $newPass=$_POST['newPass'];
            $verifyPass=$_POST['verifyPass'];
            if($newPass==$verifyPass)
            {
                $_POST['id']=$_SESSION['id'];
                $_POST['username']=$_SESSION['user'];
                $_POST['password']=hash('md5',$newPass);
                $_POST['alias']=$_SESSION['alias'];
                $user->storeFormValues( $_POST ); // call the constructor with new gallery data
                $user->updatePassword();
                header( "Location:index.php?action=dashBoard&msg=passwordUpdated" );
            }else
            {
                header( "Location:index.php?action=changePassword&msg=mismatchPassword" );
            }

        }else
        {
            header( "Location:index.php?action=changePassword&msg=incorrectPassword" );
        }

    }else
    {
        //if addGallery form not submitted, show addGallery page
        $results['user'] = new User;    //creating new instance of Gallery class
        require( "templates/changePassword.php" );   //include editGallery template
    }
}




