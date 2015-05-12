<?php

/**
 * Classe que renderiza um elemento input text.
 * Com este classe é possível criar um input texto e definir qualquer atributo que ele deverá ter.
 * 
 * @author: Tayron Miranda <dev@tayron.com.br>
 * @see https://github.com/tayron/Html-Helper/edit/master/InputText.php
 */
class InputText{
    
    private $atributes = array(
        'type' => 'text',
        'label' => false,
        'name' => '',
        'id' => ''
    );


    /**
     * Método construtor da classe, recebe os atributos que o input deverá possuir.
     * 
     * @access public
     * @param array $atributes Array com os atributos que o input irá ter.
     * @return void
     */
    public function __construct( $atributes = array() )
    {
        $this->atributes['name'] = 'inputText_' . rand(0, 99999) . date( 'yms' );
        $this->atributes['id']   = $this->atributes['name'];

        foreach ($atributes as $key => $value) {
            $this->atributes[$key] = $value;
        }
    }


    /**
     * Método que renderiza o input na tela
     * 
     * @acess public
     * @return string
     */
    public function display()
    {
        if( $this->atributes['label'] != false ){
            echo "<label for='{$this->atributes['name']}'>{$this->atributes['label']}</label>";
        }

        $atributes = $this->getAtributes();
        echo "<input{$atributes} />";
    }

    /**
     * Método que monta e retorna os atibutos que o input irá ter.
     * 
     * @access private 
     * @return string
     */
    private function getAtributes()
    {
        $atributes = '';

        foreach ($this->atributes as $value => $key) {
            if($value != 'label'){
                $atributes .= " {$value}='{$key}'";
            }
        }

        return $atributes;
    }
}
