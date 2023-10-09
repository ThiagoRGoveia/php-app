<?php
class FormController {
    private $form;

    public function __construct(Form $form) {
        $this->form = $form;
    }

    public function handleForm() {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            if ($this->form->validate()) {
                $firstName = $this->form->getValue("firstname");
                $lastName = $this->form->getValue("lastname");
                return "Hello, " . htmlspecialchars($firstName) . " " . htmlspecialchars($lastName);
            } else {
                return '<div class="alert alert-danger">Form is invalid</div>' . FormView::renderForm($this->form);
            }
        } else {
            return $this->form->render();
        }
    }
}