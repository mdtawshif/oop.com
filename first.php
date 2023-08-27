<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<?php
   class User
   {

      public $username;
      private $email;

      public function __construct($username, $email)
      {
         $this->username = $username;
         $this->email = $email;
      }

      public function addFriend()
      {
         return "$this->email  added a new friend";

      }

      public function getEmail()
      {
         return $this->email;
      }

      public function setEmail($email)
      {
         if (strpos($email, '@') > -1) {
            $this->email = $email;
         }
      }
   }
   class AdminUser extends User
   {

   }
   $userOne = new user('tawshif', 'assmec.com');
   $userTwo = new user('alim', 'addnessmec.com');
   $userThree = new AdminUser('Joyboy', 'onepiece@gmail.com');

   echo $userThree-> username .'<br>';
   echo $userThree-> getEmail() .'<br>';



   // $userOne->setEmail('mostafatawshif@gmail.com');
   // echo $userOne->getEmail() . '<br>';
   // echo $userTwo->getEmail();
   
   // echo $userOne->username . '<br>';
   // echo $userOne->email . '<br>';
   // echo $userOne->addFriend() . '<br>';
   

   // echo $userTwo->username . '<br>';
   // echo $userTwo->email . '<br>';
   // echo $userTwo->addFriend() . '<br>';
   



?>
</body>
</html>