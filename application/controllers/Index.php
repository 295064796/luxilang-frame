<?php
class IndexController extends Yaf_Controller_Abstract {
   public function indexAction() {//默认Action
       $_SESSION['luxilang'] = 'session_luxilang11';
       luxilang();
       $luxilang = new luxilang();
       $luxilang_m = new luxilangModel();

        
      
       $sjz_area = db()->get_row("select * from test");
       print_r($sjz_area);
       $this->getView()->assign("content", "luxilang_frame  welcome !");
   }
}
?>