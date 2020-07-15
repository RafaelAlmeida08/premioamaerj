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
        <input type="text" class="form-control unsec" id="formGroupExampleInput" placeholder="<?php echo $inscricao_descricao;?>">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Matéria:</label>
        <a target="_blank" href="<?php echo $inscricao_linkMateria ?>" class="btn btn-success">Acessar</a>        
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Há quanto tempo a prática está em funcionamento?</label>
        <textarea type="text" class="form-control unsec" id="formGroupExampleInput" placeholder="<?php echo $inscricao_tempoFuncionamentoCadastro;?>"></textarea>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Qual a principal inovação da sua prática?</label>
        <textarea type="text" class="form-control unsec" id="formGroupExampleInput" placeholder="<?php echo $inscricao_inovacaoPraticaCadastro;?>"></textarea>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Explique o processo de implementação da prática:</label>
        <textarea type="text" class="form-control unsec" id="formGroupExampleInput" placeholder="<?php echo $inscricao_processoImplementacaoCadastro;?>"></textarea>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Quais os fatores de sucesso da sua prática?</label>
        <textarea type="text" class="form-control unsec" id="formGroupExampleInput" placeholder="<?php echo $inscricao_fatoresSucessoCadastro;?>"></textarea>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Descreva resumidamente as etapas de funcionamento da prática:</label>
        <textarea type="text" class="form-control unsec" id="formGroupExampleInput" placeholder="<?php echo $inscricao_etapasFuncionamentoCadastro;?>"></textarea>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Insfraestrutura:</label>
        <textarea type="text" class="form-control unsec" id="formGroupExampleInput" placeholder="<?php echo $inscricao_infraestruturaCadastro;?>"></textarea>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Equipe:</label>
        <textarea type="text" class="form-control unsec" id="formGroupExampleInput" placeholder="<?php echo $inscricao_equipeCadastro;?>"></textarea>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Orçamento:</label>
        <input type="text" class="form-control unsec" id="formGroupExampleInput" placeholder="<?php echo $inscricao_orcamentoCadastro;?>">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Qual é a função profissional da pessoa ou natureza dos serviços prestados pela instituição que está se inscrevendo?</label>
        <textarea type="text" class="form-control unsec" id="formGroupExampleInput" placeholder="<?php echo $inscricao_funcaoPessoaCadastro;?>"></textarea>
      </div> 
      <a href="<?=base_url('painel/praticashumanisticas')?>" class="btn btn-primary">Voltar</a>      
    </form>
</div>