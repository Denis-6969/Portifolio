<p class="display-6 text-center alert alert-primary mt-2">Responder uma pergunta</p>
<form action="" method="post" class="form-control p-5 backgroundescuro text-warning">
    <p class="lead">Busque aqui todas as perguntas disponíveis</p>
    <div class="form-control mb-2 backgroundform text-warning border-primary">
        <input type="hidden" name="idForm" value="searchPergunta">
        <label for="materia" class="form-label">Sobre qual máteria deseja responder?</label>
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
        <div class="mt-2">
            <button type="submit" class="btn btn-outline-primary text-warning fw-bold">Procurar</button>
        </div>
</form>

<!-- Tabela para mostrar os resultados -->
<?php require './tab_most_result_update_pergunta.php'; ?>