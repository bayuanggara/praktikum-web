<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
        <head>
                <title>Halaman Administrator</title>
                <style type="text/css">
                        body{
                                background-color:#03dad2;
                                color:#0775a8;
                        }
                        a{
                                color:#ffffff;
                        }
                        .inner{
                                margin: 200px auto;
                                padding: 20px;
                                width:240px;
                                border:5px solid#0775a8;
								
                        }
                </style>
        </head>

        <body>
                <?php
                        ini_set('display errors',1);
                        define('_VALID',1);
                        //include file eksternal
                        require_once('./proses.php');
                        init_login(); //Pemanggilan fungsi init_login
                        validate(); //Pemanggilan fungsi init_login
                ?>
                <h1 style="text-align:center"> Halaman Admin</h1>
                <p style="text-align:center">
                        <a href="?m=Logout">Logout</a>
                </p>
                <div class="inner">
                        
                        Menu Menu Menu Menu
                        <?php
                                if($_SESSION['login']==''){      //jika checkbox tidak dicentang, maka session dihapus
                                        unset($_SESSION['login']);
                                        session_destroy();
                                        exit;
                                }
                        ?>
                </div>
        </body>
</html>