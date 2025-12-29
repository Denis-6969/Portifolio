 <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModalUpPosts<?php echo $i; ?>">
     <i class="bi bi-pencil"></i>
 </button>

 <!-- Modal -->
 <div class="modal fade" id="exampleModalUpPosts<?php echo $i; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header bg-primary-subtle">
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body backgroundescuro">
                 <p class="display-6 text-center alert alert-primary mt-2">Responder Pergunta</p>
                 <form action="../function/updatePergunta.php" method="post" class="form-control p-5 backgroundescuro border-primary text-warning">
                     <div class="form-control mb-2 backgroundform text-warning border-primary">
                         <input type="hidden" name="idForm" value="upPergunta">
                         <input type="hidden" name="id" value="<?php echo $dado['idPergunta']; ?>">
                         <label for="nome" class="form-label">Questionador</label>
                         <input type="text" name="questionador" disabled class="form-control bg-primary-subtle text-primary" disabled value="<?php echo $dado['questionador']; ?>">
                     </div>
                     <div class="form-control mb-2 backgroundform text-warning border-primary">
                         <label for="pergunta" class="form-label">Pergunta</label>
                         <input type="text" name="pergunta" class="form-control bg-primary-subtle text-primary" disabled value="<?php echo $dado['pergunta']; ?>">
                     </div>
                     <div class="form-control backgroundform text-warning border-primary">
                         <label for="res" class="form-label">Resposta</label>
                         <input type="text" name="resposta" class="form-control bg-primary-subtle text-primary">
                     </div>
                     <div class="#">
                         <input type="hidden" name="status" class="form-control bg-primary-subtle text-primary" value="respondido">
                     </div>
                     <div class="mt-2">
                         <button type="submit" class="btn btn-outline-primary text-warning fw-bold">Responder</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>