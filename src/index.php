<?php
include 'components/Input.php';
include 'components/TextInput.php';
include 'components/Form.php';
include 'controllers/FormController.php';

$form = new Form();
$form->addInput(new TextInput("firstname", "First Name", "Bruce"));
$form->addInput(new TextInput("lastname", "Last Name", "Wayne"));

$controller = new FormController($form);

echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<title>Sample Form</title>';
echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">';
echo '<link rel="stylesheet" href="style.css">';
echo '</head>';
echo '<body>';
echo '<div class="container mt-4">';
echo $controller->handleForm();
echo '</div>';  // EO container
echo '</body>';
echo '</html>';