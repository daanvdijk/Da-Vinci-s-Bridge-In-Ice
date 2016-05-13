<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='FHICT Instellingen' executable='0' access_level='10' hidden='1'>

	<cms:editable name='menu_code' label='Menu Code' type='textarea' height='400' no_xss_check='1'></cms:editable>
	<cms:editable name='head_code' label='Head Code' type='textarea' no_xss_check='1'></cms:editable>
	<cms:editable name='footer_code' label='Footer Code' type='textarea' height='400' no_xss_check='1'></cms:editable>
	
</cms:template>
<?php COUCH::invoke(); ?>

