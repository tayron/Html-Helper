<?php

/**
 * Interface que determina como deve ser a Classe Form.
 * 
 * @author: Tayron Miranda <dev@tayron.com.br>
 * @see https://github.com/tayron/Html-Helper/edit/master/InterfaceForm.php
 */
interface InterfaceForm {
    /**
     * Método constritor da classe onde é possível defirnir 
     * os atributos do formulário
     * 
     * @acess public 
     * @param array $atributes Array com os atributos do formulário
     * @return void
     */
    public function __construct(array $atributes);
    
    /**
     * Método que adiciona um novo elemento ao formulário
     * 
     * @access public
     * @param Html $element Elemento Html
     * @return void
     */
    public function addElement(Html $element);
    
    /**
     * Método que monta e renderia o formulário e todos seus elementos.
     * 
     * @access private 
     * @return string
     */
    public function display(array $atributeButton, $textButton = null);
}
