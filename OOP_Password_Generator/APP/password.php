<?php

class password {
    public $password;

    public function __construct($password = null){
        if ($password === null) {
            $this->generate(10, 'strong');
        } else {
            $this->password = $password;
        }
    }

    public function getPass() {
        return $this->password;
    }

    public function generate($length, $complex) {
        $charactes = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $complexity = [
            'weak' => [5, $charactes],
            'medium'=> [8, $charactes . '*$ß#&@{}~-+'],
            'strong'=> [10, $charactes . '*$ß#&@{}~-+/?:[]€|\\']
        ];

        $complexitySettings = $complexity[$complex] ?? $complexity['strong'];
        $password = '';
        $charactersLenght = strlen($complexitySettings[1])- 1;
        for ($i = 0; $i < $complexitySettings[0]; $i++) {
            $password .= $complexitySettings[1][rand(0,$charactersLenght)];
        }
        $this->password = $password;
    }

    public function check($password){
        return $this->password ===$password;
    }


}