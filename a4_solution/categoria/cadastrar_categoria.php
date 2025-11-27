<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card shadow border-0 rounded-3 mt-4">           
        
            <div class="card-header bg-dark text-white py-3" style="background-color: transparent !important;">
                <h3 class="card-title text-center mb-0" style="color: #00828f">
                    <i class="fas fa-tags me-2"></i> Cadastrar Categoria
                </h3>
            </div>

            <div class="card-body p-4">
                <form action="?page=salvar_categoria" method="POST">
                    <input type="hidden" name="acao" value="cadastrar">
                    
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
                                            print "<option value='{$row_projeto->id_projeto}'>";
                                            print $row_projeto->nome_projeto;
                                            print "</option>";
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
                            <input type="text" name="nome_categoria" class="form-control" placeholder="Ex: Front-end, Design, Backend" required>
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg" style="background-color: #00828f; border: #00828f;">Salvar Categoria</button>                        
                        <a href="?page=listar_categoria" class="btn btn-outline-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>