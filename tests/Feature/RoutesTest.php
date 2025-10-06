<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_basic_routes(): void
    {
        $response = $this->get('/');

        $response->assertViewIs("welcome");
    }

    function test_contact_route_exits() : void {

        $response = $this->get('/contact');

        $response->assertStatus(200);
    }

    function test_contact_route_not_exits() : void {

        $response = $this->get('/contac');

        $response->assertStatus(404);
        //$response->assertNotFound();
    }

    function test_udvozlesen_lathato_a_nev() : void {

        $response = $this->get('/udvozles');

        $response->assertSee("Barni");
    }

    function test_felhasznaloi_adat_lathato() : void {

        $response = $this->get('/felhasznaloiadat?felhasznalonev=BaMar');

        $response->assertSee("BaMar");
    }
}
