<?php
    $sql = "SELECT * FROM usuario WHERE id_usuario=".$_REQUEST['id_usuario'];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card shadow border-0 rounded-3 mt-4">            
            
            <div class="card-header bg-dark text-white py-3" style="background-color: transparent !important;">
                <h3 class="card-title text-center mb-0" style="color: #00828f">Editar Usuário</h3>
            </div>

            <div class="card-body p-4">
                <form action="?page=salvar_usuario" method="POST">    
                    <input type="hidden" name="acao" value="editar">
                    <input type="hidden" name="id_usuario" value="<?php print $row->id_usuario; ?>">
                    
                    <div class="mb-4">
                        <label class="form-label fw-bold">Nome Completo</label>
                        <div class="input-group">                            
                            <input type="text" name="nome_usuario" class="form-control" value="<?php print $row->nome_usuario; ?>" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">E-mail</label>
                        <div class="input-group">                            
                            <input type="email" name="email_usuario" class="form-control" value="<?php print $row->email_usuario; ?>" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">Telefone</label>
                        <div class="input-group">                            
                            <input type="text" name="telefone_usuario" class="form-control" value="<?php print $row->telefone_usuario; ?>" required>
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg" style="background-color: #00828f; border: #00828f;">
                            <i class="fas fa-save me-2"></i> Salvar Edição
                        </button>                        
                        <a href="?page=listar_usuario" class="btn btn-outline-secondary">
                            Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>