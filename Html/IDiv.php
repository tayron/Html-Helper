<?php

/**
 * Interface que determina como deve ser a Classe Div.
 *
 * @author: Tayron Miranda <dev@tayron.com.br>
 * @see https://github.com/tayron/Html-Helper/edit/master/IDiv.php
 */
interface IDiv {

    /**
     * Método construtor da classe, recebe o conteúdo que a div irá conter e um
     * array de atributos que a div deverá possuir.
     *
     * @access public
     * @param mixed $element Elemento que a div irá conter
     * @param array $atributes Array com os atributos que a div irá ter.
     * @return void
     */
    public function __construct($element, array $atributes);

    /**
     * Método que renderiza a div na tela.
     *
     * @acess public
     * @return string
     */
    public function display();

    /**
     * Método que monta e retorna os atibutos que a div irá ter.
     *
     * @access private
     * @return string
     */
    public function getAtributes();
}
