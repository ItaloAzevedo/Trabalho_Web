Lista de especialidades



<div class="travel-select-icon">
    <select class="form-control " name="id_especialidade">
        <option value="default">Selecione a especialidade desejada</option>
        <?php foreach(  $lista_especialidades     as  $e ) {  ?>

                <option value="<?php echo $e['id']; ?>"> <?php echo $e['descricao']; ?></option><!-- /.option-->

       <?php 
            }

        ?>


    </select><!-- /.select-->
</div>