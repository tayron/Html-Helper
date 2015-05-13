<?php

/**
 * Interface que determina como deve ser a Classe Html.
 *
 * @author: Tayron Miranda <dev@tayron.com.br>
 * @see https://github.com/tayron/Html-Helper/edit/master/InterfaceHtml.php
 */
interface InterfaceHtml {

    /**
     * Método que monta e retorna os atibutos que o input irá ter.
     *
     * @access private
     * @return string
     */
    public function getAtributes();
}
