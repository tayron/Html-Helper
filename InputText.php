<?php

/**
 * Classe que renderiza um elemento input text.
 * Com este classe é possível criar um input texto e definir qualquer atributo que ele deverá ter.
 * 
 * @author: Tayron Miranda <dev@tayron.com.br>
 * @see https://github.com/tayron/Html-Helper/edit/master/InputText.php
 */
class InputText extends Html implements InterfaceInputText{
    
    /**
     * Array com os atributos dos elementos Html
     * 
     * @var array 
     */
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
    public function __construct( array $atributes)
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
            echo sprintf(self::LABEL, $this->atributes['name'], 
                $this->atributes['label']);
        }

        echo printf(self::INPUT_TEXT, $this->getAtributes());
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
                $atributes .= sprintf(self::ATTRIBUTE, $value, $key);
            }
        }

        return $atributes;
    }
}
