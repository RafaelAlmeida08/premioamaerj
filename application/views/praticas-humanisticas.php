<?php include('includes/header.php')?>

        <div class=" imgCadastro">
            <a href="<?=base_url()?>"><img src="https://amaerj.org.br/wp-content/uploads/2020/04/logo20202.png"></a>
        </div>

        <?php if($this->session->flashdata('sucesso')) {?>
         <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('sucesso');}?>
         </div>

         <?php if($this->session->flashdata('erro')) {?>
         <div class="alert alert-danger" role="alert">
            <?php echo $this->session->flashdata('erro');}?>
         </div>


         <div class="container-fluid"id="main">

             
         <div class="desc">
             <p><b>Categoria:</b> <span style="color: red;">Práticas Humanísticas</span></p>
             <p>Podem participar cidadãos e entidades que se destaquem pela criação, planejamento, implementação e institucionalização de práticas voltadas para os Direitos Humanos e Cidadania. </p>
         </div>
             
         <div class="row">
            <div class="col-lg-8">

             <div class="container formCadastro">

                <?php echo form_open_multipart('praticashumanisticas/cadastrar'); ?> 

                     <div class="form-group form-group-Cadastro">



                        <label for="nomeCadastro">Nome:</label>

                        <input required name="nomeCadastro" class="form-control inputCadastro" type="text"><br>



                        <label for="coautorCadastro">Coautor:</label>

                        <input required name="coautorCadastro" class="form-control inputCadastro"  type="text"><br>



                        <label for="profissaoCadastro">Profissão:</label>

                        <input required name="profissaoCadastro" class="form-control inputCadastro"  type="text"><br>



                        <label for="emailCadastro">Email:</label>

                        <input required name="emailCadastro" class="form-control inputCadastro"  type="email"><br>



                        <label for="telefoneCadastro">Telefone:</label>

                        <input pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" required onfocus="masktel();" id="telefoneCadastro"  name="telefoneCadastro" class="form-control inputCadastro"  type="text"><br>



                        <label for="cpfCadastro">CPF:</label>

                        <input required name="cpfCadastro" id="cpfCadastro" onfocus="maskcpf();" maxlength="14" class="form-control inputCadastro"  type="text"><br>



                        <label for="titulotrabalhoCadastro">Título do Trabalho:</label>

                        <input required name="titulodotrabalhoCadastro" class="form-control inputCadastro"  type="text"><br>



                        <label for="descricaoCadastro">Descrição:</label>

                        <textarea required class="form-control" name="descricaoCadastro" maxlength="300"></textarea><br>



                        <label for="titulotrabalhoCadastro">Link da matéria ou vídeo:</label>

                        <input required name="linkMateriaCadastro" class="form-control inputCadastro"  type="text"><br>



                        <label for="titulotrabalhoCadastro">Há quanto tempo a prática está em funcionamento?</label>

                        <textarea required name="tempoFuncionamentoCadastro" class="form-control inputCadastro"></textarea><br>



                        <label for="titulotrabalhoCadastro">Qual a principal inovação da sua prática?</label>

                        <textarea required name="inovacaoPraticaCadastro" class="form-control inputCadastro"></textarea><br>



                        <label for="titulotrabalhoCadastro">Explique o processo de implementação da prática</label>

                        <textarea required name="processoImplementacaoCadastro" class="form-control inputCadastro"></textarea><br>



                        <label for="titulotrabalhoCadastro">Quais os fatores de sucesso da prática?</label>

                        <textarea required name="fatoresSucessoCadastro" class="form-control inputCadastro"></textarea><br>



                        <label for="titulotrabalhoCadastro">Descreva resumidamente as etapas de funcionamento da prática</label>

                        <textarea required name="etapasFuncionamentoCadastro" class="form-control inputCadastro"></textarea><br>



                        <label for="titulotrabalhoCadastro">Infraestrutura:</label>

                        <textarea required name="infraestruturaCadastro" class="form-control inputCadastro"></textarea><br>



                        <label for="titulotrabalhoCadastro">Equipe:</label>

                        <textarea required name="equipeCadastro" class="form-control inputCadastro"></textarea><br>



                        <label for="titulotrabalhoCadastro">Orçamento:</label>

                        <textarea required name="orcamentoCadastro" class="form-control inputCadastro"></textarea><br>



                        <label for="titulotrabalhoCadastro">Qual é a função profissional da pessoa ou natureza dos serviços prestados pela instituição que está se inscrevendo?</label>

                        <textarea required name="funcaoPessoaCadastro" class="form-control inputCadastro"></textarea><br>



                        <button class="buttonCadastro btn btn-primary">Enviar</button>



                    </div>

                 </form>               

             </div>

         </div>

         <div class="imagemAmaerj" >
                    <a><img src="https://i.imgur.com/BYC6m4c.png"></a>
                </div>
        </div>
</div>

         

         <?php include('includes/footer.php')?>

    