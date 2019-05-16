<?=form_open('usuario-atualizar')?>
    <input type="hidden" name="Id" value="<?=$usuario['Id']?>">
    <table>
        <tr>
            <td>Título</td>
            <td><input type="text" name="usuario" value="<?=$usuario['usuario']?>"/></td>
        </tr>
        <tr>
            <td>Senha</td>
            <td><input type="password" name="senha" value="<?=$senha['senha']?>"/></td>
        </tr>
        
    </table>
    <input type="submit" value="atualizar"/>
<?=form_close()?>
<?=anchor('usuario-index','Voltar', array('class' => 'btn btn-secondary'))?>

