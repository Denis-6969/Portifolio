<?php require_once "../function/cad_pergunta.php" ?>

  <div class="container mt-5 text-primary">
    <h2 class="text-center mb-4">Faça sua Pergunta</h2>
    
    <form class="card p-4 shadow-sm backgroundform text-warning" action="" method="post">
      <!-- Barra de pesquisa -->
      <div class="mb-3">
        <input type="hidden" name="form" value="cadPergunta">
        <input type="hidden" name="questionador" value="<?php echo $_SESSION['nome'] ?>">
        <label for="pergunta" class="form-label">Digite sua pergunta:</label>
        <input type="text" class="form-control bg-primary-subtle text-primary" name="pergunta" id="pergunta" placeholder="Ex: Qual é a fórmula da área do círculo?">
      </div>

      <!-- Select de matérias -->
      <div class="mb-3">
        <label for="materia" class="form-label">Selecione a matéria:</label>
        <select class="form-select bg-primary-subtle text-primary" name="materia" id="materia">
          <option selected disabled>Escolha uma matéria</option>
          <option value="portugues">Português</option>
          <option value="matematica">Matemática</option>
          <option value="fisica">Física</option>
          <option value="quimica">Química</option>
          <option value="historia">História</option>
          <option value="geografia">Geografia</option>
        </select>
      </div>

      <!-- Botão -->
      <div class="d-grid">
        <button type="submit" class="btn btn-outline-primary text-warning fw-bold w-100">Enviar Pergunta</button>
        <?php cadastroPerguntas() ?>
      </div>
    </form>
  </div>


