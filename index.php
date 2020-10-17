<?php

    require_once __DIR__."/source/Pessoa.php";

    $user = new Pessoa();
    $user->name = "Yuri do Monte";




  echo "{$user->registerName()} {$user->name}</p>";