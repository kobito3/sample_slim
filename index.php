<?php
require '../../Slim/Slim/Slim.php';
require '../../Slim-Extras/Views/TwigView.php';

$app = new Slim(array(
     'view' => new TwigView()
    ,'templates.path' => './templates'
));
//TwigView::$twigDirectory = dirname(__FILE__) . '/vendor/Twig';
//TwigView::$twigDirectory = '/home/mura/work/Twig/lib/Twig';
TwigView::$twigDirectory = '../../Twig/lib/Twig';

$app->get('/', function(){
    echo "<div>Lets PHP with Slim </div>";
});

$app->get('/twig', function() {
	$app = Slim::getInstance();
	$app->render('top.html', array('kamen' => 'あ～いうえおん'));
});

$app->get('/hello/:name', 'hello');
function hello($name) {
    echo "Hello, $name!";
}
$app->run();
