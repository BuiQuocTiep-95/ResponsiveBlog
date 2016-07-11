<?php

/**
 * Created by PhpStorm.
 * User: Bui
 * Date: 3/11/16
 * Time: 8:09 AM
 */

use Symfony\Bundle\FrameworkBundle\Client;

class PostFormTest extends \Symfony\Bundle\FrameworkBundle\Test\WebTestCase
{
    /** @var Client */
    protected $client;

    public function setUp()
    {
        parent::setUp();
        $this->client =  static::createClient([], [
            'HTTP_HOST' => 'localhost:8000'
        ]);
    }

    public function testLogin()
    {
        // request
        $crawler = $this->client->request('GET', '/login');

        $form = $crawler->selectButton('login')->form();
        $form['_username'] = 'admin';
        $form['_password'] = 'admin';

        $this->client->submit($form);

        return $this->client;
    }
    // ...
    /**
     * @depends testLogin
     */
    public function testForm($loggedClient = null)
    {
        $this->client = $loggedClient;

        $crawler = $this->client->request('GET', '/newpost');

        $form = $crawler->filter('button[type=submit]')->last()->form();
        $form['form_post[title]']="Chapter TEST";
        $form['form_post[publishFrom][month]']=1;
        $form['form_post[publishFrom][day]']=1;
        $form['form_post[publishFrom][year]']=2016;
        $form['form_post[publishTo][month]']=12;
        $form['form_post[publishTo][day]']=31;
        $form['form_post[publishTo][year]']=2017;
        $form['form_post[private]']=false;
        $form['form_post[text]']="This is a test used for testing post.";

        $this->client->submit($form);

        $status = $this->client->getResponse()->getStatusCode(); // 200 = OK, 302 = redirect, 500 = internal server error ...
        $body = $this->client->getResponse()->getContent();

        $crawler = $this->client->followRedirect();

        $title = $crawler->filter('h2')->first()->text();
        echo $title;
        $author = $crawler->filter('p')->first()->text();
        $logoutLink = $crawler->filter('a:contains("Odhlásit")');

        //$this->assertCount(1, $title, 'Očekávám právě jeden nadpis h2');
        $this->assertSame("Chapter TEST",$title);

        $link = $crawler->filter('a:contains("Úvodní stránka")')->link();
        $crawler = $this->client->click($link);

        $title = $crawler->filter('h2')->first()->text();
        $this->assertSame($title, "Chapter TEST");

    }
}
