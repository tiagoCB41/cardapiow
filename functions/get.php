<?php

function get_category(){
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM category order by id desc");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}