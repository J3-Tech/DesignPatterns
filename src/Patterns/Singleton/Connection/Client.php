<?php

namespace Connection;

class Client
{
    public function __construct()
    {
        Connection::getInstance();
        Connection::getInstance();
        Connection::getInstance();
    }
}
