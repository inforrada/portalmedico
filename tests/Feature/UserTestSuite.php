<?php 

use UserTest;
use Pest\TestSuite;

class UserTestSuite extends TestSuite 
{

    public function __construct()
    {
        parent::__construct('\App\test\Feature', '\App\test\Feature');

        $this->addTest (UserTest::class);

    }
}
