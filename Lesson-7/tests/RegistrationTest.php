<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RegistrationTest extends WebTestCase
{
    public function testRegistration () 
    {
        $client = static::createClient();
        $client->request('GET', '/register');
        $client->submitForm('Register', [
            'registration_form[email]' => 'sobaka@mail.ru',
            'registration_form[firstName]' => 'Lesha',
            'registration_form[lastName]' => 'Takoy-to',
            'registration_form[plainPassword]' => '123456',
            'registration_form[agreeTerms]' => true,
        ]);
    }
}