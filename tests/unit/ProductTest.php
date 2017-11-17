<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Film;

class apartmentTest extends PHPUnit_Framework_TestCase
{
    
    public function testAapartmentHasName()
    {
        $apartment = new Film('Fallout 4','x');
        
        //$this->assertEquals('Fallout 4', $apartment->name());
        
    }
}

