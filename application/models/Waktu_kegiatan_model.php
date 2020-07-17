<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Waktu_kegiatan_model extends CI_Model
{

    public $table = 'waktu_kegiatan';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    function get_join()
    {
        $this->db->select('*');
        $this->db->from('waktu_kegiatan');
        $this->db->join('tanggal_kegiatan', 'tanggal_kegiatan.id = waktu_kegiatan.id');
        return $this->db->get()->result();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id', $q);
	$this->db->or_like('id_tanggal', $q);
	$this->db->or_like('mulai', $q);
	$this->db->or_like('selesai', $q);
	$this->db->or_like('detail', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('id_tanggal', $q);
	$this->db->or_like('mulai', $q);
	$this->db->or_like('selesai', $q);
	$this->db->or_like('detail', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Waktu_kegiatan_model.php */
/* Location: ./application/models/Waktu_kegiatan_model.php */
