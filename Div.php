<?php

/**
 * Classe que renderiza um elemento div.
 * Com este classe é possível definir qualquer atributo que o elemento deverá ter.
 * 
 * @author: Tayron Miranda <dev@tayron.com.br>
 * @see https://github.com/tayron/Html-Helper/blob/master/Div.php
 */
class Div{
    private $elements = array();
    private $atributes = array();

    /**
     * Método construtor da classe, recebe o conteúdo que a div irá conter e um 
     * array de atributos que a div deverá possuir.
     * 
     * @access public
     * @param mixed $element Elemento que a div irá conter
     * @param array $atributes Array com os atributos que a div irá ter.
     * @return void
     */
    public function __construct( $element, $atributes = array() )
    {
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
    public function display()
    {
        $atributes = $this->getAtributes();

        echo "<div{$atributes}>";

        foreach ($this->elements as $element) {
            echo $element->display();
        }

        echo "</div>";
    }

    /**
     * Método que monta e retorna os atibutos que a div irá ter.
     * 
     * @access private 
     * @return string
     */
    private function getAtributes()
    {
        $atributes = '';

        foreach ($this->atributes as $value => $key) {
            $atributes .= " {$value}='{$key}'";
        }

        return $atributes;
    }
}
