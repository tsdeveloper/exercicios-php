<?php

    require_once __DIR__."/source/Pessoa.php";

    $user = new Pessoa();
    $user->name = "Yuri";


    $user->registerName();
    echo" $user->name";

