<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('zzz:test', function (\App\Service\Pushall $pushall) {
    dump($pushall);
})->purpose('Команда в виде замыкания');

Artisan::command('test2', function () {
    $name = $this->ask('Как вас зовут?');
    $password = $this->secret('Какой ваш пароль?');

    $this->info($name);
    $this->info($password);
})->purpose('Тестовая команда ввода вывода');
