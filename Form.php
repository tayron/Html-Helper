<?php

/**
 * Form class
 */
class Form{
    private $elements = array();
    private $atributes = array(
        'method' => 'post'
    );


    /**
     *
     */
    public function __construct( $atributes = array() )
    {
        foreach ($atributes as $key => $value) {
            $this->atributes[$key] = $value;
        }
    }


    /**
     *
     */
    public function addElement( $element )
    {
        array_push($this->elements, $element);
    }


    /**
     *
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
     *
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