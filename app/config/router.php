<?php

#http://localhosto:8081/home
$this->get('/', 'ContaController@index');

$this->get('/', 'HomeController@home');
//$this->get('/home', 'HomeController@home');

//$this->get('/index', 'ContaController@index');

$this->get('/novo', 'ContaController@novo');
$this->post('/conta-salvar', 'ContaController@salvar');

$this->get('/conta-editar', 'ContaController@novo');