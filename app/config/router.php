<?php

#http://localhosto:8081/home

$this->get('/', 'SiteController@index');


$this->get('/formulario', 'CurriculoController@criarCurriculo');
$this->get('/cadastro-concluido', 'CurriculoController@sucesso');
$this->get('/envio-arquivo', 'CurriculoController@upload');
$this->post('/formulario-salvar', 'CurriculoController@SalvarCurriculo');
$this->post('/arquivo-salvar', 'CurriculoController@SalvarUpload');
$this->get('/sobre', 'SiteController@sobre');
$this->get('/funcionamento', 'SiteController@funcionamento');