<?php 

const COOKIE_NAME = '4ai_br_loggedUser';
const secondsInMinute = 60;
const secondsInHour = 60*secondsInMinute;
const secondsInDay = 24*secondsInHour;
$zalogowany = $_COOKIE[COOKIE_NAME] ?? 0;