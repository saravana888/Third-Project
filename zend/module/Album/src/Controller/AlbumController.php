<?php

namespace Album\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class AlbumController extends AbstractActionController
function __construct($uri = 'mongodb://127.0.0.1/', array $uriOptions = [], array $driverOptions = [])
echo $uri;
{
    public function indexAction()
    {
        /*<?php

	$client = new MongoDB\Client(
    'mongodb://rs1.example.com,rs2.example.com/'
    [
        'username' => 'myUsername',
        'password' => 'myPassword',
        'ssl' => true,
        'replicaSet' => 'myReplicaSet',
        'authSource' => 'admin',
    ],
);*/
    }

    public function addAction()
    {
    }

    public function editAction()
    {
    }

    public function deleteAction()
    {
    }
}
