<?php
namespace App\Controllers;

use \Core\View;

class Home extends \Core\Controller {

  protected function before() {
    // echo "(before) ";
  }

  protected function after() {
    // echo " (after)";
  }
  public function indexAction() {
    // echo 'Hello from the index action in the Home controller';
    // View::render('Home/index.php', [
    //   'name' => 'Dave',
    //   'colors' => ['red', 'green', 'blue']
    // ]);

    View::renderTemplate('Home/index.html', [
      'name' => 'Dave',
      'colors' => ['red', 'green', 'blue']
    ]);
    
  }
}