<?php

/**
 * Interface que determina como deve ser a Classe InputText.
 * 
 * @author: Tayron Miranda <dev@tayron.com.br>
 * @see https://github.com/tayron/Html-Helper/edit/master/InterfaceInputText.php
 */
interface InterfaceInputText {
    
    /**
     * Método construtor da classe, recebe os atributos que o input deverá possuir.
     * 
     * @access public
     * @param array $atributes Array com os atributos que o input irá ter.
     * @return void
     */
    public function __construct( array $atributes);
    
    /**
     * Método que renderiza o input na tela
     * 
     * @acess public
     * @return string
     */
    public function display();
    
    /**
     * Método que monta e retorna os atibutos que o input irá ter.
     * 
     * @access private 
     * @return string
     */
    public function getAtributes();    
}
