<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Initial extends CI_Migration {

    public function up()
    {
        // messages
        $this->dbforge->add_field(
            array(
                'id' =>
                    array(
                        'type'              =>  'INT',
                        'constraint'        =>   5,
                        'unsigned'          =>   true,
                        'auto_increment'    =>   true,
                    ), 
                'user_id' =>
                    array(
                        'type'              =>   'INT',
                        'constraint'        =>   5,
                        'unsigned'          =>   true,
                        'auto_increment'    =>   false,
                    ),
                'msg' =>
                    array(
                        'type'  => 'TEXT',
                        'null'  => true,
                    ),
                'date' =>
                    array(
                        'type'  => 'DATETIME',
                        'null'  => true,
                    ),
            )
        );

        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('messages');
    }

    public function down()
    {
        $this->dbforge->drop_table('messages');
    }

}
