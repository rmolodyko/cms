<li>
	<a class="sub_menu_a <?php if(isv('all_materials')):?>active<?php endif?>" href="<?php url_base('material')?>">
		Все
	</a>
</li>
<li>
	<a class="sub_menu_a <?php if(isv('new_material')):?>active<?php endif?>" href="<?php url_base( 'material/form',0,'cmsnav_id');?>">
		<span class="icon icon_add">.</span>Новый материал
	</a>
</li>