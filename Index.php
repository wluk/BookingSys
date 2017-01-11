<?php
require_once dirname(__FILE__) . '/init.php';

//przekierowanie przeglądarki klienta do akcji 'home'
//redirectTo('home');

//przekazanie żądania do obsługi akcji 'home'
forwardTo('about');