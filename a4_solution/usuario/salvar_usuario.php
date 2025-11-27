<?php
    switch ($_REQUEST['acao']) {
        case 'cadastrar' :
            $nome     = $_POST['nome_usuario'];            
            $telefone = $_POST['telefone_usuario'];
            $email    = $_POST['email_usuario'];              
            $sql = "INSERT INTO usuario (nome_usuario, telefone_usuario, email_usuario) 
                    VALUES ('{$nome}', '{$telefone}', '{$email}')";
            
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastrou com sucesso');</script>";
                print "<script>location.href='?page=listar_usuario';</script>";
            }else{
                print "<script>alert('Não Cadastrou');</script>";
                print "<script>location.href='?page=listar_usuario';</script>";
            }

            break;

        case 'editar' :
            $nome     = $_POST['nome_usuario'];            
            $telefone = $_POST['telefone_usuario'];
            $email    = $_POST['email_usuario'];
            
            
            $sql = "UPDATE usuario SET 
                        nome_usuario='{$nome}',                        
                        telefone_usuario='{$telefone}', 
                        email_usuario='{$email}'                        
                    WHERE id_usuario=" .$_REQUEST['id_usuario'];
            
            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Editou com sucesso');</script>";
                print "<script>location.href='?page=listar_usuario';</script>";
            }else{
                print "<script>alert('Não Editou');</script>";
                print "<script>location.href='?page=listar_usuario';</script>";
            }

            break;

        case 'excluir' :            
            $sql = "DELETE FROM usuario WHERE id_usuario=".$_REQUEST['id_usuario'];

            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Excluiu com sucesso');</script>";
                print "<script>location.href='?page=listar_usuario';</script>";
            }else{
                print "<script>alert('Não Excluiu');</script>";
                print "<script>location.href='?page=listar_usuario';</script>";
            }

            break;
    }