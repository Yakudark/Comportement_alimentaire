<?php
require_once __DIR__ . '/../vendor/autoload.php';
require('././Controllers/controllers.php');

use PHPUnit\Framework\TestCase;

class UserControllerQuotCalTest extends TestCase
{

    public function calculQuotKcal()
    {
        $result = calculateQuotKcal();
    }
}
