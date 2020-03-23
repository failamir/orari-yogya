<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Download_model extends CI_Model
{

    public $table = 'download';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    function get_join()
    {
        $this->db->select('*');
$this->db->from('download');
$this->db->join('kategori', 'kategori.id = download.id');
return $this->db->get()->result();
    }

    function get_join_phone()
    {
        $this->db->select('*');
$this->db->from('download');
$this->db->where('kategori','1');
// $this->db->join('kategori', 'kategori.id = download.id','right');
return $this->db->get()->result();
    }

    function get_join_cw()
    {
        $this->db->select('*');
$this->db->from('download');
$this->db->where('kategori','2');
// $this->db->join('kategori', 'kategori.id = download.id','right');
return $this->db->get()->result();
    }

    function get_join_ft()
    {
        $this->db->select('*');
$this->db->from('download');
$this->db->where('kategori','3');
// $this->db->join('kategori', 'kategori.id = download.id','right outer');
return $this->db->get()->result();
    }

    function get_join_m()
    {
        $this->db->select('*');
$this->db->from('download');
$this->db->where('kategori','4');
// $this->db->join('kategori', 'kategori.id = download.id','right');
return $this->db->get()->result();
    }
    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    function get_latest(){
        $this->db->order_by($this->id, $this->order);
        $this->db->limit(1);
        return $this->db->get($this->table)->row();
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
	$this->db->or_like('callsign', $q);
	$this->db->or_like('checkin', $q);
	$this->db->or_like('kategori', $q);
	$this->db->or_like('counter', $q);
	$this->db->or_like('file', $q);
	$this->db->or_like('status', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('callsign', $q);
	$this->db->or_like('checkin', $q);
	$this->db->or_like('kategori', $q);
	$this->db->or_like('counter', $q);
	$this->db->or_like('file', $q);
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

/* End of file Download_model.php */
/* Location: ./application/models/Download_model.php */
