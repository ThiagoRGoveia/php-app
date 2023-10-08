<?php
class TextInput extends Input {

    public function __construct($name, $label, $initVal) {
        $this->_name = $name;
        $this->_label = $label;
        $this->_initVal = $initVal;
    }

    public function validate() {
        return !empty($this->_initVal);
    }

    protected function _renderSetting() {
        return '<input class="text-input" type="text" name="' . $this->_name . '" value="' . htmlspecialchars($this->_initVal) . '">';
    }

    public function getValue() {
        if (isset($_POST[$this->_name])) {
            return $_POST[$this->_name];
        }
        return $this->_initVal; 
    }

}
