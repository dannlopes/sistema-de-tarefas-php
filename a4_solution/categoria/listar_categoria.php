<?php    
    $sql = "SELECT * FROM categoria AS c
            INNER JOIN projeto AS p
            ON c.projeto_id_projeto = p.id_projeto";

    $res = $conn->query($sql);
    $qtd = $res->num_rows;
?>

<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card shadow border-0 rounded-3 mt-4">

            <div class="card-header bg-dark text-white py-3" style="background-color: transparent !important;">
                <h3 class="card-title text-center mb-0" style="color: #00828f">Lista de Categorias</h3>
            </div>

            <div class="card-body p-4">
                
                <?php if($qtd > 0){ ?>

                    <div class="alert alert-secondary d-flex align-items-center" role="alert">
                        <i class="fas fa-check-circle me-2"></i>
                        <div>
                            Foram encontradas <strong><?php print $qtd; ?></strong> categorias cadastradas.
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-bordered align-middle">
                            <thead class="table-dark">
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Categoria</th>
                                    <th>Projeto Vinculado</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while( $row = $res->fetch_object()){
                                        print "<tr>";
                                        print "<td class='text-center fw-bold'>".$row->id_categoria."</td>";
                                        print "<td><strong>".$row->nome_categoria."</strong></td>";       
                                        print "<td><span class='badge bg-secondary'>".$row->nome_projeto."</span></td>";                                        
                                        print "<td class='text-center' style='width: 150px;'>

                                                <button class='btn btn-warning btn-sm me-1' style='background-color: #00828f; border: #00828f; color: white;' onclick=\"location.href='?page=editar_categoria&id_categoria={$row->id_categoria}';\" title='Editar'>Editar</button>

                                                <button class='btn btn-danger btn-sm' style='background-color: #f92a5aff; border: #f92a5aff; color: white;' onclick=\"if(confirm('Tem certeza que deseja excluir esta categoria?')){location.href='?page=salvar_categoria&acao=excluir&id_categoria={$row->id_categoria}';}else{false;}\" title='Excluir'>Excluir</button>
                                            
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
                        Nenhuma categoria encontrada!<br>
                        <a href="?page=cadastrar_categoria" class="alert-link">Clique aqui para cadastrar a primeira.</a>
                    </div>

                <?php } ?>

            </div>
        </div>
    </div>
</div>