<!DOCTYPE html>
<html>
<!-- Para alterar os icones entrar no site: https://feathericons.com/ -->
<head>
	<title> GITHUB - Qualidade / Linguagem de Programação</title>
	
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://getbootstrap.com.br/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Estilos customizados para esse template -->
    <link href="https://getbootstrap.com.br/docs/4.1/examples/dashboard/dashboard.css" rel="stylesheet">
  <script src="./js/jquery-3.3.1.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){

    $("#container-fluid a").click(function (e){
      
      e.preventDefault();
      var href = $(this).attr('href');
      $("#secao_prin").load(href +" #secao_prin");
    });
  });
  </script>
</head>

<body>

<header>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Qualidade / LP</a>
      
    </nav>
</header>
	    
    <div id="container-fluid" class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              
              <li class="nav-item">
                <a class="nav-link" href="lp.php"
                  <span data-feather="github"></span>
                  Listar repositorios PHP
                </a>
              </li>
              
              
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Resultado</h1>
            


          </div>

   			     <div id="secao_prin" >
                <h2> Teste </h2>

             </div> 
        </main>
      </div>
    </div>

   


<!-- Para alterar os icones entrar no site: https://feathericons.com/ -->

 <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->

   
    
    <!-- Ícones -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

</body>
</html>	