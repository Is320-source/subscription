<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <script src="js/jquery-3.4.1.min.js"></script>
  <script >
    jQuery(document).ready(function(){
		
		jQuery(document).submit(function(e){
			
			e.preventDefault()
      //dados pessoais
			const nome     = jQuery("#nome").val();
			const genero = jQuery("#genero").val();
      const data     = jQuery("#data").val();
			const bi = jQuery("#bi").val();
      const passaport     = jQuery("#passaport").val();
			const nacionalidade = jQuery("#nacionalidade").val();
      const habilitacao     = jQuery("#habilitacao").val();
			const profissao = jQuery("#profissao").val();

      //alert (nome+" "+genero+" "+data+" "+bi+" "+passaport+" "+nacionalidade+" "+habilitacao+" "+profissao)

      //dados do Curso
			const curso     = jQuery("#curso").val();
			const carga_horaria = jQuery("#carga_horaria").val();
      const periodo     = jQuery("#periodo").val();
			const dias_semana = jQuery("#dias_semana").val();
      const mensalidade     = jQuery("#mensalidade").val();
			const valor = jQuery("#valor").val();

      //alert (curso+" "+carga_horaria+" "+periodo+" "+dias_semana+" "+mensalidade+" "+valor)
    
				jQuery.ajax({
					type: 'POST',
					url: '../controller/ficha_inscricao.controller.php',
					data: {
            nome: nome, genero: genero, data: data, bi: bi,
            passaport: passaport, nacionalidade: nacionalidade, 
            habilitacao: habilitacao, profissao: profissao,
            curso: curso,
            carga_horaria: carga_horaria,periodo: periodo, 
            dias_semana: dias_semana, mensalidade: mensalidade, valor: valor
          },
					success: function(dado){
						if(dado.toString() === "success"){
							jQuery("#info-alert").html("<div class='alert alert-primary alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>                  <h5><i class='icon fas fa-check'></i> SUCESSO!</h5> Inscri????o feita com sucesso... </div>").show(200).delay(4000).hide(200);                       
						    
							return false; 
						} 
						if(dado.toString() === "error"){ 
							jQuery("#info-alert").html("<div class='alert alert-warning alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><h5><i class='icon fas fa-exclamation-triangle'></i> Aten????o!</h5>dados inv??lidos!</div>").show(200).delay(5000).hide(200);
								return false;
						}
					},
					error: function(erro){
						console.log(erro.trim());
					}
				});
		})
	})
  </script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include 'menu.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include 'top.php'; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Inscrever</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

        

          <!-- Content Row -->

          

   <div class="card o-hidden border-0 shadow-lg my-0">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->

        
        <div class="row">

          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Ficha de Inscri????o</h1>
                <h3 class="h4 text-gray-900 mb-4">Informa????es Pessoais</h3>
              </div>
              <form class="user">
                <div id="info-alert"></div>
                <div class="form-group">
                  <div class="form-group">
                    <input type="text" style="border-radius: 3px;" class="form-control form-control-user border-bottom-success" id="nome" placeholder="Nome Completo">
                  </div>
                  <div class="form-group">
                    <select  style=" border-radius: 3px;" class="form-control border-bottom-success" id="genero" >
                      <option value="Masculino">Masculino</option>
                      <option value="Femenino">Femenino</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <input type="date" style=" border-radius: 3px;" class="form-control form-control-user border-bottom-success " id="data" placeholder="Email Address">
                </div>
                <div class="form-group ">
                  <div class="form-group">
                    <input type="text" style=" border-radius: 3px;" class="form-control form-control-user border-bottom-success" id="bi" placeholder="Bilhete de Identidade">
                  </div>
                  <div class="form-group">
                    <input type="text" style=" border-radius: 3px;" class="form-control form-control-user border-bottom-success" id="passaport" placeholder="Passaporte N??">
                  </div>
                </div>
                <div class="form-group ">
                  <div class="form-group">
                    <input type="text" style=" border-radius: 3px;" class="form-control form-control-user border-bottom-success" id="nacionalidade" placeholder="Nacionalidade">
                  </div>
                  <div class="form-group">
                    <input type="text" style=" border-radius: 3px;" class="form-control form-control-user border-bottom-success" id="habilitacao" placeholder="Habilita????o Liter??ria">
                  </div>
                </div>
                <div class="form-group ">
                  <div class="form-group">
                    <input type="text" style=" border-radius: 3px;" class="form-control form-control-user border-bottom-success" id="profissao" placeholder="Profiss??o">
                  </div>
                </div>
                <h3 class="h4 text-gray-900 mb-4"> Curso de Forma????o em que se Escreve </h3>
                <div class="form-group">
                  <div class="form-group">
                    <input type="text" style=" border-radius: 3px;" class="form-control form-control-user border-bottom-success" id="curso" placeholder="Curso">
                  </div>
                  <div class="form-group">
                    <input type="text" style=" border-radius: 3px;" class="form-control form-control-user border-bottom-success" id="carga_horaria" placeholder="Carga Horaria">
                  </div>
                  <div class="form-group">
                    <input type="text" style=" border-radius: 3px;" class="form-control form-control-user border-bottom-success" id="periodo" placeholder="Periodo">
                  </div>
                  <div class="form-group">
                    <input type="text" style=" border-radius: 3px;" class="form-control form-control-user border-bottom-success" id="dias_semana" placeholder="Dias de Semana">
                  </div>
                  <div class="form-group">
                    <input type="text" style=" border-radius: 3px;" class="form-control form-control-user border-bottom-success" id="mensalidade" placeholder="Mensalidade">
                  </div>
                  <div class="form-group">
                    <input type="text" style=" border-radius: 3px;" class="form-control form-control-user border-bottom-success" id="valor" placeholder="Valor Pago">
                  </div>
                </div>
               


                <input type="submit" style="font-size: 20px; text-transform: uppercase; font-weight: bolder; border-radius: 3px;" class="btn btn-primary btn-user btn-block border-bottom-info" value="Inscrever">
                
              </form>
              
            </div>

            
          </div>
        </div>

        
      </div>
    </div>
            
          </div>

        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">??</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
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

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
