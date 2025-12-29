<?php require_once '../function/verificarLogin.php'; ?>
 
          <p class="display-6 text-center alert alert-primary mt-2">Publicar um Post</p>
          <form action="?page=status" enctype="multipart/form-data" method="post" class="form-control p-5 backgroundescuro text-warning">
            <h3>Instruções:</h3>
            <p><ul>
              <li>Aplique no máximo 5 imagens da sua aula</li>
              <li>Os formatos aceitos são .png e .jpeg</li>
            </ul></p>
            <p class="lead">Formulário de cadastro de Post, preencha com atenção os campos.</p>
            <div class="mb-2">
              <input type="hidden" name="form" value='cadPost'>
              <input type="hidden" name="idForm" value="postagem">
            </div>
            <div class="form-control backgroundform text-warning border-primary">
              <label for="subtitulo" class="form-label">Nome</label>
              <input type="text" name="nomePost" id="" class="form-control bg-primary-subtle text-primary">
            </div>
            <div class="form-control backgroundform text-warning border-primary">
              <label for="img" class="form-label">URL da imagem</label>
              <input type="file" name="imgPost" id="" class="form-control bg-primary-subtle text-primary">
            </div>
            <div class="form-control backgroundform text-warning border-primary">
              <label for="desc" class="form-label">Descrição</label>
              <input type="text" name="descPost" id="" class="form-control bg-primary-subtle text-primary">
            </div>
            <div class="form-control backgroundform text-warning border-primary">
              <label for="data" class="form-label">Data da publicação</label>
              <input type="date" name="dataPost" id="" class="form-control bg-primary-subtle text-primary">
            </div>
            <div class="#">
              <input type="hidden" name="criadorPost" id="" class="form-control" value="<?php echo $_SESSION['nome'] ?>">
            </div>

            <div class="mt-2">
              <button type="submit" class="btn btn-outline-primary text-warning fw-bold">Cadastrar</button>
            </div>
          </form>