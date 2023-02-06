<?php
    require_once './OOP/APP/password.php';

class PasswordTest{
    public function testGenerate() {
        $password = new Password();
        $generatedPass = $password->getPass();

        if (!empty($generatedPass) && is_string($generatedPass)) {
            echo 'testGenerate: OK' . PHP_EOL;
        } else {
            echo 'testGenerate: NOPE' . PHP_EOL;
        }
    }

    public function testCheck() {
        $password = new Password('Asleio029');
        if ($password->check('Asleio029') && !$password->check('wrongPassword')) {
            echo 'testCheck: OK' . PHP_EOL;
        } else {
            echo 'testCheck: NOPE' . PHP_EOL;
        }
    }
}
$passwordTest = new PasswordTest();
$passwordTest->testGenerate();
$passwordTest->testCheck();

?>
