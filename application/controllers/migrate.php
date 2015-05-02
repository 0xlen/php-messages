<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migrate extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('migration');
    }

    public function index()
    {
        return $this->up();
    }

    public function up()
    {
        if ( ! $this->migration->current())
        {
            show_error($this->migration->error_string());
        }

        printf('current migrate version: %d', $this->_version());
    }

    public function rollback($ver = 0)
    {
        $this->migration->version($ver);
        printf('current migrate version: %d', $this->_version());
    }

    protected function _version()
    {
        $row = $this->db->get('migrations')->row();
        return $row ? $row->version : 0;
    }
}


/* End of file migrate.php */
/* Location: ./application/controllers/migrate.php */
