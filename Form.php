<?php

/**
 * Classe que renderiza um elemento form.
 * Com este classe é possível criar um formulário com todos seus elementos embutidos.
 * 
 * @author: Tayron Miranda <dev@tayron.com.br>
 * @see https://github.com/tayron/Html-Helper/edit/master/Form.php
 */
class Form extends Html implements InterfaceForm{
    
    /**
     *
     * @var type 
     */
    private $elements = array();
    
    /**
     *
     * @var type 
     */
    private $atributes = array('method' => 'post');

    /**
     * Método constritor da classe onde é possível defirnir 
     * os atributos do formulário
     * 
     * @acess public 
     * @param array $atributes Array com os atributos do formulário
     * @return void
     */
    public function __construct( array $atributes )
    {
        foreach ($atributes as $key => $value) {
            $this->atributes[$key] = $value;
        }
    }

    /**
     * Método que adiciona um novo elemento ao formulário
     * 
     * @access public
     * @param Html $element Elemento Html
     * @return void
     */
    public function addElement( Html $element )
    {
        array_push($this->elements, $element);
    }


    /**
     * Método que monta e renderia o formulário e todos seus elementos.
     * 
     * @access private 
     * @param string $textButton Texto do botão
     * @param array $atributeButton Atributos do botão
     * @return string
     */
    public function display(array $atributeButton, $textButton = null)
    {
        $elements = null;
        
        foreach ($this->elements as $element) {
            $elements .= $element->display();
        }

        if( $textButton != null ){
            $atributes = '';
            foreach ($atributeButton as $value => $key) {
                $atributes .= " {$value}='{$key}'";
            }
            $elements .= sprintf(self::BUTTON, $atributes, $textButton);
        }

        printf(self::FORM, $this->getAtributes(), $elements);
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
            $atributes .= sprintf(self::ATTRIBUTE, $value, $key);
        }

        return $atributes;
    }
}
