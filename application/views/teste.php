<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<?php echo $this->session->flashdata('msg')?>
      
       
      




<form method="post" action="<?=base_url('teste/insere')?>" enctype="multipart/form-data">
  <label for="fname">Name:</label><br>
  <input type="text" id="nome" name="nome" ><br>
  <input type="file" name="nome_arquivo">
  
  <input type="submit" value="Submit">
</form> 



</body>
</html>