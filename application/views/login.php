<div class=" imgCadastro">

            <a href="<?=base_url()?>"><img src="https://amaerj.org.br/wp-content/uploads/2020/04/logo20202.png"></a>

</div>





<!--

<div class="container">

    <?php //echo form_open('admin/entrar'); ?> 

        <div class="form-group">

            <label for="emailLogin">E-mail:</label><input class="form-control" type="email" name="emailLogin" id="emailLogin">

            <label for="senhaLogin">Senha:</label><input class="form-control" type="password" name="senhaLogin" id="senhaLogin">

            <button type="submit" class="buttonCadastro btn btn-primary">Entrar</button>

        </div>

</div>

-->





<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<div class="container">
    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <?php if($this->session->flashdata('erro_login')) {?>
            <div class="alert alert-danger" role="alert">
        <?php echo $this->session->flashdata('erro_login');}?>
            </div>
    </div>
</div>

<div class="container">
    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <?php if($this->session->flashdata('logout_sucesso')) {?>
            <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('logout_sucesso');}?>
            </div>
    </div>
</div>

    <div class="container">         
        <h1 style="text-align: center;">Área Administrativa</h1>
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">               
                     
            <div class="panel panel-info" >
                       

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" method="post" action="<?=base_url('admin/entrar')?>" role="form">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input name="emailLogin" id="emailLogin" type="email" class="form-control" value="" placeholder="E-mail">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input name="senhaLogin" id="senhaLogin" type="password" class="form-control"  placeholder="Senha">
                                    </div>    

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                        <button type="submit" class="buttonCadastro btn btn-primary">Entrar</button>                         
                                    </div>
                                </div>
                            </form>     
                        </div>                     
                </div>  
        </div>
   