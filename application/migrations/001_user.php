<?php defined('BASEPATH') or exit('No direct script access allowed');


class Migration_User extends CI_Migration
{
    public function __construct()
    {
        $this->load->database();
    }

    public function up()
    {
        $this->dbforge->add_field(
            array(
                'image' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '255',
                    'null' => TRUE
                ),
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
                    'constraint' => '100',
                    'null' => TRUE
                ),
                'role' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                    'null' => TRUE
                ),
                'deleted_at' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                    'null' => TRUE
                ),
                'created_at' => array(
                    'type' => 'TIMESTAMP'
                ),
                'updated_at' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                    'null' => TRUE
                )
            )
        );

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('users');

        $data = array(
            'firstname' => 'John',
            'lastname' => 'Doe',
            'age' => 22,
            'gender' => 'Male',
            'mobile_number' => '09123456789',
            'address' => 'Testing address',
            'username' => 'john_doe9',
            'email' => 'john.doe@test.com',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            'role' => 'admin'
        );

        $this->db->insert('users', $data);
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}
