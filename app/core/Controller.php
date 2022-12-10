<?php

namespace Itworks\core;

class Controller{

    /**
     * Carregar a view
     * 
     * @params string $view Tela
     * @params array $params Parametros para serem impressos na Tela
     */
    protected function load(string $view, $params = []){
        $twig = new \Twig\Environment(
            new \Twig\Loader\FilesystemLoader('../app/src/view')
        );

        $twig->addGlobal('BASE', BASE);

        echo $twig->render($view . '.twig.php', $params);
    }
}