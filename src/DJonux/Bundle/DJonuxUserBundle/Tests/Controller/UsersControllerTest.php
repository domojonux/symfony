<?php

namespace DJonux\Bundle\DJonuxUserBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UsersControllerTest extends WebTestCase
{
    public function testDefault()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Default');
    }

    public function testProfil()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Profil');
    }

    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Edit');
    }

}
