<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Prêmio AMAERJ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?=base_url('painel')?>">Home <span class="sr-only">(Página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('painel/trabalhosacademicos')?>">Trabalhos Acadêmicos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('painel/trabalhosdosmagistrados')?>">Trabalhos dos Magistrados</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="<?=base_url('painel/praticashumanisticas')?>">Práticas Humanísticas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="<?=base_url('painel/reportagensjornalisticas')?>">Reportagens Jornalistícas</a>
      </li>
    </ul>
    <span class="navbar-text">
      <a class="nav-link " href="<?=base_url('admin/sair')?>">Sair <i class="fa fa-sign-out" aria-hidden="true"></i></a>
    </span>
  </div>
</nav>

<div class="container jumbopainel">
  <div class="jumbotron">
    <h1 class="display-4">Olá!</h1>
    <p class="lead">Este é o seu painel onde você terá acesso a todos os trabalhos registrados. No menu acima, você pode selecionar a categoria e visualizar todas as informações.</p>
    <hr class="my-4">
    <p>Está com algum problema? Envie um e-mail para <span style="color:red;">contato@rafaelalmeidadev.com</span></p>
    <!--<a class="btn btn-primary btn-lg" href="" role="button">Inscrições</a>-->
  </div>
</div>