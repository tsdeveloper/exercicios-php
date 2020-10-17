<?php

    require_once __DIR__."/source/Pessoa.php";

    $user = new Pessoa();
    $user->name = "Santos";


    $user->registerName();
    echo" {$user->getName()}</BR>";

    $user->setName("Gabriel");
    $user->registerName();
    echo" {$user->getName()}";

