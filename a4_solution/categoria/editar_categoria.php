<?php
    $sql = "SELECT * FROM categoria WHERE id_categoria=".$_REQUEST['id_categoria'];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card shadow border-0 rounded-3 mt-4">            
 
            <div class="card-header bg-dark text-white py-3" style="background-color: transparent !important;">
                <h3 class="card-title text-center mb-0" style="color: #00828f">Editar Categoria</h3>
            </div>

            <div class="card-body p-4">
                <form action="?page=salvar_categoria" method="POST">    
                    <input type="hidden" name="acao" value="editar">
                        <input type="hidden" name="id_categoria" value="<?php print $row->id_categoria; ?>">

                    <div class="mb-4">
                        <label class="form-label fw-bold">Projeto Vinculado</label>
                        <div class="input-group">                           
                            <select name="projeto_id_projeto" class="form-select" required>
                                <option value="">-- Selecione um projeto --</option>
                                <?php
                                    $sql_projeto = "SELECT * FROM projeto ORDER BY nome_projeto ASC";
                                    $res_projeto = $conn->query($sql_projeto);
                                    
                                    if ($res_projeto->num_rows > 0) {                    
                                        while ($row_projeto = $res_projeto->fetch_object()) {
                                            $selected = ($row->projeto_id_projeto == $row_projeto->id_projeto) ? 'selected' : '';                                            
                                            print "<option value='{$row_projeto->id_projeto}' {$selected}>{$row_projeto->nome_projeto}</option>";
                                        }
                                    } else {                    
                                        print "<option value='' disabled>Nenhum projeto cadastrado</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">Nome da Categoria</label>
                        <div class="input-group">                            
                            <input type="text" name="nome_categoria" class="form-control" value="<?php print $row->nome_categoria; ?>" required>
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg" style="background-color: #00828f; border: #00828f;">Salvar Edição</button>                        
                        <a href="?page=listar_categoria" class="btn btn-outline-secondary">
                            Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>