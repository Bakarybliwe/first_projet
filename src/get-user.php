<?php
# get-user.php

$entityManager = require_once('../bootstrap.php');

use Tuto\Entity\User;

$userRepo = $entityManager->getRepository(User::class);

$user = $userRepo->find(1);

echo $user;