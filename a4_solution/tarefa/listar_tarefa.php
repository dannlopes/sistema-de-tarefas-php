<?php
    $sql = "SELECT * FROM tarefa AS t
            INNER JOIN usuario AS u
                ON t.usuario_id_usuario = u.id_usuario
            INNER JOIN responsavel AS r
                ON t.responsavel_id_responsavel = r.id_responsavel
            INNER JOIN categoria AS c
                ON t.categoria_id_categoria = c.id_categoria
            ORDER BY t.prazo_tarefa ASC"; 

    $res = $conn->query($sql);
    $qtd = $res->num_rows;
?>

<div class="row justify-content-center">
    <div class="col-md-12"> 
        <div class="card shadow border-0 rounded-3 mt-4">

            <div class="card-header bg-dark text-white py-3" style="background-color: transparent !important;">
                <h3 class="card-title text-center mb-0" style="color: #00828f">Gerenciamento de Tarefas</h3>
            </div>

            <div class="card-body p-4">
                
                <?php if($qtd > 0){ ?>

                    <div class="alert alert-secondary d-flex align-items-center" role="alert">
                        <i class="fas fa-check-circle me-2"></i>
                        <div>
                            Foram encontradas <strong><?php print $qtd; ?></strong> tarefas registradas.
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-bordered align-middle">
                            <thead class="table-dark">
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Tarefa</th>
                                    <th>Prazo</th>
                                    <th>Status</th>
                                    <th>Usuário</th>
                                    <th>Responsável</th>
                                    <th>Categoria</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while( $row = $res->fetch_object()){

                                        $status_color = 'bg-secondary';
                                        if($row->status_tarefa == 'Pendente') { 
                                            $status_color = 'bg-danger'; 
                                        } else if($row->status_tarefa == 'Em Andamento') { 
                                            $status_color = 'bg-warning text-dark'; 
                                        } else if($row->status_tarefa == 'Concluída') { 
                                            $status_color = 'bg-success';
                                        }

                                        $data_br = date('d/m/Y', strtotime($row->prazo_tarefa));

                                        print "<tr>";
                                        print "<td class='text-center fw-bold'>".$row->id_tarefa."</td>";
                                        print "<td><strong>".$row->titulo_tarefa."</strong></td>";
                                        
                                        print "<td class='text-center'>".$data_br."</td>";
                                        
                                        print "<td class='text-center'><span class='badge {$status_color}'>".$row->status_tarefa."</span></td>";
                                        
                                        print "<td>".$row->nome_usuario."</td>";
                                        print "<td>".$row->nome_responsavel."</td>";
                                        print "<td><span class='badge bg-light text-dark border'>".$row->nome_categoria."</span></td>";
                                        
                                        print "<td class='text-center' style='min-width: 110px;'>

                                                <button class='btn btn-warning btn-sm me-1' style='background-color: #00828f; border: #00828f; color: white;' onclick=\"location.href='?page=editar_tarefa&id_tarefa={$row->id_tarefa}';\" title='Editar'>Editar</i>
                                                </button>

                                                <button class='btn btn-danger btn-sm' style='background-color: #f92a5aff; border: #f92a5aff; color: white;' onclick=\"if(confirm('Tem certeza que deseja excluir esta tarefa?')){location.href='?page=salvar_tarefa&acao=excluir&id_tarefa={$row->id_tarefa}';}else{false;}\" title='Excluir'>Excluir</i>
                                                </button>
                                            
                                           </td>";   
                                        print "</tr>";       
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>

                <?php } else { ?>

                    <div class="alert alert-warning text-center" role="alert">
                        <i class="fas fa-clipboard-list fa-2x mb-3 d-block"></i>
                        Nenhuma tarefa encontrada!<br>
                        <a href="?page=cadastrar_tarefa" class="alert-link">Clique aqui para criar a primeira tarefa.</a>
                    </div>

                <?php } ?>

            </div>
        </div>
    </div>
</div>