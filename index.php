<?php
// library
class Job {
    public function task(Logger $logger) {
       for ($i = 0; $i < 10; $i++) {
        // we do some tasks
         $logger->log("Task $i completed!");
       }
    }
}
 
class ConsoleLogger implements Logger {
    public function log($message) {
    echo $message . "\n";
    }
}
 
 
 
class NothingLogger implements Logger {
    public function log($message) {
   
    }
    }
 
interface Logger {
    public function log($message);
}
 
class FileLogger implements Logger {
    public function log($message) {
    $file = fopen("log.txt", "a");
    fwrite($file, "$message\n");
    fclose($file);
    }
}
// user code
$job = new Job();
$logger = new FileLogger();
$job->task($logger);