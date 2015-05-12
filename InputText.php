<?php

/**
 * InputText class
 */
class InputText{
    private $atributes = array(
        'type' => 'text',
        'label' => false,
        'name' => '',
        'id' => ''
    );


    /**
     *
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
     *
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
     *
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