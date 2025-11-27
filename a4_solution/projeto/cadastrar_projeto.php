<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card shadow border-0 rounded-3 mt-4">          
                
            <div class="card-header bg-dark text-white py-3" style="background-color: transparent !important;">
                <h3 class="card-title text-center mb-0" style="color: #00828f">
                    <i class="fas fa-project-diagram me-2"></i> Cadastrar Projeto
                </h3>
            </div>

            <div class="card-body p-4">
                <form action="?page=salvar_projeto" method="POST">
                    <input type="hidden" name="acao" value="cadastrar">
                    
                    <div class="mb-4">
                        <label class="form-label fw-bold">Nome do Projeto</label>
                        <div class="input-group">                            
                            <input type="text" name="nome_projeto" class="form-control" placeholder="Ex: Novo Site Institucional" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">Data de Início</label>
                        <div class="input-group">                            
                            <input type="date" name="data_inicio" class="form-control" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">Descrição</label>
                        <div class="input-group">                            
                            <textarea name="descricao" class="form-control" placeholder="Descreva brevemente o objetivo do projeto..." rows="3"></textarea>
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg" style="background-color: #00828f; border: #00828f;">Salvar Projeto</button>                        
                        <a href="?page=listar_projeto" class="btn btn-outline-secondary">
                            Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>