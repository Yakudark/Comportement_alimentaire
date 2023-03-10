<?php
// require('./Models/modelsUser.php');


function getAllFood()
{
    $bdd = getBdd();
    $query = $bdd->prepare('SELECT * FROM food');
    $query->execute();
    $food = $query->fetchAll();
    return $food;
}

function getOnefood($id)
{
    $bdd = getBdd();
    $query = $bdd->prepare("SELECT * FROM food WHERE id = :id");
    $query->bindParam(':id', $id);
    $query->execute();
    $onefood = $query->fetch();
    return $onefood;
}

function getAllFoodFromOneCategory($category)
{
    $bdd = getBdd();
    $query = $bdd->prepare("SELECT * FROM food WHERE category = :category");
    $query->bindParam(':category', $category);
    $query->execute();
    $food = $query->fetchAll();
    return $food;
}
