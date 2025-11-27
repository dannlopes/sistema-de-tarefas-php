<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card shadow border-0 rounded-3 mt-4">            
            
            <div class="card-header bg-dark text-white py-3" style="background-color: transparent !important;">
                <h3 class="card-title text-center mb-0" style="color: #00828f">Cadastrar Usuário</h3>
            </div>

            <div class="card-body p-4">
                <form action="?page=salvar_usuario" method="POST">
                    <input type="hidden" name="acao" value="cadastrar">
                    
                    <div class="mb-4">
                        <label class="form-label fw-bold">Nome Completo</label>
                        <div class="input-group">                            
                            <input type="text" name="nome_usuario" class="form-control" placeholder="Ex: João da Silva" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">E-mail</label>
                        <div class="input-group">                            
                            <input type="email" name="email_usuario" class="form-control" placeholder="Ex: joao@email.com" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">Telefone</label>
                        <div class="input-group">                            
                            <input type="text" name="telefone_usuario" class="form-control" placeholder="Ex: (61) 99999-9999" required>
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg" style="background-color: #00828f; border: #00828f;">
                            <i class="fas fa-save me-2"></i> Salvar Usuário
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