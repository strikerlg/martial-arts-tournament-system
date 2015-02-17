<?php /* Smarty version 2.6.20, created on 2012-03-11 18:40:58
         compiled from edit_division.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'edit_division.tpl', 1, false),array('function', 'html_options', 'edit_division.tpl', 47, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "test.conf",'section' => 'setup'), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="main_pane">


<div id="command">
<p>
<?php echo $this->_tpl_vars['command']; ?>

</p>
</div>

<div id="primary_<?php echo $this->_tpl_vars['level']; ?>
">
<p>
<?php echo $this->_tpl_vars['primary']; ?>

</p>
</div>

<div id="error_string">
<p>
<?php unset($this->_sections['error_list']);
$this->_sections['error_list']['name'] = 'error_list';
$this->_sections['error_list']['loop'] = is_array($_loop=$this->_tpl_vars['error_string']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['error_list']['show'] = true;
$this->_sections['error_list']['max'] = $this->_sections['error_list']['loop'];
$this->_sections['error_list']['step'] = 1;
$this->_sections['error_list']['start'] = $this->_sections['error_list']['step'] > 0 ? 0 : $this->_sections['error_list']['loop']-1;
if ($this->_sections['error_list']['show']) {
    $this->_sections['error_list']['total'] = $this->_sections['error_list']['loop'];
    if ($this->_sections['error_list']['total'] == 0)
        $this->_sections['error_list']['show'] = false;
} else
    $this->_sections['error_list']['total'] = 0;
if ($this->_sections['error_list']['show']):

            for ($this->_sections['error_list']['index'] = $this->_sections['error_list']['start'], $this->_sections['error_list']['iteration'] = 1;
                 $this->_sections['error_list']['iteration'] <= $this->_sections['error_list']['total'];
                 $this->_sections['error_list']['index'] += $this->_sections['error_list']['step'], $this->_sections['error_list']['iteration']++):
$this->_sections['error_list']['rownum'] = $this->_sections['error_list']['iteration'];
$this->_sections['error_list']['index_prev'] = $this->_sections['error_list']['index'] - $this->_sections['error_list']['step'];
$this->_sections['error_list']['index_next'] = $this->_sections['error_list']['index'] + $this->_sections['error_list']['step'];
$this->_sections['error_list']['first']      = ($this->_sections['error_list']['iteration'] == 1);
$this->_sections['error_list']['last']       = ($this->_sections['error_list']['iteration'] == $this->_sections['error_list']['total']);
?>
<?php echo $this->_tpl_vars['error_string'][$this->_sections['error_list']['index']]; ?>
</br>
<?php endfor; endif; ?>
</p>
</div>

<?php if ($this->_tpl_vars['delete_success']): ?>

<?php else: ?>
<form action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="post" enctype="multipart/form-data">
	
	<table border="1">
		<tr>
	        <td>ID</td>
	        <td><?php echo $this->_tpl_vars['division']['ID']; ?>
<input type="hidden" name="ID" value="<?php echo $this->_tpl_vars['division']['ID']; ?>
"></td>
	    </tr>
	    <tr>
	        <td>Sequence</td>
	        <td><input type="text" name="Sequence" value="<?php echo $this->_tpl_vars['division']['SEQUENCE']; ?>
" size="5"></td>
	    </tr>
	    <tr>
	        <td>Name</td>
	        <td><input type="text" name="Name" value="<?php echo $this->_tpl_vars['division']['NAME']; ?>
" size="40"></td>
	    </tr>
   		<tr>
	        <td>Event Type</td>
	        <td><?php echo smarty_function_html_options(array('name' => "Event_ID[]",'size' => 10,'options' => $this->_tpl_vars['events_list'],'selected' => $this->_tpl_vars['division']['EVENT_ID']), $this);?>
</td>
	    </tr>
	     <tr>
	        <td>Draw Type</td>
	        <td><select name="Type"><option value="Repercharge" <?php if ($this->_tpl_vars['division']['TYPE'] == 'Repercharge'): ?> selected="selected"<?php endif; ?>>Repercharge</option>
	        <option value="Elimination" <?php if ($this->_tpl_vars['division']['TYPE'] == 'Elimination'): ?> selected="selected"<?php endif; ?>>Elimination</option>
	        <option value="Form_Individual" <?php if ($this->_tpl_vars['division']['TYPE'] == 'Form_Individual'): ?> selected="selected"<?php endif; ?>>Form (Individual)</option>
	        <option value="Form_Team" <?php if ($this->_tpl_vars['division']['TYPE'] == 'Form_Team'): ?> selected="selected"<?php endif; ?>>Form (Team)</option>
	        <option value="Round_Robin" <?php if ($this->_tpl_vars['division']['TYPE'] == 'Round_Robin'): ?> selected="selected"<?php endif; ?>>Round Robin</option>	        
	        <option value="Generic" <?php if ($this->_tpl_vars['division']['TYPE'] == 'Generic'): ?> selected="selected"<?php endif; ?>>Generic</option>
	        </select></td>
	    </tr>
   		<tr>
	        <td>Section</td>
	        <td><?php echo smarty_function_html_options(array('name' => "Section_ID[]",'size' => 10,'options' => $this->_tpl_vars['sections_list'],'selected' => $this->_tpl_vars['division']['SECTION_ID']), $this);?>
</td>
	    </tr>
	    <tr>
	        <td>Sparring</td>
	        <td></td>
	    </tr> 		    
	    <tr>
	        <td>Rounds</td>
	        <td><input type="text" name="Rounds" value="<?php echo $this->_tpl_vars['division']['ROUNDS']; ?>
" size="5"></td>
	    </tr> 	    
	    <tr>
	        <td>Round (mins)</td>
	        <td><input type="text" name="Round_Min" value="<?php echo $this->_tpl_vars['division']['ROUND_MIN']; ?>
" size="5"></td>
	    </tr>	  
	    <tr>
	        <td>Break (mins)</td>
	        <td><input type="text" name="Break_Min" value="<?php echo $this->_tpl_vars['division']['BREAK_MIN']; ?>
" size="5"></td>
	    </tr>
	     <tr>
	        <td>Minor Final</td>
	        <td><select name="Minor_Final">
	        <option value="3rd4th" <?php if ($this->_tpl_vars['division']['MINOR_FINAL'] == '3rd4th'): ?> selected="selected"<?php endif; ?>>3rd4th</option>
	        <option value="3rd3rd" <?php if ($this->_tpl_vars['division']['MINOR_FINAL'] == '3rd3rd'): ?> selected="selected"<?php endif; ?>>3rd3rd</option>
			<option value="1stonly" <?php if ($this->_tpl_vars['division']['MINOR_FINAL'] == '1stonly'): ?> selected="selected"<?php endif; ?>>1st only</option>
	        <option value="None" <?php if ($this->_tpl_vars['division']['MINOR_FINAL'] == 'None'): ?> selected="selected"<?php endif; ?>>None</option></select></td>
	    </tr>		    	
	    <tr>
	        <td>Forms</td>
	        <td></td>
	    </tr>   
	    <tr>
	        <td>Technique 1</td>
	        <td><input type="text" name="Technique1" value="<?php echo $this->_tpl_vars['division']['TECHNIQUE1']; ?>
" size="40"></td>
	    </tr>
	    <tr>
	        <td>Technique 2</td>
	        <td><input type="text" name="Technique2" value="<?php echo $this->_tpl_vars['division']['TECHNIQUE2']; ?>
" size="40"></td>
	    </tr>
	    <tr>
	        <td>Technique 3</td>
	        <td><input type="text" name="Technique3" value="<?php echo $this->_tpl_vars['division']['TECHNIQUE3']; ?>
" size="40"></td>
	    </tr>
	    <tr>
	        <td>Technique 4</td>
	        <td><input type="text" name="Technique4" value="<?php echo $this->_tpl_vars['division']['TECHNIQUE4']; ?>
" size="40"></td>
	    </tr>
	    <tr>
	        <td>Technique 5</td>
	        <td><input type="text" name="Technique5" value="<?php echo $this->_tpl_vars['division']['TECHNIQUE5']; ?>
" size="40"></td>
	    </tr>	    	    	    	    	        	      
	    <tr>
	        <td colspan="2" align="center"><input type="submit" value="Submit" name="Submit">&nbsp;&nbsp;<input type="submit" value="Delete" name="Delete"></td>
	    </tr>

</form>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

</body>
