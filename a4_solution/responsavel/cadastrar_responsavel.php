<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card shadow border-0 rounded-3 mt-4">            
            
            <div class="card-header bg-dark text-white py-3" style="background-color: transparent !important;">
                <h3 class="card-title text-center mb-0" style="color: #00828f">Cadastrar Responsável</h3>
            </div>

            <div class="card-body p-4">
                <form action="?page=salvar_responsavel" method="POST">
                    <input type="hidden" name="acao" value="cadastrar">
                    
                    <div class="mb-4">
                        <label class="form-label fw-bold">Nome Completo</label>
                        <div class="input-group">                            
                            <input type="text" name="nome_responsavel" class="form-control" placeholder="Ex: Ana Souza" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">Cargo / Função</label>
                        <div class="input-group">                            
                            <input type="text" name="cargo_responsavel" class="form-control" placeholder="Ex: Desenvolvedor Senior" required>
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg" style="background-color: #00828f; border: #00828f;">
                            <i class="fas fa-save me-2"></i> Salvar Registro
                        </button>                        
                        <a href="?page=listar_responsavel" class="btn btn-outline-secondary">
                            Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>