<?php
# get-user.php

$entityManager = require_once('../bootstrap.php');
/*
use Tuto\Entity\User;

$user = $entityManager->find(User::class, 1);

echo sprintf(
    "User (id: %s, firstname: %s, lastname: %s, role: %s)", 
    $user->getId(), $user->getFirstname(), $user->getLastname(), $user->getRole()
);

public function __toString()
{
    $format = "User (id: %s, firstname: %s, lastname: %s, role: %s)\n";
    return sprintf($format, $this->id, $this->firstname, $this->lastname, $this->role);
}*/
/*use Tuto\Entity\User;

$userRepo = $entityManager->getRepository(User::class);

$user = $userRepo->findAll();

echo $user;
/*
use Tuto\Entity\User;
$userRepo = $entityManager->getRepository(User::class);

$user = $userRepo->find(1);
echo "User by primary key:\n";
echo $user;

$allUsers = $userRepo->findAll();
echo "All users:\n";
foreach ($allUsers as $user) {
    echo $user;
}

$usersByRole = $userRepo->findBy(["role" => "admin"]);
echo "Users by role:\n";
foreach ($usersByRole as $user) {
    echo $user;
}

$usersByRoleAndFirstname = $userRepo->findBy(["role" => "user", "firstname" => "First 2"]);
echo "Users by role and firstname:\n";
foreach ($usersByRoleAndFirstname as $user) {
    echo $user;
}
*/