<?php

/**
 * Div class
 */
class Div{
    private $elements = array();
    private $atributes = array();

    /**
     *
     */
    public function __construct( $element, $atributes = array() )
    {
        array_push($this->elements, $element);

        foreach ($atributes as $key => $value) {
            $this->atributes[$key] = $value;
        }
    }

    /**
     *
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