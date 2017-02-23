<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        // programa principal
        require_once 'Aluno.php';
        require_once 'professor.php';
        require_once 'funcionario.php';
        require_once 'Pessoa.php';
        
        $p1 = new Pessoa();
        $p2 = new aluno();
        $p3 = new professor();
        $p4 = new funcionario();
        
        $p1->setNome("Pedro");
        $p1->setIdade(30);
        $p1->setSexo("F");
        
        $p2->setNome("Maria");
        $p2->setIdade(31);
        $p2->setSexo("F");
        $p2->setCurso("Informática");
        
        $p3->setNome("Claudio");
        $p3->setIdade(32);
        $p3->setSexo("F");
        $p3->setsalario(2500.75);
        $p3->receberAumento(550);
        
        $p4->setNome("Fabiana");
        $p4->setIdade(33);
        $p4->setSexo("F");
        $p4->setSetor("Estoque");
        $p4->mudarTrabalho();
        
        
        
        
        $p2->cancelarMatr();
        
        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);
        ?>
</pre>
    </body>
</html>
