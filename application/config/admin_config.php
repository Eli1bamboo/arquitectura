<?

$config['general']['admin'] = array('home_controller' => 'admin/x/',
									'user_session' => 'user',
									'start_page' => 'portfolio/show_list',
									'login_page' => 'admin/user/login',
									'login_logo' => 'logo.png',
									'admin_logo' => 'logo.png'
									);

$config['general']['admin']['sections'] = array(
									'slider' =>array('url' => '#slider/show_list', 'name' => 'slider', 'admin_only' => true, 'icon' => 'fa-picture-o'),
									'portfolio' =>array('url' => '#portfolio/show_list', 'name' => 'Obras', 'admin_only' => true, 'icon' => 'fa-building'),
									'prensa' =>array('url' => '#prensa/show_list', 'name' => 'Prensa', 'admin_only' => true, 'icon' => 'fa-newspaper-o'),
									'marcas' =>array('url' => '#marcas/show_list', 'name' => 'Marcas', 'admin_only' => true, 'icon' => 'fa-flask'),
									'contact' =>array('url' => '#contact/show_list', 'name' => 'Contactos', 'admin_only' => true, 'icon' => 'fa-users'),
									'configuration' =>array('url' => '#configuration/show_list', 'name' => 'configuration', 'admin_only' => true, 'icon' => 'fa-gears'),
									);

$config['general']['admin']['table_icons'] = array(	'details' => 'fa fa-eye',
													'save' => 'fa fa-pencil',
													'edit' => 'fa fa-pencil',
													'files' => 'fa fa-file-text-o',
													'media_gallery' => 'fa fa-picture-o',
													'delete' => 'fa fa-trash-o');

foreach(glob( dirname(__FILE__)."/../modules_config/*.php") as $filename)
{
    include $filename;
}

?>