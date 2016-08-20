<?

$module_name = 'marcas';

$config['modules'][$module_name] = array(
										 	'controller_name' => 'admin/marcas',
											'main_model' => 'admin/marcas_model',
										 	'module_label' => 'Marcas',
											'module_unit' => 'Marca',
										 );

$config['modules'][$module_name]['fields'] = array(

										'name' => array(	'label' => 'Nombre',
															'type' => 'text',
															'class' => 'title',
															'validation' => 'required',
															'visibility' => 'save|details|list'
														),
										'marca_url' => array(	'label' => 'Direccion del sitio de la marca',
															'type' => 'text',
															'class' => 'title',
															'validation' => '',
															'visibility' => 'save|details|list'
														),
										'main_image' => array(	'label' => 'Imagen Principal',
															'type' => 'image',
															'tag' => 'main_image',
															'validation' => '',
															'visibility' => 'details|save',
														),
										'active'	=> array(	'label' => 'Activo',
															'type' => 'checkbox',
															'value' => 1,
															'visibility' => 'save|details|list'
														),
										);

$config['modules'][$module_name]['top_menu_actions'] = array( 	'marcas_list' => array('url' => '#marcas/show_list','method' => 'show_list', 'class_name' => $config['modules'][$module_name], 'icon' => "ui-icon-clipboard", 'label' => "Listado de ".$config['modules'][$module_name]['module_label']),
																'add_marcas' => array('url' => '#marcas/create','method' => 'create', 'class_name' => $config['modules'][$module_name], 'icon' => "ui-icon-plusthick", 'label' => "Agregar ".$config['modules'][$module_name]['module_unit']));

$config['modules'][$module_name]['main_model_tabs'] = array( 	'details' => array( 'label' => 'Detalle',
								  			  	 				'url' => '#'.$module_name.'/details/'),
											'edit' => array( 	'label' => 'Editar',
											 					'url' => '#'.$module_name.'/edit/',
																),

																);

$config['modules'][$module_name]['datatable_actions'] = array( 	'details' => array( 'label' => 'Detalle',
								  			  	 				'url' => '#'.$module_name.'/details/'),
											'edit' => array( 	'label' => 'Editar',
											 					'url' => '#'.$module_name.'/edit/'),
											'delete' => array( 	'label' => 'Borrar',
																'dialog' => 'Borrar Marca?',
											 					'url' => '#'.$module_name.'/delete/'),
											);
?>