<?php 

function getUsers() {
    return [
        'mariusz' => 'tracz',
        'efg' => 'gajur',
        'jacus' => 'pracus',
        'staszek dżons' => 'speirdalaj z mojej siemi'
    ];

}

function isCorrectUser($login, $password) {
    $users = getUsers();
    return (isset($users[$login])) && ($users[$login] == $password);
}

