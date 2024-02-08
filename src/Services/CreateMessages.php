<?php
namespace App\Services;
use Psr\Log\LoggerInterface;

class CreateMessages{
    public function __construct(private LoggerInterface $logger) {}
    function messageToLogger(string $message){
        return $this->logger->info($message);
    }
}
?>