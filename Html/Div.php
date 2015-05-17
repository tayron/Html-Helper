<?php

/**
 * Classe que renderiza um elemento div.
 * Com este classe é possível definir qualquer atributo que o elemento deverá ter.
 *
 * @author: Tayron Miranda <dev@tayron.com.br>
 * @see https://github.com/tayron/Html-Helper/blob/master/Div.php
 */
class Div extends Html implements IDiv {

    /**
     * Armazena os elementos dentro da div
     *
     * @var array
     */
    private $elements = [];

    /**
     * Método construtor da classe, recebe o conteúdo que a div irá conter e um
     * array de atributos que a div deverá possuir.
     *
     * @access public
     * @param mixed $element Elemento que a div irá conter
     * @param array $atributes Array com os atributos que a div irá ter.
     * @return void
     */
    public function __construct($element, array $atributes) {
        array_push($this->elements, $element);

        foreach ($atributes as $key => $value) {
            $this->atributes[$key] = $value;
        }
    }

    /**
     * Método que renderiza a div na tela.
     *
     * @acess public
     * @return string
     */
    public function display() {
        $elements = null;

        foreach ($this->elements as $element) {
            $elements .= $element->display();
        }

        return sprintf(self::DIV, $this->getAtributes(), $elements);
    }

}
