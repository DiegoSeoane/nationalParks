<?php

namespace App\Controller;

use App\Services\CreateMessages;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MessageClass extends AbstractController{
    public function __construct(private CreateMessages $data) {        
    }
    #[Route('/message/{valueOfMessage}')]
    function sendMessage($valueOfMessage = null){
        $this->data->messageToLogger($valueOfMessage);
        return new Response('Message generated');
    }
}
?>