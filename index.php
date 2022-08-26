<?php
 @session_start();

	require_once('classes/Db.class.php');
	require_once('classes/util.php');
	
	$db = new Db();
	$util = new Util();
	
	global $login;
	global $senha;
    
    if(isset($_POST['login'])){$login = $_POST['login'];}else{$login = "";}
    if(isset($_POST['senha'])){$senha = $_POST['senha'];}else{$senha = "";}
  
    
	
	
	//Usuário retornou ao login, com sessão aberta
	if(isset($_SESSION['id'])){
		$_SESSION = array(); //elimina a sessão
		 
		$util->redirecionamentopage('index.php'); //recarrega a página
    }
    
	//Login padrão
	if (isset($_POST['ok']) == 'true') {
		 
		
		$db->bind("usuario",$login);
		$db->bind("senha",base64_encode($senha));
        
		$user     =  $db->row("select  * from usuarios where usuario=:usuario and senha=:senha");
        
         
        
		if(!empty($user)) { 
            $_SESSION['id_usuario'] = $user['id_usuario'];
            $_SESSION['usuario'] = $user['usuario'];
            
            $util->redirecionamentopage('exibe_anos.php');
			
		}else {
            $util->msgbox("Login ou senha errado!");
            }
		
	}
    
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico" >

    <title>PREPARA</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/estilos.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image2">
                            <img src="img/login.svg" width="500" height="400"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bem-vindo ao Prepara!</h1>
                                    </div>
                                    <form class="user" method="post" action="" id="form" name="form">
                                        <input type="hidden" id="ok" name="ok" value="ok">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="login" name="login" aria-describedby="emailHelp"
                                                placeholder="Informe o usuário" title="É necessário informar o usuário">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="senha" name="senha" placeholder="Informe a Senha" title="É necessário informar a Senha">
                                        </div>
                                         
                                         
                                        <button id="botao" type="button" class="btn  btn-success btn-info btn-block" onClick="validar(document.form);">Entrar</button>

                                             
                                    </form>
                                     
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script language="javascript">
    function validar(formulario){
     for(i=0;i<=formulario.length-1;i++){
        if ((formulario[i].value=="")&&(formulario[i].title!="")){
            if ((formulario[i].type!="button")&&(formulario[i].type!="submit")&&(formulario[i].type!="hidden")){
                    alert(formulario[i].title);
                    formulario[i].focus();
                    return false;
                }
            }
        }

        formulario.ok.value='true';
        formulario.submit();
    }
    </script>

</body>

</html>