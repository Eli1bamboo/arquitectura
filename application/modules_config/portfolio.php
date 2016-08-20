<?

$module_name = 'portfolio';

$config['modules'][$module_name] = array(
										 	'controller_name' => 'admin/portfolio',
											'main_model' => 'admin/portfolio_model',
										 	'module_label' => 'Obras',
											'module_unit' => 'Obra',
										 );

$config['modules'][$module_name]['fields'] = array(

										'name' => array(	'label' => 'Nombre',
															'type' => 'text',
															'class' => 'title',
															'validation' => 'required',
															'visibility' => 'save|details|list'
														),
										'description'=> array(	'label' => 'Detalle',
															'type' => 'textarea',
															'class' => 'summernote',
															'validation' => '',
															'visibility' => 'save|details'
														),
										'main_image' => array(	'label' => 'Imagen Principal',
															'type' => 'image',
															'tag' => 'main_image',
															'validation' => '',
															'visibility' => 'details|save',
														),
										'image_gallery' => array(	'label' => 'Galería de Imágenes',
																	'type' => 'image',
																	'validation' => '',
																	'descriptions' => true,
																	'visibility' => 'media_gallery',
																	),
										'category' => array( 'label' => 'Categoria',
															'type' => 'select',
															'options' => array(
																				0 => array("value" => "anvers", "label" => "Anvers"),
																				1 => array("value" => "campo", "label" => "Campo"),
																				2 => array("value" => "encargado", "label" => "Encargado"),
																				3 => array("value" => "galpones", "label" => "Galpones"),
																				4 => array("value" => "boxes", "label" => "Boxes"),
																			),
															'visibility' => 'details|save|list',
														),
										'active'	=> array(	'label' => 'Activo',
															'type' => 'checkbox',
															'value' => 1,
															'visibility' => 'save|details|list'
														),
										);

$config['modules'][$module_name]['top_menu_actions'] = array( 	'portfolio_list' => array('url' => '#portfolio/show_list','method' => 'show_list', 'class_name' => $config['modules'][$module_name], 'icon' => "ui-icon-clipboard", 'label' => "Listado de ".$config['modules'][$module_name]['module_label']),
																'add_portfolio' => array('url' => '#portfolio/create','method' => 'create', 'class_name' => $config['modules'][$module_name], 'icon' => "ui-icon-plusthick", 'label' => "Agregar ".$config['modules'][$module_name]['module_unit']));

$config['modules'][$module_name]['main_model_tabs'] = array( 	'details' => array( 'label' => 'Detalle',
								  			  	 				'url' => '#'.$module_name.'/details/'),
											'edit' => array( 	'label' => 'Editar',
											 					'url' => '#'.$module_name.'/edit/',
																),
																'media_gallery' => array( 'label' => 'Galer&iacute;a',
																'url' => '#'.$module_name.'/media_gallery/image/'),
																);

$config['modules'][$module_name]['datatable_actions'] = array( 	'details' => array( 'label' => 'Detalle',
								  			  	 				'url' => '#'.$module_name.'/details/'),
											'edit' => array( 	'label' => 'Editar',
											 					'url' => '#'.$module_name.'/edit/'),
											'delete' => array( 	'label' => 'Borrar',
																'dialog' => 'Borrar obra?',
											 					'url' => '#'.$module_name.'/delete/'),
											'media_gallery' => array( 'label' => 'Galer&iacute;a',
															  	'url' => '#'.$module_name.'/media_gallery/image/'),
											);
?>
