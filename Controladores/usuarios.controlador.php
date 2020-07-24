<?php

	class ControladorUsuarios{

/*=============================================
=            Ingreso de Usuario               =
=============================================*/


		public function ctrIngresoUsuario(){

			if(isset($_POST["loginUser"])){

				if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["loginUser"]) &&
				   preg_match('/^[a-zA-Z0-9]+$/', $_POST["UserPass"])){

					$tabla = "usuarios";

					$item = "Usuario";
					$valor = $_POST["loginUser"];

					$respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);

					$_SESSION["iniciarSesion"] = "ok";


					echo '<<script>

						window.location = "inicio";

					</script>';


					}else{

						echo '<br><div class="alert alert-danger">Error al ingresar, Intenta de nuevo</div>';

					}



				}


			}


		}

	