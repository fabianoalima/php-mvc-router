<?php

class RenderView {

    public function loadView($view, $args) {
        extract($args); //converte a chave do array para variável simples

        require_once __DIR__."/../views/$view.php";
    }
}