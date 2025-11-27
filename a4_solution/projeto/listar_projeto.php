<?php
    $sql = "SELECT * FROM projeto";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;
?>

<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card shadow border-0 rounded-3 mt-4">

            <div class="card-header bg-dark text-white py-3" style="background-color: transparent !important;">
                <h3 class="card-title text-center mb-0" style="color: #00828f">Lista de Projetos</h3>
            </div>

            <div class="card-body p-4">
                
                <?php if($qtd > 0){ ?>

                    <div class="alert alert-secondary d-flex align-items-center" role="alert">
                        <i class="fas fa-check-circle me-2"></i>
                        <div>
                            Foram encontrados <strong><?php print $qtd; ?></strong> projetos cadastrados.
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-bordered align-middle">
                            <thead class="table-dark">
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Projeto</th>
                                    <th>Data Início</th>
                                    <th>Descrição</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while( $row = $res->fetch_object()){
                                        print "<tr>";
                                        print "<td class='text-center fw-bold'>".$row->id_projeto."</td>";
                                        print "<td>".$row->nome_projeto."</td>";
                                        print "<td class='text-center'>".$row->data_inicio."</td>";
                                        print "<td>".$row->descricao."</td>";
                                        
                                        print "<td class='text-center' style='width: 150px;'>
                                                
                                                <!-- Botão Editar -->
                                                <button class='btn btn-warning btn-sm me-1' style='background-color: #00828f; border: #00828f; color: white;' onclick=\"location.href='?page=editar_projeto&id_projeto={$row->id_projeto}';\" title='Editar'>Editar</button>

                                                <!-- Botão Excluir -->
                                                <button class='btn btn-danger btn-sm' style='background-color: #f92a5aff; border: #f92a5aff; color: white;' onclick=\"if(confirm('Tem certeza que deseja excluir este projeto?')){location.href='?page=salvar_projeto&acao=excluir&id_projeto={$row->id_projeto}';}else{false;}\" title='Excluir'>Excluir</button>
                                            
                                           </td>";   
                                        print "</tr>";       
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>

                <?php } else { ?>

                    <div class="alert alert-warning text-center" role="alert">
                        <i class="fas fa-exclamation-triangle fa-2x mb-3 d-block"></i>
                        Nenhum projeto encontrado!<br>
                        <a href="?page=cadastrar_projeto" class="alert-link">Clique aqui para cadastrar o primeiro.</a>
                    </div>

                <?php } ?>

            </div>
        </div>
    </div>
</div>