<?php

# Load classes
spl_autoload_register(function ($class) {
    require 'Client/' . $class . '.php';
});

try {
    $request = new RequestClient();

    $getResponse = $request->get('http://example.com', ['Accept' => 'application/json']);

    $postResponse = $request->post('http://example.com', ['Accept' => 'application/json'], [
        'login' => 'johny',
        'password' => 'g4G$$a'
    ]);

    $postResponse = $request->put('http://example.com', ['Accept' => 'application/json'], [
        'login' => 'johny',
        'email' => 'email@email.com'
    ]);
} catch(Exception $e){
    echo $e->getMessage();
}
