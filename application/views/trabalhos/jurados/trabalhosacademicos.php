
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?=base_url('')?>">Prêmio AMAERJ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="<?=base_url('juradota')?>">Home </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?=base_url('juradota/trabalhosacademicos')?>">Trabalhos Acadêmicos <span class="sr-only">(Página atual)</span></a>
      </li>     
    </ul>
    <span class="navbar-text">
      <a class="nav-link " href="<?=base_url('admin/sair')?>">Sair <i class="fa fa-sign-out" aria-hidden="true"></i></a>
    </span>
  </div>
</nav>

<div class= "container table-responsive">
<?php  $contador = 0; ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Incrição</th>
      <th scope="col">E-mail</th>
      <th scope="col">Telefone</th>
      <th scope="col">Trabalho</th>
      <th scope="col">Candidato</th>
    </tr>
  </thead>
  <tbody>  

    <?
    foreach($trabalhos as $trabalho)
    {
        echo '<tr>'; 
        echo '<td>' .$trabalho->inscricao_nome. '</td>';
        echo '<td>' .$trabalho->inscricao_id. '</td>';        
        echo '<td>' .$trabalho->inscricao_email. '</td>';
        echo '<td>' .$trabalho->inscricao_telefone. '</td>';        
        echo '<td>'?> <a target="_blank" href="<?=base_url('uploads/inscricoes/academicos/'. $trabalho->inscricao_pdf)?>" class="btn btn-primary">Acessar</a><? '</td>';
        echo '<td>'?> <a  href="<?=base_url('juradota/candidatotrabalhosacademicos/'. $trabalho->inscricao_id)?>" class="btn btn-primary">Ficha</a><? '</td>';
        echo '</tr>'; 
     
        $contador++;
    }
    ?> 

  </tbody>
</table>

