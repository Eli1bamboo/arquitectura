<?
require_once(dirname(__FILE__)."/../simple_data_model.php");

class Marcas_model extends Simple_data_model
{

    public $db_index = 'marca_id';
    public $db_table = 'marcas';

	protected $db_fields = array(
								'name',
								'marca_url',
								'file_manager_id',
								'active',
								'date_created',
								);
}
?>