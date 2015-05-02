<?php

class Messages_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get($id = 0)
    {
        if ($id) {
            $this->db->where('user_id', $id);
        }

        $messages = $this->db->get('messages');
        return $messages->result_array();
    }

}

/*
 * End of file
 */
