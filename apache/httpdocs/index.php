<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href= "intro-page/screen.css" rel ="stylesheet" type="text/css" media="screen,projection">
    <meta name="description" content="Oficiální stránky.">
    <title>Welcome to Matric easy PHP development</title>
    </head>
    <body>
        <header class="pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="text-white">Welcome to Matric easy PHP development</h1>
                            <p>Don't spend your time with the configuration of app servers.
                                Containers are an excellent and quick solution for you as a developer!
                            </p>
                    </div>
                    <div class="col-md-4">
                        <img src="/intro-page/images/docker-logo.png" class="mx-auto d-block">
                    </div>
                </div>
            </div>
        </header>
        <div class="bg-light pt-3 pb-5">
            <div class="container">
                <h2 class="mt-3">Your project folders::</h2>
                <?php
                $dir = "./";

                $a = scandir($dir);

                foreach ($a as $item)
                {
                    if($item == '..' || str_contains($item,".") || str_contains($item,"intro-page"))
                        continue;

                    echo '<li>'. $item .'  <a href="http://'.$_SERVER['SERVER_NAME'] .':8080/'.$item.'" class="btn btn-success btn-sm" target="_blank"?>Open</a></li>';
                }

                ?>
            </div>
        </div>
          <div class="container mt-5 mb-5">
              <div class="row">
                  <div class="col-md-6">
                      <h2 class="mt-3">Web Server configuration::</h2>
                      <ul>
                          <li><strong>Server Name and ports: </strong><?php echo $_SERVER['SERVER_NAME'] ." : ". $_SERVER['SERVER_PORT']?></li>
                          <li><strong>Server Software: </strong><?php echo $_SERVER['SERVER_SOFTWARE']?></li>
                          <li><strong>Current PHP version</strong>: <?php echo phpversion()?></li>
                          <li><strong>Server Document Root: </strong><?php echo $_SERVER['DOCUMENT_ROOT']?></li>
                          <li><strong>Local Document Root: </strong>.\apache\httpdocs</li>
                      </ul>
                  </div>
                  <div class="col-md-6">
                      <!-- <img src="/intro-page/images/PhpMyAdmin_logo.svg" width="150" height="100"> -->
                      <h2 class="mt-3">PhpMyAdmin Configuration::</h2>
                      <li><strong>PhpMyAdmin: <a href="http://<?php echo $_SERVER['SERVER_NAME'] .":8081"?>" class="btn btn-success btn-sm" target="_blank"</strong><?php echo $_SERVER['SERVER_NAME'] .":8081"?></a></li>
                      <li><strong>User Name: </strong>root</li>
                      <li><strong>Passwort: </strong>secret</li>
                  </div>
              </div>
          </div>
    <footer>

    </footer>
    </body>
</html>