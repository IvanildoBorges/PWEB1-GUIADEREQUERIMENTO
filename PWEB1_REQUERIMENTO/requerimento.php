<?php

    $_POST['campo1'] = rand(1000000, 10000000);
    $nome = $_POST['campo2'];
    $matricula = $_POST['campo3'];
    $data = $_POST['campo4'];
    $naturalidade = $_POST['campo5'];
    $filiacao = $_POST['campo6'];
    $curso = $_POST['campo7'];
    $periodo = $_POST['campo8'];
    $turno = $_POST['campo9'];
    $telefone1 = $_POST['campo10'];
    $telefone2 = $_POST['campo11'];
    $email = $_POST['campo12'];
    $opc1 = $_POST['opc1'];

    if($email != ""){
        echo "E-mail: " . $email . "<br>";
    }else{
        header("Location: index.php?msg9=e");
    }

    if(($telefone1 != "") || ($telefone2 != "")){
        echo "Telefone 1: " . $telefone1 . "<br>";
        echo "Telefone 2: " . $telefone2 . "<br>";
    }else{
        header("Location: index.php?msg8=tl");
    }

    if($turno != ""){
        echo "Turno: " . $turno . "<br>";
    }else{
        header("Location: index.php?msg7=t");
    }

    if($periodo != ""){
        echo "Periodo: " . $periodo . "<br>";
    }else{
        header("Location: index.php?msg6=p");
    }

    if($curso != ""){
        echo "Curso: " . $curso . "<br>";
    }else{
        header("Location: index.php?msg5=c");
    }

    if($filiacao != ""){
        echo "Filiação: " . $filiacao . "<br>";
    }else{
        header("Location: index.php?msg4=f");
    }

    if($naturalidade != ""){
        echo "Naturalidade: " . $naturalidade . "<br>";
    }else{
        header("Location: index.php?msg3=nt");
    }

    if($data != ""){
        echo "Data: " . $data . "<br>";
    }else{
        header("Location: index.php?msg2=d");
    }

    if($matricula != ""){
        echo "Matricula: " . $matricula . "<br>";
    }else{
        header("Location: index.php?msg1=m");
    }

    if($nome != ""){
        echo "Protocolo: " . $_POST['campo1'] . "<br>";
        echo "Requerente: " . $nome . "<br>";
    }else{
        header("Location: index.php?msg=n");
    }

    
?>
