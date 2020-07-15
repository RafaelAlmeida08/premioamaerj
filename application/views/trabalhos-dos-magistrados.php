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

             <p><b>Categoria:</b> <span style="color: red;">Trabalhos dos Magistrados</span></p>

             <p>Podem participar Magistrados que tenham em curso projetos que valorizem os Direitos Humanos e Cidadania. Os trabalhos dos deverão ser anexados em arquivo PDF, com no mínimo oito e no máximo vinte laudas.</p>

             <p>Os concorrentes deverão utilizar exclusivamente <b>pseudônimos</b> nos trabalhos, não podendo haver qualquer texto que o identifique, dedicatória ou agradecimento. Os trabalhos deverão observar de oito até vinte laudas.</p>

         </div>    

         <div class="row">
                <div class="col-lg-8">

             <div class="container formCadastro">
        <?php echo form_open_multipart('trabalhosmagistrados/cadastrar'); ?>     

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
                <input pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" required onfocus="masktel();" name="telefoneCadastro" id="telefoneCadastro" class="form-control inputCadastro"  type="text"><br>

                <label for="cpfCadastro">CPF:</label>
                <input required id="cpf" name="cpfCadastro" onfocus="maskcpf()"  maxlength="14" class="form-control inputCadastro"  type="text"><br>

                <label for="titulotrabalhoCadastro">Título do Trabalho:</label>
                <input required name="titulodotrabalhoCadastro" class="form-control inputCadastro"  type="text"><br>

                <label for="descricaoCadastro">Descrição:</label>
                <textarea required class="form-control" name="descricaoCadastro" maxlength="300"></textarea><br>

                <label for="pdfCadastro">Arquivo:</label>
                <input type="file" required class="form-control-file" name="pdfCadastro" ></textarea><br>                        

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

    