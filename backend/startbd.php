<?php


function bd(){
    $conn = new mysqli('127.0.0.1', 'root', 'root');
    // var_dump($conn);
    if ($conn->connect_error)
    die(sprintf('Unable to connect to the database. %s', $conn->connect_error));
    $conn->query("SET NAMES utf8");

    // 2. Recuperer l utilisateur souhaité
    require "SimpleOrm.class.php";
    SimpleOrm::useConnection($conn, 'cours');
}