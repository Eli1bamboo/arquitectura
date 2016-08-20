<?
require_once(dirname(__FILE__)."/../simple_data_model.php");

class Portfolio_model extends Simple_data_model
{

    public $db_index = 'obra_id';
    public $db_table = 'portfolio';

	protected $db_fields = array(
								'name',
								'description',
								'category',
								'file_manager_id',
								'active',
								'date_created',
								);
}
?>