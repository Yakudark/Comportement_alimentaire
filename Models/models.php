<?php

function getBDD()
{
    try {
        $bdd = new PDO('mysql:host=localhost; dbname=alimentation_app; charset=utf8', 'root', 'root');
        return $bdd;
    } catch (Exception $e) {
        die('Erreur :' . $e->getMessage());
    }
}

function getAllFood()
{
    $bdd = getBdd();
    $query = $bdd->prepare('SELECT * FROM food');
    $query->execute();
    $food = $query->fetchAll();
    return $food;
}

function getOnefood($id){
    $bdd = getBdd();
    $query = $bdd->prepare("SELECT * FROM food WHERE id = $id");
    $query->bindParam(':id', $id);
    $query->execute();
    $onefood = $query->fetch();
    return $onefood;
}

function getAllUsers()
{
    $bdd = getBdd();
    $query = $bdd->prepare('SELECT * FROM users');
    $query->execute();
    $users = $query->fetchAll();
    return $users;
}

function getOneUser($id){
    $bdd = getBdd();
    $query = $bdd->prepare("SELECT * FROM users WHERE id = $id");
    $query->bindParam(':id', $id);
    $oneUser = $query->fetchAll();
    return $oneUser;
}

function signIn($email, $password)
{
    $bdd = getBdd();
    $bdd->exec("INSERT INTO users (email, pwd) VALUES ('$email', '$password')");
}

function logIn($email, $password){
    $bdd = getBdd();
    $oneUser = $bdd->query("SELECT * FROM users WHERE email = $email AND pwd = $password");
    return $oneUser;
}