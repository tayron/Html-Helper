<?php

/**
 * Classe que renderiza um elemento input text.
 * Com este classe é possível criar um input texto e definir qualquer atributo que ele deverá ter.
 *
 * @author: Tayron Miranda <dev@tayron.com.br>
 * @see https://github.com/tayron/Html-Helper/edit/master/InputText.php
 */
class InputText extends Html implements InterfaceInputText {

    /**
     * Método construtor da classe, recebe os atributos que o input deverá possuir.
     *
     * @access public
     * @param array $atributes Array com os atributos que o input irá ter.
     * @return void
     */
    public function __construct(array $atributes) {

        $this->setConfigInitial();

        if(!isset($atributes['name']) && isset($atributes['id'])){
            $this->atributes['name'] = $atributes['id'];
        }

        if(!isset($atributes['id']) && isset($atributes['name'])){
            $this->atributes['id'] = $atributes['name'];
        }

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
        $this->atributes = [
            'type' => 'text',
            'label' => false,
            'name' => '',
            'id' => ''];
    }

    /**
     * Método que renderiza o input na tela
     *
     * @acess public
     * @return string
     */
    public function display() {
        $html = null;
        if ($this->atributes['label'] != false) {
            $html = sprintf(self::LABEL, $this->atributes['name'], $this->atributes['label']);
        }

        return $html . sprintf(self::INPUT_TEXT, $this->getAtributes());
    }

    /**
     * Método que monta e retorna os atibutos que o input irá ter.
     *
     * @access private
     * @return string
     */
    public function getAtributes() {
        $atributes = '';

        foreach ($this->atributes as $value => $key) {
            if ($value != 'label') {
                $atributes .= sprintf(self::ATTRIBUTE, $value, $key);
            }
        }

        return $atributes;
    }

}
