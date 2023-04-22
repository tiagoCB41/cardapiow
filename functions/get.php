<?php

function get_category(){
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM category order by id desc");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function get_products($category_id){
    if(empty($category_id)){
        $category_id = "category_id is not null";
    }else{
        $category_id = "category_id = " . $category_id ;
    }
    global $pdo;
    $stmt = $pdo->prepare("SELECT products.name, 
    category.name as category_name,
    products.price,
    products.description
    FROM products
    INNER JOIN category ON category.id = products.category_id
    where $category_id
    ;");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}