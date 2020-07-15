<?php include('includes/header.php')?>

<style>
.button {
  background-color: #4e73df;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.navbar {
  overflow: hidden;
  background-color: transparent;
  
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #f1f1f1;
  color: black;
}

.navbar a.active {
  background-color: #4CAF50;
  color: white;
}

.icon-bar {
  width: 100%;
  background: #072e55;
  overflow: auto;
  display: flex;    
}

.icon-bar a {
  float: left;  
  padding: 12px 0;
  transition: all 0.3s ease;
  color: white;
  padding-right: 20px;
}

.icon-bar a:hover{
    background: #e95950;
}

.active {
  background-color: #023052;
}

.icon-bar a:hover{
    text-decoration: none;
}

</style>


<div class="icon-bar">
  <a href="<?=base_url('admin')?>"><i class="fa fa-sign-in" style="background: none;"></i> Acesso Restrito</a>   
</div>



    <div class=" imgCadastro">
        <div class="logohome">
            <a href="<?=base_url()?>"><img src="https://amaerj.org.br/wp-content/uploads/2020/04/logo20202.png"></a>
        </div>        
    </div>    


    

<div class="container">
    <div class="container  bloco1">
        <div class="quadrado  ">
            <h2>Trabalhos Acadêmicos</h2>
            <a href="<?=base_url('trabalhos/trabalhosacademicos')?>"><img class="imagehome" src="https://amaerj.org.br/premio/wp-content/gallery/8o-premio-amaerj-patricia-acioli-de-direito-humanos/8-PPA_20.jpg"></a>
            <button class="button"><a href="<?=base_url('trabalhos/trabalhosacademicos')?>">Inscreva-se</a></button>         
        </div>
        <div class="quadrado">
            <h2>Trabalhos dos Magistrados</h2>
            <a href="<?=base_url('trabalhos/trabalhosdosmagistrados')?>"><img src="https://amaerj.org.br/premio/wp-content/gallery/8o-premio-amaerj-patricia-acioli-de-direito-humanos/8-PPA_19.jpg"></a>
            <button class="button"><a href="<?=base_url('trabalhos/trabalhosacademicos')?>">Inscreva-se</a></button>  
        </div>
    </div>  
    <div class="container bloco2">
        <div class="quadrado">
            <h2>Práticas Humanísticas</h2>
            <a href="<?=base_url('trabalhos/praticashumanisticas')?>"><img src="https://amaerj.org.br/premio/wp-content/gallery/8o-premio-amaerj-patricia-acioli-de-direito-humanos/8-PPA_6.jpg"></a>   
            <button class="button"><a href="<?=base_url('trabalhos/trabalhosacademicos')?>">Inscreva-se</a></button> 
        </div>
        <div class="quadrado">
            <h2>Reportagens Jornalísticas</h2>
            <a href="<?=base_url('trabalhos/reportagensjornalisticas')?>"><img src="https://amaerj.org.br/premio/wp-content/gallery/8o-premio-amaerj-patricia-acioli-de-direito-humanos/8-PPA_4.jpg"></a>
            <button class="button"><a href="<?=base_url('trabalhos/trabalhosacademicos')?>">Inscreva-se</a></button> 
        </div>  
    </div>    
</div>
<?php include('includes/footer.php')?>

<!-- /////////////////////////// -->

