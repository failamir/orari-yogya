<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kategori_model extends CI_Model
{

    public $table = 'kategori';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id,nama,status');
        $this->datatables->from('kategori');
        //add this line for join
        //$this->datatables->join('table2', 'kategori.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('kategori/printing/$1'),'<i class = "fa fa-print"></i>', array('class'=>'btn btn-flat btn-success'))." ".anchor(site_url('kategori/read/$1'),'<i class = "fa fa-eye"></i>', array('class'=>'btn btn-flat btn-info'))." ".anchor(site_url('kategori/update/$1'),'<i class = "fa fa-edit"></i>', array('class'=>'btn btn-flat btn-warning'))." ".anchor(site_url('kategori/delete/$1'),'<i class = "fa fa-trash"></i>', array('class'=>'btn btn-flat btn-danger','onclick'=>'javasciprt: return confirm(\'Are You Sure ?\')')), 'id');
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
	$this->db->or_like('nama', $q);
	$this->db->or_like('status', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('nama', $q);
	$this->db->or_like('status', $q);
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

/* End of file Kategori_model.php */
/* Location: ./application/models/Kategori_model.php */
