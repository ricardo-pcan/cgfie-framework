<?php 
  class TestController
  {
    public static function test()
    {
      $templates = new League\Plates\Engine('app/views/layout');
      echo $templates->render('profile', array('name' => 'Jonathan'));
    }

  }
?>