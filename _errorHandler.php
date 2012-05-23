<?php

function errorHandler( $errorLevel, $message, $sourceFile, $lineNumber ) {
  $logFile = getLogFile();
  $logInfo = "----------\n"
           . "Error level: $errorLevel\n"
           . "Message: $message\n"
           . "In file: $sourceFile\n"
           . "In line: $lineNumber\n"
           . "----------\n\n";
  $logFile -> flock( LOCK_EX );
  $logFile -> fwrite( $logInfo );
  $logFile -> flock( LOCK_UN );
  return false; //returns false, so PHP continues with it's internal error handling
}

function exceptionHandler( $exception ) {
  $logFile = getLogFile();
  $logInfo = "----------\n"
           . "Uncaught exception: {$exception -> getMessage()}\n"
           . "In file: {$exception -> getFile()}\n"
           . "In line: {$exception -> getLine()}\n"
           . "----------\n\n";
  $logFile -> flock( LOCK_EX );
  $logFile -> fwrite( $logInfo );
  $logFile -> flock( LOCK_UN );
}

function getLogFile() {
  if( !file_exists( '/tmp/rap-php.log' ) ) {
    $handle = fopen( '/tmp/rap-php.log', 'w' );
    fclose( $handle );
  }
  return new SplFileObject( '/tmp/rap-php.log', 'a' );
}

set_error_handler( 'errorHandler' );
set_exception_handler( 'exceptionHandler' );

?>