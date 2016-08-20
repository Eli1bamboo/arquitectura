<?
require_once(dirname(__FILE__)."/../simple_data_model.php");

class Prensa_model extends Simple_data_model
{

    public $db_index = 'new_id';
    public $db_table = 'prensa';

	protected $db_fields = array(
								'name',
								'date_release',
								'publisher',
								'youtube_url',
								'category',
								'file_manager_id',
								'active',
								'date_created',
								);
}
?>