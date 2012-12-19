<?php

class Blog_model extends CI_Model {

    function __construct() {

        parent::__construct();
        $this->load->database();

    }

    function show_all_posts() {

        $this->db->order_by("entry_date", "desc");
        $query = $this->db->get('entry');
        return $query->result();

    }

    function add_new_post($name, $body) {

        $data = array(
            'entry_name' => $name,
            'entry_body' => $body
        );

        $this->db->insert('entry',$data);

    }

    function read_post($id) {

        $this->db->select('*');
        $this->db->from('entry');
        $this->db->where('entry_id', $id);

        $query = $this->db->get();

        return $query->result();

    }

    function update_post($id, $name, $body) {

        $data = array(
            'entry_name' => $name,
            'entry_body' => $body
        );

        $this->db->where('entry_id', $id);

        $this->db->update('entry',$data);

    }

    function delete_post($id) {

        $this->db->where('entry_id', $id);
        $this->db->delete('entry');

    }

}