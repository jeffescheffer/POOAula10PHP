<?php
require_once 'Pessoa.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of aluno
 *
 * @author Jefferson
 */
class aluno extends Pessoa {
    //put your code here
    private $matr;
    private $curso;
    
    public function cancelarMatr(){
        echo "<p>Cancelar Matrícula</p>";
        
    }
    public function getMatr() {
        return $this->matr;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setMatr($matr) {
        $this->matr = $matr;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }


}
