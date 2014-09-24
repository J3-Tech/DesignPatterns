<?php

namespace CommManager;

class Client
{
    public function __construct()
    {
        $commManager=new CommManager();
        $commManager->createBloggAppointment();
    }
}
