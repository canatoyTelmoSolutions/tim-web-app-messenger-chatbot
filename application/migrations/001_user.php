<?php defined('BASEPATH') OR exit('No direct script access allowed'); 


class Migration_User extends CI_Migration { 
    public function up() { 
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'firstname' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'lastname' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
           ),
           'age' => array(
                'type' => 'INT',
                'constraint' => '100',
                'null' => TRUE
           ),
           'gender' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE
           ),
           'mobile_number' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE
           ),
           'address' => array(
                'type' => 'VARCHAR',
                'constraint' => '250',
                'null' => TRUE
           ),
           'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
           ),
           'password' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'role' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE
            ),
        ));

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('users');
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}