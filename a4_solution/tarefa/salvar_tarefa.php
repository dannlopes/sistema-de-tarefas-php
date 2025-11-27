<?php
    switch ($_REQUEST['acao']) {
        case 'cadastrar' :
            $titulo_tarefa  = $_POST['titulo_tarefa'];
            $descricao_tarefa   = $_POST['descricao_tarefa'];
            $prazo_tarefa   = $_POST['prazo_tarefa'];   
            $status_tarefa  = $_POST['status_tarefa'];         
            $usuario_id_usuario   = $_POST['usuario_id_usuario'];
            $responsavel_id_responsavel  = $_POST['responsavel_id_responsavel'];
            $categoria_id_categoria = $_POST['categoria_id_categoria'];
            
            $sql = "INSERT INTO tarefa (titulo_tarefa, descricao_tarefa, prazo_tarefa, status_tarefa, usuario_id_usuario, responsavel_id_responsavel, categoria_id_categoria)  
                    VALUES ('{$titulo_tarefa}', '{$descricao_tarefa}', '{$prazo_tarefa}', '{$status_tarefa}', '{$usuario_id_usuario}', '{$responsavel_id_responsavel}', '{$categoria_id_categoria}')";
            
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastrou com sucesso');</script>";
                print "<script>location.href='?page=listar_tarefa';</script>";
            }else{
                print "<script>alert('Não Cadastrou');</script>";
                print "<script>location.href='?page=listar_tarefa';</script>";
            }

            break;

        case 'editar' :
            $titulo_tarefa  = $_POST['titulo_tarefa'];
            $descricao_tarefa   = $_POST['descricao_tarefa'];
            $prazo_tarefa   = $_POST['prazo_tarefa'];  
            $status_tarefa  = $_POST['status_tarefa'];
            $usuario_id_usuario   = $_POST['usuario_id_usuario'];
            $responsavel_id_responsavel  = $_POST['responsavel_id_responsavel'];
            $categoria_id_categoria = $_POST['categoria_id_categoria'];
            
            $sql = "UPDATE tarefa SET 
                        titulo_tarefa  ='{$titulo_tarefa}', 
                        descricao_tarefa  ='{$descricao_tarefa}', 
                        prazo_tarefa  ='{$prazo_tarefa}', 
                        status_tarefa = '{$status_tarefa}',
                        usuario_id_usuario ='{$usuario_id_usuario}', 
                        responsavel_id_responsavel = '{$responsavel_id_responsavel}',                       
                        categoria_id_categoria ='{$categoria_id_categoria}' 
                        
                    WHERE id_tarefa =" .$_REQUEST['id_tarefa'];
            
            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Editou com sucesso');</script>";
                print "<script>location.href='?page=listar_tarefa';</script>";
            }else{
                print "<script>alert('Não Editou');</script>";
                print "<script>location.href='?page=listar_tarefa';</script>";
            }

            break;

        case 'excluir' :           
            $sql = "DELETE FROM tarefa WHERE id_tarefa =".$_REQUEST['id_tarefa'];

            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Excluiu com sucesso');</script>";
                print "<script>location.href='?page=listar_tarefa';</script>";
            }else{
                print "<script>alert('Não Excluiu');</script>";
                print "<script>location.href='?page=listar_tarefa';</script>";
            }

            break;
    }