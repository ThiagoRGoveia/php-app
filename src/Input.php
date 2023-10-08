<?php
abstract class Input {
    protected $_name;
    protected $_label;
    protected $_initVal;

    abstract public function validate();
    abstract protected function _renderSetting();

    public function __construct($name, $label, $initVal) {
        $this->_name = $name;
        $this->_label = $label;
        $this->_initVal = $initVal;
    }

    public function name() {
        return $this->_name;
    }

    public function label() {
        return $this->_label;
    }

    public function render() {
        echo '<div>';
        echo '<label class="input-label" for="' . $this->_name . '">' . $this->_label . '</label>';
        echo $this->_renderSetting();
        echo '</div>';
    }

    public function getValue() {
        return $this->_initVal;
    }
}
