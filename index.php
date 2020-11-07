<?php
    class User{

      public $name;
      public $username;
      public $email;

      function addFriend($name){
        echo "$name" , " added a friend. <br>";
      }
      function postStatus($name){
        echo "$name" . " posted a status. <br>";
      }
    }
    $example = new User();
    echo $example->addFriend('Lenard Llacer');
    echo "<br>";
    echo $example->postStatus('Lenard Llacer');
 ?>
