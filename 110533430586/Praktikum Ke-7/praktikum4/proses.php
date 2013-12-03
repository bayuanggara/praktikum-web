<?php
        defined('_VALID') or die('Not Allowed');
        
		//fungsi untuk memeriksa isi username dan password
        function init_login(){
              
                $nama = 'admin'; //inisialisasi username dengan value admin
                $pass = 'admin'; //inisialisasi password username dengan value admin
                session_start(); //memulai session
                if(isset($_POST['nama']) && isset($_POST['pass'])){  //jika nama dan pass terisi       
                        $n = trim($_POST['nama']); //menghapus karakter spasi dari kanan atau kiri string
                        $p = trim($_POST['pass']); //menghapus karakter spasi dari kanan atau kiri string
                        
                        if(($n === $nama) && ($p === $pass)){  //jika value var $n sama dengan $nama dan var. $p sama dengan var $pass
                                if(isset($_POST['remember'])){                        //jika checkbox dicentang
                                        //set cookie
                                        $_SESSION['login']=$n;
                                        //redireksi
                                        ?>
                                        <script type="text/javascript">
                                                document.location.href="./tugasrumah.php"; /*dikembalikan ke indeks halaman awal*/
                                        </script>
                                        <?php
                                }else{
                                        $_SESSION['login']='';    //jika checkbox tidak dicentang                                        
                                }
                        }else{    //teks yang ditampilkan jika inputan salah
                                echo '<h1 style="margin:10px auto;text-align:center;">nama/password tidak sesuai</h1>';
                                return false;
                        }
                }
        }
		//fungsi untuk memeriksa ketersediaan session
        function validate(){
                if(!isset($_SESSION['login'])){                                        
                        ?>
                        <div class="inner">
                                <form action="" method="post" class="form-horizontal">
                                        <table border="0" cellpadding="5">
                                                <tr>
                                                        <td>Nama</td>
                                                        <td><input type="text" name="nama" size="12" class="control-label" for="inputEmail" /></td>        <!--input username -->
                                                </tr>
                                                <tr>
                                                        <td>Password</td>
                                                        <td><input type="password" name="pass" /></td> <!--input password -->
                                                </tr>
                                                <tr>
                                                        <td></td>
                                                        <td>
														<label class="checkbox">
															<input type="checkbox" name="remember" value="simpan" class="checkbox"/>Remember Me</td> <!--cehck box remember me -->
														</label>
												</tr>
                                                <tr>
                                                        <td></td>
                                                        <td><input type="submit" value="Login" class="btn btn-warning" /></td>                <!--button login -->
                                                </tr>
                                        </table>
                                </form>
                        </div>
                        <?php
                        exit;                                        //keluar dari fungsi prosedure
                }
                if(isset($_GET['m']) && $_GET['m'] == 'Logout'){        //perintah ketika logout diklik
                        //hapus session
                        if(isset($_SESSION['login'])){     //jika session ada                          
                                unset($_SESSION['login']); 
                                session_destroy(); //session dihapus
                        }
                        
                        //redireksi halaman
                        ?>
                        <script type="text/javascript">
                                document.location.href="./tugasrumah.php"; /*kembali ke indeks halaman awal*/
                        </script>
                        <?php
                }
        }
?>