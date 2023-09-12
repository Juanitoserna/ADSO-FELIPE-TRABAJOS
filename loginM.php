<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
    <div class='fila'>
        <div>
            <?php echo validation_errors(); ?>
            
            
            <?php echo form_open('login'); ?>
            <label>Nombre de usuario:</label>
            <input type="text" name="nombre" /><br/>
            <label>Contraseña:</label>
            <input type="text" name="password" /><br>
            <input type="submit" value="Login" name="submit" />
            <?php echo form_close();?>
        </div>
    </div>