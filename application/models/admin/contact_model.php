<?
require_once(dirname(__FILE__)."/../simple_data_model.php");

class Contact_model extends Simple_data_model
{

    public $db_index = 'contact_id';
    public $db_table = 'contacts';
    public $related;

	protected $db_fields = array(
								'name',
								'email',
								'subject',
								'message',
								'telephone',
								'date_created',
								);

}
?>