<?
require_once(dirname(__FILE__)."/../simple_data_model.php");

class Slider_model extends Simple_data_model
{

    public $db_index = 'slide_id';
    public $db_table = 'slider';

	protected $db_fields = array(
								'title',
								'description',
								'slide_url',
								'file_manager_id',
								'active',
								'date_created',
								);
}
?>