<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card shadow border-0 rounded-3 mt-4">            

            <div class="card-header bg-dark text-white py-3" style="background-color: transparent !important;">
                <h3 class="card-title text-center mb-0" style="color: #00828f">Cadastrar Tarefa</h3>
            </div>

            <div class="card-body p-4">
                <form action="?page=salvar_tarefa" method="POST">
                    <input type="hidden" name="acao" value="cadastrar">

                    <div class="mb-4">
                        <label class="form-label fw-bold">Título da Tarefa</label>
                        <div class="input-group">                            
                            <input type="text" name="titulo_tarefa" class="form-control" placeholder="Ex: Corrigir bug no login" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">Descrição</label>
                        <div class="input-group">                            
                            <textarea name="descricao_tarefa" class="form-control" rows="3" placeholder="Detalhes do que precisa ser feito..."></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <label class="form-label fw-bold">Prazo</label>
                            <div class="input-group">                                
                                <input type="date" name="prazo_tarefa" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <label class="form-label fw-bold">Status Inicial</label>
                            <div class="input-group">                                
                                <select name="status_tarefa" class="form-select">
                                    <option value="Pendente">Pendente</option>
                                    <option value="Em Andamento">Em Andamento</option>
                                    <option value="Concluída">Concluída</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">Usuário (Solicitante)</label>
                        <div class="input-group">                            
                            <select name="usuario_id_usuario" class="form-select" required>
                                <option value="">-- Selecione um usuário --</option>
                                <?php
                                    $sql_usuario = "SELECT * FROM usuario ORDER BY nome_usuario ASC";
                                    $res_usuario = $conn->query($sql_usuario);
                                    
                                    if ($res_usuario->num_rows > 0) {                    
                                        while ($row_usuario = $res_usuario->fetch_object()) {
                                            print "<option value='{$row_usuario->id_usuario}'>";
                                            print $row_usuario->nome_usuario;
                                            print "</option>";
                                        }
                                    } else {                    
                                        print "<option value='' disabled>Nenhum usuário cadastrado</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">Responsável (Executor)</label>
                        <div class="input-group">                            
                            <select name="responsavel_id_responsavel" class="form-select" required>
                                <option value="">-- Selecione um responsável --</option>
                                <?php
                                    $sql_responsavel = "SELECT * FROM responsavel ORDER BY nome_responsavel ASC";
                                    $res_responsavel = $conn->query($sql_responsavel);
                                    
                                    if ($res_responsavel->num_rows > 0) {                    
                                        while ($row_responsavel = $res_responsavel->fetch_object()) {
                                            print "<option value='{$row_responsavel->id_responsavel}'>";
                                            print $row_responsavel->nome_responsavel;
                                            print "</option>";
                                        }
                                    } else {                    
                                        print "<option value='' disabled>Nenhum responsável cadastrado</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">Categoria / Projeto</label>
                        <div class="input-group">                            
                            <select name="categoria_id_categoria" class="form-select" required>
                                <option value="">-- Selecione uma categoria --</option>
                                <?php
                                    $sql_categoria = "SELECT * FROM categoria ORDER BY nome_categoria ASC";
                                    $res_categoria = $conn->query($sql_categoria);
                                    
                                    if ($res_categoria->num_rows > 0) {                    
                                        while ($row_categoria = $res_categoria->fetch_object()) {
                                            print "<option value='{$row_categoria->id_categoria}'>";
                                            print $row_categoria->nome_categoria;
                                            print "</option>";
                                        }
                                    } else {                    
                                        print "<option value='' disabled>Nenhuma categoria cadastrada</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg" style="background-color: #00828f; border: #00828f;">Salvar Tarefa</button>                        
                        <a href="?page=listar_tarefa" class="btn btn-outline-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>