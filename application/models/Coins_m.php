<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coins_m extends MY_Model {

  protected $_table_name = 'coins';

  public $coin_rules = array(
    array(
      'field' => 'name',
      'label' => 'currency name',
      'rules' => 'trim|required'
    ),
    array(
      'field' => 'short_name',
      'label' => 'shortname',
      'rules' => 'trim|required'
    ),
    array(
      'field' => 'symbol',
      'label' => 'symbol',
      'rules' => 'trim|required'
    )
  );

  public function get_new()
  {
    $coin = new stdClass(); 
    $coin->name = '';
    $coin->short_name = '';
    $coin->symbol = '';
    $coin->description = '';

    return $coin;
  }

}

/* End of file Coins_m.php */
/* Location: ./application/models/Coins_m.php */