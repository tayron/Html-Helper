<?php

/**
 * Classe que renderiza um elemento form.
 * Com este classe é possível criar um formulário com todos seus elementos embutidos.
 *
 * @author: Tayron Miranda <dev@tayron.com.br>
 * @see https://github.com/tayron/Html-Helper/edit/master/Form.php
 */
class Form extends Html implements IForm {

    /**
     *
     * @var type
     */
    private $elements = [];

    /**
     * Método constritor da classe onde é possível defirnir
     * os atributos do formulário
     *
     * @acess public
     * @param array $atributes Array com os atributos do formulário
     * @return void
     */
    public function __construct(array $atributes) {
        $this->setConfigInitial();

        foreach ($atributes as $key => $value) {
            $this->atributes[$key] = $value;
        }
    }

    /**
     * Método que seta os atributos iniciais dao elemento
     *
     * @access private
     * @return void
     */
    public function setConfigInitial(){
        $this->atributes = ['method' => 'post'];
    }

    /**
     * Método que adiciona um novo elemento ao formulário
     *
     * @access public
     * @param Html $element Elemento Html
     * @return void
     */
    public function addElement(Html $element) {
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
    public function display($textButton = 'Salvar', array $atributeButton = []) {
        $elements = null;

        foreach ($this->elements as $element) {
            $elements .= $element->display();
        }

        if ($textButton != null) {
            $atributes = '';
            foreach ($atributeButton as $value => $key) {
                $atributes .= " {$value}='{$key}'";
            }
            $elements .= sprintf(self::BUTTON, $atributes, $textButton);
        }

        return sprintf(self::FORM, $this->getAtributes(), $elements);
    }

}
