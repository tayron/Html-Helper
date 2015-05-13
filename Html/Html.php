<?php

/**
 * Classe abstrata que representa os elementos Html
 *
 * @author: Tayron Miranda <dev@tayron.com.br>
 * @see https://github.com/tayron/Html-Helper/edit/master/InputText.php
 */
class Html implements InterfaceHtml{

    /**
     * Constante que armazena modelo do elemento Label
     */
    const DIV = '<div%s>%s</div>';

    /**
     * Constante que armazena modelo do elemento Label
     */
    const LABEL = '<label for="%s">%s</label>';

    /**
     * Constante que armazena o modelo do elemento input
     */
    const INPUT_TEXT = '<input%s />';

    /**
     * Constante que armazena o modelo do elemento textarea
     */
    const TEXTAREA = '<textarea%s />%s</textarea>';

    /**
     * Constante que armazena modelo da tag form
     */
    const FORM = '<form%s>%s</form>';

    /**
     * Constante que armazena a tag button
     */
    const BUTTON = '<button%s>%s</button>';

    /**
     * Constante que formato atributo
     */
    const ATTRIBUTE = ' %s="%s"';

    /**
     * Array com os atributos dos elementos Html
     * @var array
     */
    public $atributes = [];

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
                $atributes .= sprintf(self::ATTRIBUTE, $value, trim($key));
            }
        }

        return $atributes;
    }

}
