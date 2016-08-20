<?

$module_name = 'prensa';

$config['modules'][$module_name] = array(
										 	'controller_name' => 'admin/prensa',
											'main_model' => 'admin/prensa_model',
										 	'module_label' => 'News',
											'module_unit' => 'New',
										 );

$config['modules'][$module_name]['fields'] = array(

										'name' => array(	'label' => 'Nombre',
															'type' => 'text',
															'class' => 'title',
															'validation' => 'required',
															'visibility' => 'save|details|list'
														),
										'date_release' => array(	'label' => 'Fecha de publicación',
															'type' => 'text',
															'class' => 'title',
															'validation' => '',
															'visibility' => 'save|details|list'
														),
										'publisher' => array(	'label' => 'Medio publicado',
															'type' => 'text',
															'class' => 'title',
															'validation' => '',
															'visibility' => 'save|details|list'
														),
										'youtube_url' => array(	'label' => 'Link del video',
															'type' => 'text',
															'class' => 'title',
															'validation' => '',
															'visibility' => 'save|details|list'
														),
										'mini_image' => array(	'label' => 'Imagen del listado',
															'type' => 'image',
															'tag' => 'mini_image',
															'validation' => '',
															'visibility' => 'details|save',
														),
										'main_image' => array(	'label' => 'Imagen Principal',
															'type' => 'image',
															'tag' => 'main_image',
															'validation' => '',
															'visibility' => 'details|save',
														),
										'category' => array( 'label' => 'Categoria',
															'type' => 'select',
															'options' => array(
																				0 => array("value" => "text", "label" => "Nota"),
																				1 => array("value" => "video", "label" => "Video"),
																			),
															'validation' => 'required',
															'visibility' => 'details|save|list',
														),
										'active'	=> array(	'label' => 'Activo',
															'type' => 'checkbox',
															'value' => 1,
															'visibility' => 'save|details|list'
														),
										);

$config['modules'][$module_name]['top_menu_actions'] = array( 	'prensa_list' => array('url' => '#prensa/show_list','method' => 'show_list', 'class_name' => $config['modules'][$module_name], 'icon' => "ui-icon-clipboard", 'label' => "Listado de ".$config['modules'][$module_name]['module_label']),
																'add_prensa' => array('url' => '#prensa/create','method' => 'create', 'class_name' => $config['modules'][$module_name], 'icon' => "ui-icon-plusthick", 'label' => "Agregar ".$config['modules'][$module_name]['module_unit']));

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
																'dialog' => 'Borrar New?',
											 					'url' => '#'.$module_name.'/delete/'),
											);
?>