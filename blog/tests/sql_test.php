<?php
    require_once '../core/sql.php';

    $id = 1;
    $nome = 'Pablo';
    $email = 'pablinho12fernands@gmail.com';
    $senha = '123mudar';
    $dados = ['nome' => $nome,
              'email' => $email,
              'senha' => $semha];

    $entidade = 'usuario';
    $criterio = [['id', '=', $id]];
    $campos = ['id', 'nome', 'email'];
    print_r($dados);
    echo'<br>';
    print_r($campos);
    echo'<br>';
    print_r($criterio);
    echo'<br>';

    // Teste geração INSERT
    $instrucao = insert($entidade, $dados);
    echo $instrucao.'<BR>';

    // Teste geração UPDADE
    $instrucao = insert($entidade, $dados, $criterio);
    echo $instrucao.'<BR>';

    // Teste geração SELECT
    $instrucao = insert($entidade, $campos, $criterio);
    echo $instrucao.'<BR>';

    // Teste geração DELETE
    $instrucao = insert($entidade, $criterio);
    echo $instrucao.'<BR>';
    ?>

