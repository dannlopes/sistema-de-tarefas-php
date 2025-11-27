<?php

    switch ($_REQUEST['acao']) {
        case 'cadastrar' :
            $nome_projeto    = $_POST['nome_projeto'];
            $data_inicio     = $_POST['data_inicio'];
            $descricao       = $_POST['descricao'];           

            $sql = "INSERT INTO projeto (nome_projeto, data_inicio, descricao)  
            VALUES ('{$nome_projeto}', '{$data_inicio}', '{$descricao}')";
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastrou com sucesso');</script>";
                print "<script>location.href='?page=listar_projeto';</script>";
            }else{
                print "<script>alert('Não Cadastrou');</script>";
                print "<script>location.href='?page=listar_projeto';</script>";
            }

            break;

        case 'editar' :
            $nome_projeto    = $_POST['nome_projeto'];
            $data_inicio     = $_POST['data_inicio'];
            $descricao       = $_POST['descricao']; 
            $sql = "UPDATE projeto SET 
                        nome_projeto = '{$nome_projeto}',
                        data_inicio = '{$data_inicio}',
                        descricao = '{$descricao}'                        
                    WHERE id_projeto=" .$_REQUEST['id_projeto'];
            
            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Editou com sucesso');</script>";
                print "<script>location.href='?page=listar_projeto';</script>";
            }else{
                print "<script>alert('Não Editou');</script>";
                print "<script>location.href='?page=listar_projeto';</script>";
            }
            break;

        case 'excluir' :
            $sql = "DELETE FROM projeto WHERE id_projeto=".$_REQUEST['id_projeto'];

            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Excluiu com sucesso');</script>";
                print "<script>location.href='?page=listar_projeto';</script>";
            }else{
                print "<script>alert('Não Excluiu');</script>";
                print "<script>location.href='?page=listar_projeto';</script>";
            }

            break;
    }