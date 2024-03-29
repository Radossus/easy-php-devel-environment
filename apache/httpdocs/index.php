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
    <?php
        $PHPMYADMIN_PORT = '8081';
    ?>
        <header class="pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div id="welcome-text" class="text-white">Welcome to Matric easy PHP development</div>
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
        <div class="bg-light pt-5 pb-5">
            <div class="container">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-dark text-white"><h3 class="mt-3">Your project folders::</h3></li>
                    <?php
                    $dir = "./";

                    $a = scandir($dir);

                    foreach ($a as $item)
                    {
                        if($item == '..' || strpos($item,".") !== false || strpos($item,"intro-page") !== false)
                            continue;

                        echo '<li class="list-group-item"><span data-feather="folder"></span> '. $item .'  <a href="http://'.$_SERVER['SERVER_NAME'] .':'.$_SERVER['SERVER_PORT'].'/'.$item.'" class="btn btn-success btn-sm float-right" target="_blank"?><span data-feather="arrow-right-circle"></span> Open</a></li>';
                    }

                    ?>
                </ul>
            </div>
        </div>
          <div class="container mt-5 mb-5">
              <div class="row">
                  <div class="col-md-6">
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item bg-dark text-white"><h3> Web Server configuration::</h3></li>
                          <li class="list-group-item"><strong>Server Name and ports: </strong><?php echo $_SERVER['SERVER_NAME'] .":". $_SERVER['SERVER_PORT']?></li>
                          <li class="list-group-item"><strong>Server Software: </strong><?php echo $_SERVER['SERVER_SOFTWARE']?></li>
                          <li class="list-group-item"><strong>Current PHP version</strong>: <?php echo phpversion()?></li>
                          <li class="list-group-item"><strong>Server Document Root: </strong><?php echo $_SERVER['DOCUMENT_ROOT']?></li>
                          <li class="list-group-item"><strong>Local Document Root: </strong>.\apache\httpdocs</li>
			  <li class="list-group-item"><strong>Server IP address: </strong><?php echo $_SERVER['REMOTE_ADDR']?></li>
                      </ul>
                  </div>
                  <div class="col-md-6">
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item bg-dark text-white"><h3>MySQL Configuration::</h3></li>
                          <li class="list-group-item"><strong>PhpMyAdmin console: </strong><?php echo $_SERVER['SERVER_NAME'] .":".$PHPMYADMIN_PORT ?> <a href="http://<?php echo $_SERVER['SERVER_NAME'] .":".$PHPMYADMIN_PORT ?>" class="btn btn-success btn-sm float-right" target="_blank"><span data-feather="arrow-right-circle"></span> Open</a></li>
                          <li class="list-group-item"><strong>MySql server name: </strong>db</li>
                          <li class="list-group-item"><strong>User Name: </strong>root</li>
                          <li class="list-group-item"><strong>Passwort: </strong>secret</li>
                      </ul>
                  </div>
              </div>
          </div>
    <footer>
    <?php
    if (isset($_POST['button']))
    {
         exec('/etc/init.d/apache2 reload',$output, $return);
         echo " Output: "; var_dump($output) ;
         echo  " Return: "; print_r($return);
         
        if(!$return) {
          $result = "<script>console.log('can not restart apache2');</script>";
          echo "ne";
      } else {
          $result = "<script>console.log('restart apache2 successfuly');</script>";
          echo "ano";
      }
    }
?>

    <form method="post">
    <p>
        <button name="button">Restart Apache</button>
    </p>
    </form>


    </footer>

        <!-- ICONS -->
        <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
        <script>
            feather.replace()
        </script>


    </body>
</html>