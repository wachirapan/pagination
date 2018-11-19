<?php

/**
 * Created by PhpStorm.
 * User: nongaungpoa
 * Date: 11/19/2018
 * Time: 12:07 PM
 */
class QueryModel extends CI_Model
{
    function record_row()
    {
        return $this->db->select('*')->from("cateproduct")->get()->num_rows() ;
    }
    function felth($limit, $start)
    {

        $query = $this->db->get("cateproduct",$limit, $start);

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }

        return false;
    }
}