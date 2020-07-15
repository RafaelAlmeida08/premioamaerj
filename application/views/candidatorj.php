<div class="container">
  <h1>Candidato: <?php echo $inscricao_nome;?></h1>
    <form>
      <div class="form-group">
        <label for="formGroupExampleInput">Coautor:</label>
        <input type="text" class="form-control unsec" id="formGroupExampleInput" placeholder="<?php echo $inscricao_coautor;?>">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Título do Trabalho:</label>
        <input type="text" class="form-control unsec" id="formGroupExampleInput" placeholder="<?php echo $inscricao_titulotrabalho;?>">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Descrição:</label>
        <textarea type="text" class="form-control unsec" id="formGroupExampleInput" placeholder="<?php echo $inscricao_descricao;?>"></textarea>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Matéria:</label>
        <a target="_blank" href="<?php echo $inscricao_link ?>" class="btn btn-success">Acessar</a>        
      </div>
      
      <?php echo '<td>'?> <a target="_blank" href="<?=base_url('uploads/inscricoes/reportagens/'. $inscricao_pdf)?>" class="btn btn-primary">Trabalho</a><? '</td>'; ?>

      <a href="<?=base_url('painel/reportagensjornalisticas')?>" class="btn btn-primary">Voltar</a>
      
    </form>
</div>