<?

$module_name = 'slider';

$config['modules'][$module_name] = array(
										 	'controller_name' => 'admin/slider',
											'main_model' => 'admin/slider_model',
										 	'module_label' => 'Diapositivas',
											'module_unit' => 'Diapositiva',
										 );

$config['modules'][$module_name]['fields'] = array(
										
										'title' => array(	'label' => 'Titulo',
															'type' => 'text',
															'class' => 'title',
															'description' => 'Máximo 120 carácteres',
															'validation' => 'required',
															'visibility' => 'save|details|list'
														),
										'description' => array(	'label' => 'Descripción',
															'type' => 'text',
															'class' => 'title',
															'validation' => 'required',
															'description' => 'Máximo 200 carácteres',
															'visibility' => 'details|save',
														),
										'slide_url' => array(	'label' => 'URL del botón',
															'type' => 'text',
															'class' => 'title',
															'validation' => '',
															'description' => 'Incluir http://',
															'visibility' => 'details|save',
														),
										'main_image' => array(	'label' => 'Imagen Principal',
															'type' => 'image',
															'tag' => 'main_image',
															'validation' => '',
															'description' => 'Tamaño 1200 x 600px',
															'visibility' => 'details|save',
														),
										'active'	=> array(	'label' => 'Activo',
															'type' => 'checkbox',
															'value' => 1,
															'visibility' => 'save|details|list'
														),
										'date_created' => array(	'label' => 'Agregado',
															'type' => 'date_time',
															'filter' => 'date_range_filter',
															'visibility' => 'details|list'
														),
										);

$config['modules'][$module_name]['top_menu_actions'] = array( 	'slider_list' => array('url' => '#slider/show_list','method' => 'show_list', 'class_name' => $config['modules'][$module_name], 'icon' => "ui-icon-clipboard", 'label' => "Listado de ".$config['modules'][$module_name]['module_label']),
																'add_slider' => array('url' => '#slider/create','method' => 'create', 'class_name' => $config['modules'][$module_name], 'icon' => "ui-icon-plusthick", 'label' => "Agregar ".$config['modules'][$module_name]['module_unit']));

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
																'dialog' => 'Borrar Diapositiva?',
											 					'url' => '#'.$module_name.'/delete/'),
											);
?>