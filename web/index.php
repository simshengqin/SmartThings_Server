<?php
<div class="jumbotron text-center">
<div class="container">
  <a href="/" class="lang-logo">
    <img src="/images/lang-logo.png">
  </a>
  <h1>Getting Started with PHP on Heroku</h1>
  <p>This is a sample PHP application deployed to Heroku. It is a reasonably simple app - but a good foundation for understanding how to get the most out of the Heroku platform.</p>
  <a type="button" class="btn btn-lg btn-default" href="https://devcenter.heroku.com/articles/getting-started-with-php"><span class="glyphicon glyphicon-flash"></span> Getting Started with PHP</a>
  <a type="button" class="btn btn-lg btn-primary" href="https://github.com/heroku/php-getting-started"><span class="glyphicon glyphicon-download"></span> Source on GitHub</a>
</div>
</div>
<div class="container">
<div class="alert alert-info text-center" role="alert">
  To deploy your own copy, and learn the fundamentals of the Heroku platform, head over to the <a href="https://devcenter.heroku.com/articles/getting-started-with-php" class="alert-link">Getting Started with PHP on Heroku</a> tutorial.
</div>
<hr>
<div class="row">
  <div class="col-md-6">
    <h3><span class="glyphicon glyphicon-info-sign"></span> How this sample app works</h3>
    <ul>
      <li>This app was deployed to Heroku, either using Git or by using <a href="https://github.com/heroku/php-getting-started">Heroku Button</a> on the repository.</li>

      <li>When Heroku received the source code, it fetched all the dependencies in the <a href="https://github.com/heroku/php-getting-started/blob/main/composer.json">composer.json</a>, creating a deployable slug.</li>
      <li>The platform then spins up a dyno, a lightweight container that provides an isolated environment in which the slug can be mounted and executed.</li>
      <li>You can scale your app, manage it, and deploy over <a href="https://addons.heroku.com/">150 add-on services</a>, from the Dashboard or CLI.</li>
    </ul>
  </div>
  <div class="col-md-6">
    <h3><span class="glyphicon glyphicon-link"></span> Next Steps</h3>
    <ul>
      <li>If you are following the <a href="https://devcenter.heroku.com/articles/getting-started-with-php">Getting Started</a> guide, then please head back to the tutorial and follow the next steps!</li>
      <li>If you deployed this app by deploying the Heroku Button, then in a command line shell, run:</li>
      <ul>
        <li><code>git clone https://github.com/heroku/php-getting-started.git</code> - this will create a local copy of the source code for the app</li>
        <li><code>cd php-getting-started</code> - change directory into the local source code repository</li>
        <li><code>heroku git:remote -a &lt;your-app-name></code> - associate the Heroku app with the repository</li>
        <li>You will now be set up to run the app locally, or <a href="https://devcenter.heroku.com/articles/getting-started-with-php#push-local-changes">deploy changes</a> to Heroku</li>
      </ul>
    </ul>
    <h3><span class="glyphicon glyphicon-link"></span> Helpful Links</h3>
    <ul>
      <li><a href="https://www.heroku.com/home">Heroku</a></li>
      <li><a href="https://devcenter.heroku.com/">Heroku Dev Center</a></li>
      <li><a href="https://devcenter.heroku.com/articles/getting-started-with-php">Getting Started with PHP on Heroku</a></li>
      <li><a href="https://devcenter.heroku.com/articles/deploying-php">Deploying PHP Apps on Heroku</a></li>
    </ul>
  </div>
</div> <!-- row -->
 <div class="alert alert-info text-center" role="alert">
  Please do work through the Getting Started guide, even if you do know how to build such an application.  The guide covers the basics of working with Heroku, and will familiarize you with all the concepts you need in order to build and deploy your own apps.
</div>
</div>
/*
require('../vendor/autoload.php');

$app = new Silex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

// Register view rendering
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

// Our web handlers

$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('index.twig');
});

$app->get('/cowsay', function() use($app) {
  $app['monolog']->addDebug('cowsay');
  return "<pre>".\Cowsayphp\Cow::say("Cool beans")."</pre>";
});

$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return str_repeat('Hello', getenv('TIMES'));
});

$dbopts = parse_url(getenv('DATABASE_URL'));
$app->register(new Csanquer\Silex\PdoServiceProvider\Provider\PDOServiceProvider('pdo'),
               array(
                'pdo.server' => array(
                   'driver'   => 'pgsql',
                   'user' => $dbopts["user"],
                   'password' => $dbopts["pass"],
                   'host' => $dbopts["host"],
                   'port' => $dbopts["port"],
                   'dbname' => ltrim($dbopts["path"],'/')
                   )
               )
);

$app->get('/db/', function() use($app) {
  $st = $app['pdo']->prepare('SELECT name FROM test_table');
  $st->execute();

  $names = array();
  while ($row = $st->fetch(PDO::FETCH_ASSOC)) {
    $app['monolog']->addDebug('Row ' . $row['name']);
    $names[] = $row;
  }

  return $app['twig']->render('database.twig', array(
    'names' => $names
  ));
});

$app->run();
*/
?>
