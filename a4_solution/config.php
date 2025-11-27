<?php
    //nome do arquivo config.php

    define("HOST", "localhost");
    define("USER", "root");
    define("PASS", "");
    define("BASE", "sis_tarefas");

    $conn = new MySQLi(HOST, USER, PASS, BASE);