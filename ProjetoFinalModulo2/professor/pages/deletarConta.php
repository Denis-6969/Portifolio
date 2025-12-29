                   
                   <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModalapUsuario">
                    Deletar Conta
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalapUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header backgroundescuro text-warning">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Deseja apagar este item?</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body backgroundform text-warning">
                            <form action="../function/deletarUsuario.php" method="post">
                                <input type="hidden" name="idForm" value="apUsuario">
                                <input type="hidden" name="id" value="<?php echo $dado['idUsuario']?>">
                                <span class="modal-title fs-6" id="staticBackdropLabel">Esta ação não será desfeita!</span>
                                <div class="modal-footer border-0">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Não</button>
                                    <button type="submit" class="btn btn-primary">Sim</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>