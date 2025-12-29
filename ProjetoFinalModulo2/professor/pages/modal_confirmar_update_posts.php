                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModalUpPosts<?php echo $i;?>">
                    <i class="bi bi-pencil"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalUpPosts<?php echo $i;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header bg-primary-subtle">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body backgroundescuro">
                            <p class="display-6 text-center alert alert-primary mt-2">Atualizar um Post</p>
                            <form action="../function/update.php" method="post" enctype="multipart/form-data" class="form-control p-5 backgroundescuro border-primary text-warning">
                                <div class="form-control mb-2 backgroundform text-warning border-primary">
                                    <input type="hidden" name="idForm" value="upPosts">
                                    <input type="hidden" name="id" value="<?php echo $dado['id'];?>">
                                    <label for="nome" class="form-label">Título</label>
                                    <input type="text" name="nomePost" class="form-control bg-primary-subtle text-primary" value="<?php echo $dado['nomePost'];?>">
                                </div>
                                <div class="#">
                                    <input type="hidden" name="imgAntiga" class="form-control" value="<?php echo $dado['imgPost'];?>">
                                </div>
                                <div class="form-control mb-2 backgroundform text-warning border-primary">
                                    <label for="img" class="form-label">Imagem</label>
                                    <input type="file" name="imgPost" class="form-control bg-primary-subtle text-primary">
                                </div>
                                <div class="form-control backgroundform text-warning border-primary">
                                    <label for="desc" class="form-label">Descrição</label>
                                    <input type="text" name="descPost" class="form-control bg-primary-subtle text-primary" value="<?php echo $dado['descPost'];?>">
                                </div>
                                <div class="#">
                                    <input type="hidden" name="dataPost" class="form-controlbg-primary-subtle text-primary" value="<?php echo $dado['dataPost'];?>">
                                </div>
                                <div class="mt-2">
                                <button type="submit" class="btn btn-outline-primary text-warning fw-bold">Atualizar</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>