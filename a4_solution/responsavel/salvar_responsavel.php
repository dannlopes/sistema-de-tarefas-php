<?php
    switch ($_REQUEST['acao']) {
        case 'cadastrar' :
            $nome     = $_POST['nome_responsavel'];
            $cargo    = $_POST['cargo_responsavel'];
            

            $sql = "INSERT INTO responsavel (nome_responsavel, cargo_responsavel) 
            VALUES ('{$nome}', '{$cargo}')";
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastrou com sucesso');</script>";
                print "<script>location.href='?page=listar_responsavel';</script>";
            }else{
                print "<script>alert('Não Cadastrou');</script>";
                print "<script>location.href='?page=listar_responsavel';</script>";
            }

            break;

        case 'editar' :
            $nome     = $_POST['nome_responsavel'];
            $cargo    = $_POST['cargo_responsavel'];
            

            $sql = "UPDATE responsavel SET 
                nome_responsavel='{$nome}', 
                cargo_responsavel='{$cargo}'                
            WHERE id_responsavel=" .$_REQUEST['id_responsavel'];
            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Editou com sucesso');</script>";
                print "<script>location.href='?page=listar_responsavel';</script>";
            }else{
                print "<script>alert('Não Editou');</script>";
                print "<script>location.href='?page=listar_responsavel';</script>";
            }

            break;

        case 'excluir' :
            $sql = "DELETE FROM responsavel WHERE id_responsavel=".$_REQUEST['id_responsavel'];

            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Excluiu com sucesso');</script>";
                print "<script>location.href='?page=listar_responsavel';</script>";
            }else{
                print "<script>alert('Não Excluiu');</script>";
                print "<script>location.href='?page=listar_responsavel';</script>";
            }

            break;
    }