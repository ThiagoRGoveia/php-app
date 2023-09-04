<?php
include 'Input.php';
include 'TextInput.php';
include 'Form.php';

$form = new Form();

$form->addInput(new TextInput("firstname", "First Name", "Bruce"));
$form->addInput(new TextInput("lastname", "Last Name", "Wayne"));

echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<title>Sample Form</title>';
echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">';
echo '<link rel="stylesheet" href="style.css">';
echo '</head>';
echo '<body>';
echo '<div class="container mt-4">';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if ($form->validate()) {
        $firstName = $form->getValue("firstname");
        $lastName = $form->getValue("lastname");
        echo "Hello, " . htmlspecialchars($firstName) . " " . htmlspecialchars($lastName);
    } else {
        echo '<div class="alert alert-danger">Form is invalid</div>';
        $form->display();
    }
} else {
    $form->display();
}

echo '</div>';  // EO container
echo '</body>';
echo '</html>';
