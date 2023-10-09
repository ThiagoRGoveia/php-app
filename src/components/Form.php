<?php
class Form {

    protected $_inputs;

    public function __construct() {
        $this->_inputs = [];
    }

    public function addInput(Input $input) {
        $this->_inputs[$input->name()] = $input;
    }

    public function validate() {
        foreach ($this->_inputs as $input) {
            if (!$input->validate()) {
                return false;
            }
        }
        return true;
    }

    public function getValue($name) {
        if (isset($this->_inputs[$name])) {
            return $this->_inputs[$name]->getValue();
        }
        return null;
    }

    public function getInputs() {
        return $this->_inputs;
    }

    public function render() {
        echo '<form method="POST" class="form-group">';
        foreach ($this->_inputs as $input) {
            $input->render();
            echo '<br>';
        }
        echo '<button type="submit" class="btn btn-primary">Submit</button>';
        echo '</form>';
    }
}
