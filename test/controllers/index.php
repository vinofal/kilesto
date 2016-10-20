<?php
Class Controller_Index Extends Controller_Base {
        function index() {
             $view=$this->registry->get('template');
             $dbs=$this->registry->get('db');
             $stmt=$dbs->query('SELECT * FROM news');
             $arr=$stmt->fetch();
             foreach ($arr as $key => $value) {
               $ins[$key]=$value;
             }

             //$view->render('header');
             $view->render('content',$ins);
             //$view->render('footer');

      
                }


}


?>