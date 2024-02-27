<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Home extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        // load views
        require APP . 'view/_templates/head.php';
        require APP . 'view/_templates/nabvar.php';
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
    }
    public function about()
    {
        // load views
        require APP . 'view/_templates/head.php';
        require APP . 'view/_templates/nabvar.php';
        require APP . 'view/_templates/headerabout.php';
        require APP . 'view/home/about.php';
        require APP . 'view/_templates/footer.php';
    }
    public function service()
    {
        // load views
        require APP . 'view/_templates/head.php';
        require APP . 'view/_templates/nabvar.php';
        require APP . 'view/_templates/headerservice.php';
        require APP . 'view/home/service.php';
        require APP . 'view/_templates/footer.php';
    }
    public function feacture()
    {
        // load views
        require APP . 'view/_templates/head.php';
        require APP . 'view/_templates/nabvar.php';
        require APP . 'view/_templates/headerfeacture.php';
        require APP . 'view/home/feacture.php';
        require APP . 'view/_templates/footer.php';
    }
    public function quote()
    {
        // load views
        require APP . 'view/_templates/head.php';
        require APP . 'view/_templates/nabvar.php';
        require APP . 'view/_templates/headerquote.php';
        require APP . 'view/home/quote.php';
        require APP . 'view/_templates/footer.php';
    }
    public function team()
    {
        // load views
        require APP . 'view/_templates/head.php';
        require APP . 'view/_templates/nabvar.php';
        require APP . 'view/_templates/headerteam.php';
        require APP . 'view/home/team.php';
        require APP . 'view/_templates/footer.php';
    }
    public function testimonial()
    {
        // load views
        require APP . 'view/_templates/head.php';
        require APP . 'view/_templates/nabvar.php';
        require APP . 'view/_templates/headertestimonial.php';
        require APP . 'view/home/testimonial.php';
        require APP . 'view/_templates/footer.php';
    }
    public function contact()
    {
        // load views
        require APP . 'view/_templates/head.php';
        require APP . 'view/_templates/nabvar.php';
        require APP . 'view/_templates/headercontact.php';
        require APP . 'view/home/contact.php';
        require APP . 'view/_templates/footer.php';
    }
}
