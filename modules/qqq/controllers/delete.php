<?php
/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules
 */

if(isset($_GET['id'])){
      //print_r($_POST);
      if($db->delete('qqq',["qid = '{$_GET['id']}'"])){
        $db->redirect('qqq/index');
      }else{

      }
}
