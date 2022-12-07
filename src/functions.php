<?php
const USERS =[
    'Sveta', 'Dima', 'Maksim', 'Sasha', 'Ivan'
];
function createUser()
{
$user = [
    'name' => USERS[array_rand(USERS)],
    'age' => mt_rand(18, 45)
];
return $user;
}