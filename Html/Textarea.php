<?php

/**
 * Classe que renderiza um elemento textarea.
 * Com este classe é possível criar um textarea e definir qualquer atributo que ele deverá ter.
 *
 * @author: Tayron Miranda <dev@tayron.com.br>
 * @see https://github.com/tayron/Html-Helper/edit/master/Textarea.php
 */
class Textarea extends Html implements ITextarea {

    /**
     * Variavel que armazena o valor padrao do textarea
     *
     * @var string
     */
    private $value = null;

    /**
     * Método construtor da classe, recebe os atributos que o textarea deverá possuir.
     *
     * @access public
     * @param array $atributes Array com os atributos que o textarea irá ter.
     * @return void
     */
    public function __construct(array $atributes) {
        $this->setConfigInitial();

        if(isset($atributes['value'])){
           $this->value($atributes['value']);
           unset($atributes['value']);
        }

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
            'label' => false,
            'name' => '',
            'id' => ''
        ];
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

        return $html . sprintf(self::TEXTAREA, $this->getAtributes(), $this->value);
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
