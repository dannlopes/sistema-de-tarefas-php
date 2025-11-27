<?php
    switch ($_REQUEST['acao']) {
        case 'cadastrar' :
            $nome_categoria   = $_POST['nome_categoria'];            
            $projeto_id_projeto	= $_POST['projeto_id_projeto'];            

            $sql = "INSERT INTO categoria (nome_categoria, projeto_id_projeto)  
            VALUES ('{$nome_categoria}', {$projeto_id_projeto})";
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastrou com sucesso');</script>";
                print "<script>location.href='?page=listar_categoria';</script>";
            }else{
                print "<script>alert('Não Cadastrou');</script>";
                print "<script>location.href='?page=listar_categoria';</script>";
            }

            break;

        case 'editar' :
            $nome_categoria   = $_POST['nome_categoria'];           
            $projeto_id_projeto	= $_POST['projeto_id_projeto'];

            $sql = "UPDATE categoria SET 
                        nome_categoria ='{$nome_categoria}',                         
                        projeto_id_projeto ='{$projeto_id_projeto}'                        
                    WHERE id_categoria=" .$_REQUEST['id_categoria'];
            
            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Editou com sucesso');</script>";
                print "<script>location.href='?page=listar_categoria';</script>";
            }else{
                print "<script>alert('Não Editou');</script>";
                print "<script>location.href='?page=listar_categoria';</script>";
            }

            break;

        case 'excluir' :
            $sql = "DELETE FROM categoria WHERE id_categoria =".$_REQUEST['id_categoria'];

            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Excluiu com sucesso');</script>";
                print "<script>location.href='?page=listar_categoria';</script>";
            }else{
                print "<script>alert('Não Excluiu');</script>";
                print "<script>location.href='?page=listar_categoria';</script>";
            }
            break;
    }