<?php

function addDate($id_user, $id_food, $date_of_eaten, $quantity, $typeOfMeal)
{
    $bdd = getBdd();
    $query = $bdd->prepare("INSERT INTO eaten_date (id_user, id_food, date_of_eaten, quantity, typeOfMeal) VALUES (:id_user, :id_food, :date_of_eaten, :quantity, :typeOfMeal)");
    $query->bindParam(':id_user', $id_user);
    $query->bindParam(':id_food', $id_food);
    $query->bindParam(':date_of_eaten', $date_of_eaten);
    $query->bindParam(':quantity', $quantity);
    $query->bindParam(':typeOfMeal', $typeOfMeal);
    $query->execute();
}
