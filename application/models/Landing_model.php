<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Landing_model extends CI_Model
{

    public $table = 'landing';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id,nama_perusahaan,deskripsi,tentang,visi,misi,juknsi,izin,alamat,email,telpon');
        $this->datatables->from('landing');
        //add this line for join
        //$this->datatables->join('table2', 'landing.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('landing/printing/$1'),'<i class = "fa fa-print"></i>', array('class'=>'btn btn-flat btn-success'))." ", 'id');
        return $this->datatables->generate();
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
	$this->db->or_like('nama_perusahaan', $q);
	$this->db->or_like('deskripsi', $q);
	$this->db->or_like('tentang', $q);
	$this->db->or_like('visi', $q);
	$this->db->or_like('misi', $q);
	$this->db->or_like('juknsi', $q);
	$this->db->or_like('izin', $q);
	$this->db->or_like('alamat', $q);
	$this->db->or_like('email', $q);
	$this->db->or_like('telpon', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('nama_perusahaan', $q);
	$this->db->or_like('deskripsi', $q);
	$this->db->or_like('tentang', $q);
	$this->db->or_like('visi', $q);
	$this->db->or_like('misi', $q);
	$this->db->or_like('juknsi', $q);
	$this->db->or_like('izin', $q);
	$this->db->or_like('alamat', $q);
	$this->db->or_like('email', $q);
	$this->db->or_like('telpon', $q);
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

/* End of file Landing_model.php */
/* Location: ./application/models/Landing_model.php */
