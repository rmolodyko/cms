<li>	
	<a class="sub_menu_a all <?php isnv('parentnav_id', 'active')?>" href="<?php url_base('structure/showall') ?>">
		Все
	</a>
</li>
<li>
	<a class="sub_menu_a <?php if(isv('new')):?>active<?php endif?>" id="newSSE" href="<?php module_url( 'form', 0,'parentnav_id')?>">
		<span class="icon icon-add-structure">.</span>Новый ЭСС
	</a>
</li>
<li>
	<a class="sub_menu_a" href="<?php url_base( 'material/form', 0, 'parentnav_id' )?>">
		<span class="icon icon_add">.</span>Новый материал
	</a>
</li>