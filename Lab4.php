<?php

class Page
{
    protected $sport;
    protected $VGames;
    protected $date;

    public function __construct($sport, $VGames, $date)
    {
        $this->sport = $sport;
        $this->VGames = $VGames;
        $this->date = $date;
    }

    public function getsport()
    {
        return $this->sport;
    }

    public function setsport($sport)
    {
        $this->sport = $sport;
    }

    public function getVGames()
    {
        return $this->VGames;
    }

    public function setVGames($VGames)
    {
        $this->VGames = $VGames;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }
}

$page = new Page('My sports page', 'My Video Games Page', '09/18/1997');

echo $page->getsport();
echo '<br>';
echo $page->getVGames();
echo '<br>';
echo $page->getDate();

class ChildPage extends Page
{
    protected $show;

    public function __construct($sport, $VGames, $date, $show)
    {
        parent::__construct($sport, $VGames, $date);
        $this->show = $show;
    }

    public function getshow()
    {
        return $this->show;
    }

    public function setshow($show)
    {
        $this->show = $show;
    }
}



