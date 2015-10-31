<?php
/**
 * This is a sample configuration file. Copy the content of this file into a file called config.php and save in the same directory(app/admin/config.php). This file contain configuration for 2 versions. Development and Production. Comment and uncomment the appropriate lines to match your environment. Then set dbname, DB_USERNAME, DB_PASSWORD variables that match your DB credentials.
 */

ini_set( "display_errors", true );  // for development version
//ini_set( "display_errors", false );  // for production version

date_default_timezone_set( "Asia/Calcutta" );  // http://www.php.net/manual/en/timezones.php

/* Local DB Credentials - uncomment following 3 lines if you are working on local, else comment*/
define( "DB_DSN", "mysql:host=localhost;dbname=e_attendance" );
define( "DB_USERNAME", "common" );
define( "DB_PASSWORD", "common" );

/* Remote DB Credentials - comment following 3 lines if you are working on local, else uncomment*/
//define( "DB_DSN", "mysql:host=localhost;dbname=e_attendance" );
//define( "DB_USERNAME", "common" );
//define( "DB_PASSWORD", "common" );

/**
 * Exception handler
 * @param $exception
 */
function handleException( $exception ) {
    echo "Sorry, a problem occurred. Please try later.";
    //echo $exception->getMessage();
    error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );
?>