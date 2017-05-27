<?php
namespace controller;

use item\Data;

$nb_img_on_gallery_load = 12;

class EnovosController extends Controller
{
    public function index()
    {
        $this->render('404.php');
    }

    public function dboard()
    {
        $this->loadModel('DataModel');

        $v = array();
        $v['enovos']['data'] = $this->DataModel->getLast();
        $this->set($v);
        $this->render('dashboard.php');
    }

    public function send()
    {

        if (!empty($_GET))
        {
            $this->loadModel('DataModel');
            $data = new Data();

            $data->setTDeviceId($_GET['device']);
            $data->setLight($_GET['light']);
            $data->setPressure($_GET['pressure']);
            $data->setTemperature($_GET['temperature']);

            $this->DataModel->save($data);

        }
        else
            $this->render('404.php');
    }

    public function addDevice()
    {
        $this->loadModel('DevicesModel');

        $this->DevicesModel->create($_SESSION['id'], 'C37D3');
    }

    public function getData()
    {
        $this->loadModel('DataModel');
        echo "Salut";

        $data = $this->DataModel->getData();
    }

    public function getLast()
    {
        $this->loadModel('DataModel');

        $data = $this->DataModel->getLast();
        echo '<pre>';
        print_r($data);
    }
}

