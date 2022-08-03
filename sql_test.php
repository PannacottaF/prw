<?php
    require_once '../core/sql.php';

    $id = 1;
    $nome = 'Pablo'
    $email = 'pablinho12fernands@gmail.com';
    $senha = '123mudar';
    $dados = ['nome' => $nome,
              'email' => $email,
              'senha' => $semha];

    $entidade = 'usuario';
    $criterio = [['id', '=', $id]];