<div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <div class="card shadow-lg backgroundescuro text-warning">
          <div class="card-body">
            <h3 class="card-title text-center mb-4">Configurar Perfil</h3>
            
            <!-- Formulário -->
            <form method="post" action="../function/updatePerfil.php">
            <input type="hidden" name="idForm" value="upPerfil">
            <input type="hidden" name="email" value="<?php echo $email?>">

              <!-- Telefone -->
              <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="tel" class="form-control bg-primary-subtle text-primary" id="telefone" name="telefone" placeholder="(31) 99999-9999">
              </div>

              <!-- Localização -->
              <div class="mb-3">
                <label for="localizacao" class="form-label">Localização</label>
                <select class="form-select bg-primary-subtle text-primary" name="localizacao" id="localizacao">
            <option selected disabled>Escolha seu estado</option>
            <option value="Acre (AC)">Acre (AC)</option>
            <option value="Alagoas (AL)">Alagoas (AL)</option>
            <option value="Amapá (AP)">Amapá (AP)</option>
            <option value="Amazonas (AM)">Amazonas (AM)</option>
            <option value="Bahia (BA)">Bahia (BA)</option>
            <option value="Ceará (CE)">Ceará (CE)</option>
            <option value="Espírito Santo (ES)">Espírito Santo (ES)</option>
            <option value="Goiás (GO)">Goiás (GO)</option>
            <option value="Maranhão (MA)">Maranhão (MA)</option>
            <option value="Mato Grosso (MT)">Mato Grosso (MT)</option>
            <option value="Mato Grosso do Sul (MS)">Mato Grosso do Sul (MS)</option>
            <option value="Minas Gerais (MG)">Minas Gerais (MG)</option>
            <option value="Pará (PA)">Pará (PA)</option>
            <option value="Paraíba (PB)">Paraíba (PB)</option>
            <option value="Paraná (PR)">Paraná (PR)</option>
            <option value="Pernambuco (PE)">Pernambuco (PE)</option>
            <option value="Piauí (PI)">Piauí (PI)</option>
            <option value="geografRio de Janeiro (RJ)ia">Rio de Janeiro (RJ)</option>
            <option value="Rio Grande do Norte (RN)">Rio Grande do Norte (RN)</option>
            <option value="Rio Grande do Sul (RS)">Rio Grande do Sul (RS)</option>
            <option value="Rondônia (RO)">Rondônia (RO)</option>
            <option value="Roraima (RR)">Roraima (RR)</option>
            <option value="Santa Catarina (SC)">Santa Catarina (SC)</option>
            <option value="ão Paulo (SP)">São Paulo (SP)</option>
            <option value="Sergipe (SE)">Sergipe (SE)</option>
            <option value="Tocantins (TO)">Tocantins (TO)</option>
        </select>
              </div>

              <!-- Sobre -->
              <div class="mb-3">
                <label for="sobre" class="form-label">Sobre</label>
                <textarea class="form-control bg-primary-subtle text-primary" id="sobre" name="sobre" rows="4" placeholder="Escreva uma breve descrição sobre você"></textarea>
              </div>

              <!-- Botões -->
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-outline-primary text-warning fw-bold">Salvar Alterações</button>
                <a href="?page=perfil" class="btn btn-outline-danger">Cancelar</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
