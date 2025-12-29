<?php require_once "../function/cad_contato.php"; ?>
<section class="py-5">
  <div class="container">
    <h2 class="text-center text-primary mb-4">Entre em Contato</h2>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card border-primary shadow">
          <div class="card-body backgroundform">
            <form method="post" class="backgroundform text-warning">
              <div class="mb-3">
                <input type="hidden" name="form" value="cadContato">
                <label for="nome" class="form-label">Nome</label>
                <input type="hidden" name="nome" value="<?php echo $nome ?>">
                <input type="text" class="form-control bg-primary-subtle text-primary" disabled name="" id="" placeholder="" value="<?php echo $nome ?>">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="hidden" name="email" value="<?php echo $email ?>">
                <input type="email" class="form-control bg-primary-subtle text-primary" disabled name="" id="" placeholder="" value="<?php echo $email ?>">
              </div>
              <div class="mb-3">
                <label for="mensagem" class="form-label">Mensagem</label>
                <textarea class="form-control bg-primary-subtle text-primary" name="mensagem" id="mensagem" rows="5" placeholder="Digite sua mensagem"></textarea>
              </div>
              <button type="submit" class="btn btn-outline-primary text-warning fw-bold">
                Enviar
              </button>
              <!-- Botão -->
              <div class="d-grid">
                <?php cadastroContato() ?>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>