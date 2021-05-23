<?php

$this->get('/', 'HomeController@index');
$this->get('/sobre', 'HomeController@sobre');
$this->get('/mensagem', 'HomeController@mensagem');
$this->post('/salvar-mensagem', 'HomeController@salvarMensagem');
