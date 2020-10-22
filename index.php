<?php 

class User {
  public $name;
  public $lastname;
  public $username;
  public $email;
  public $password;
  public $active = false;

  public function __construct($_username, $_email, $_password) {
    $this->username = $_username;
    $this->email = $_email;
    $this->password = $_password;
  }

  public function getFullName() {
    return $this->name. " " .$this->lastname;
  }
}


$andrea = new User("Seven897", "andreacontest@gmail.com", "password12345");
$andrea->active = true;

$mario = new User("Teemo123", "mario.rossi@gmail.com", "yasuo12345");
$mario->active = true;

$silvia = new User("Silver91", "silvia.rossetti@yahoo.com", "parolasegreta765");
$silvia->name = "Silvia";
$silvia->lastname = "Rossetti";

$users = [$andrea, $mario, $silvia];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>PHP OOP</title>
</head>
<body>
  <div class="container">
    <table>
      <thead>
        <tr class="table-title">
          <th>Database Segreto</th>
        </tr>
        <tr>
          <th class="table-heading">Full Name</th>
          <th class="table-heading">Username</th>
          <th class="table-heading">Email</th>
          <th class="table-heading">Password</th>
          <th class="table-heading">Active User</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($users as $user): ?>
          <tr>
              <td><?php echo $user->getFullName() ?></td>
              <td><?php echo $user->username ?></td>
              <td><?php echo $user->email ?></td>
              <td><?php echo $user->password ?></td>
              <td>
                <?php if($user->active == true): ?>
                  <i class="fas fa-check"></i>
                <?php else: ?>
                  <i class="fas fa-times"></i>
                <?php endif ?>
              </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</body>
</html>