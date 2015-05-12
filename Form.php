<?php

/**
 * Classe que renderiza um elemento form.
 * Com este classe é possível criar um formulário com todos seus elementos embutidos.
 * 
 * @author: Tayron Miranda <dev@tayron.com.br>
 * @see https://github.com/tayron/Html-Helper/edit/master/Form.php
 */
class Form{
    private $elements = array();
    private $atributes = array('method' => 'post');


    /**
     * Método constritor da classe onde é possível defirnir 
     * os atributos do formulário
     * 
     * @acess public 
     * @param array $atributes Array com os atributos do formulário
     * @return void
     */
    public function __construct( $atributes = array() )
    {
        foreach ($atributes as $key => $value) {
            $this->atributes[$key] = $value;
        }
    }


    /**
     * Método que adiciona um novo elemento ao formulário
     * 
     * @access public
     * @return void
     */
    public function addElement( $element )
    {
        array_push($this->elements, $element);
    }


    /**
     * Método que monta e renderia o formulário e todos seus elementos.
     * 
     * @access private 
     * @return string
     */
    public function display( $textButton = null, $atributeButton = array() )
    {
        $atributes = $this->getAtributes();

        echo "<form{$atributes}>";

        foreach ($this->elements as $element) {
            echo $element->display();
        }

        if( $textButton != null ){
            $atributes = '';
            foreach ($atributeButton as $value => $key) {
                $atributes .= " {$value}='{$key}'";
            }
            echo "<button $atributes>{$textButton}</button>";
        }

        echo "</form>";
    }

    /**
     * Método que monta e retorna os atibutos que o formulário irá ter.
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
