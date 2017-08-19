<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {


    public function index()
    {
        echo 'hello world';
        echo '<hr>';

        false OR $a = 1;

        echo $a;
    }
}
