<script type="text/javascript">
		$(document).ready(function() {
				$('#seccionRecargar').click(function() {
						// Recargo la página
						location.reload();
				});
		});
//alert(URLdomain);
 //var URLdomain = window.location.host;
 //document.getElementById('resultado').innerHTML = URLdomain;
 //window.onload = function what(){
//document.getElementById('resultado').innerHTML = URLdomain;
//};
</script>

<style type="text/css">
a.class_a_href{
pointer-events: none;
cursor: default;
}
</style>

<?php

	
	require_once('estados/auth.php');	
	require_once('estados/hb.php');	
?>
<div class="container">
  <h1>Estado de Aplicaciones</h1>
  <div class="col-xs-10 col-sm-3 col-md-3 col-lg-3">
  <div class="panel panel-default">
    <div class="panel-heading"><b>ID:</b> <?php echo $insid;?><br><b>Type:</b> <?php echo $instype;?><br><b>Zone:</b> <?php echo $zone;?><br><b>Ip:</b> <?php echo $ip;?><br><b>Ip pub:</b> <?php echo $ippub;?>
	<a href="javascript:myModal('logs/');"><span data-toggle="tooltip" title="Logs" class="pull-right glyphicon glyphicon-eye-open"></span></a>	
	</div>
    <div class="panel-body"></div>
	<table class="table">
  <thead>
    <tr>  
	<th scope="col"></th>
	<th>App</th>
	<th>Ping</th>
	<th>EAI</th>
	<th>E</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td>AUTH</td>
      <td><?php
	  $tas=$estado;
	   if($estado=="Activo"){        
		echo "<img src='img/ok.png' border='0' width='20' height='20'>";
    }elseif($estado=="Inactivo"){
        echo "<img src='img/nok.png' border='0' width='20' height='20'>";
	}?></td>
      <td></td>
	<td><a href="javascript:myModal('<?php echo $enlace_actual;?>/app_auth/');"><span data-toggle="tooltip" title="AUTH STATUS" class="glyphicon glyphicon-link"></span></a>	</td>					
    </tr>
    <!--tr>
      <th scope="row"></th>
         <td>E2DI</td>
      <td><?php
	  $tas=$este2di;
	   if($este2di=="Activo"){        
		echo "<img src='img/ok.png' border='0' width='20' height='20'>";
    }elseif($este2di=="Inactivo"){
        echo "<img src='img/nok.png' border='0' width='20' height='20'>";
	}?></td>
      <td><?php
	  $tas=$estEAIe2di;
	   if($estEAIe2di=="Activo"){        
		echo "<img src='img/ok.png' border='0' width='20' height='20'>";
    }elseif($estEAIe2di=="Inactivo"){
        echo "<img src='img/nok.png' border='0' width='20' height='20'>";
	}?></td>
	<td><a href="javascript:myModal('<?php echo $enlace_actual;?>/e2di_web/servlet/Status');"><span data-toggle="tooltip" title="NUCLEO STATUS" class="glyphicon glyphicon-link"></span></a>	</td>	
    </tr>
    <tr>
      <th scope="row"></th>
         <td>BMI</td>
      <td><?php
	  $tas=$estbmi;
	   if($estbmi=="Activo"){        
		echo "<img src='img/ok.png' border='0' width='20' height='20'>";
    }elseif($estbmi=="Inactivo"){
        echo "<img src='img/nok.png' border='0' width='20' height='20'>";
	}?></td>
      <td><?php
	  $tas=$estEAIbmi;
	   if($estEAIbmi=="Activo"){        
		echo "<img src='img/ok.png' border='0' width='20' height='20'>";
    }elseif($estEAIbmi=="Inactivo"){
        echo "<img src='img/nok.png' border='0' width='20' height='20'>";
	}?></td>
	<td><a href="javascript:myModal('<?php echo $enlace_actual;?>/bmi/servlet/State');"><span data-toggle="tooltip" title="BMI STATUS" class="glyphicon glyphicon-link"></span></a>	</td>	
    </tr-->	
	    <tr>
      <th scope="row"></th>
         <td>HB</td>
      <td><?php
	  $tas=$estmbank;
	   if($estmbank=="Activo"){        
		echo "<img src='img/ok.png' border='0' width='20' height='20'>";
    }elseif($estmbank=="Inactivo"){
        echo "<img src='img/nok.png' border='0' width='20' height='20'>";
	}?></td>
      <td><?php
	  $tas=$estEAImbank;
	   if($estEAImbank=="Activo"){        
		echo "<img src='img/ok.png' border='0' width='20' height='20'>";
    }elseif($estEAImbank=="Inactivo"){
        echo "<img src='img/nok.png' border='0' width='20' height='20'>";
	}?></td>
	<td><a href="javascript:myModal('<?php echo $enlace_actual;?>/HOMEBANKING/servlet/State');"><span data-toggle="tooltip" title="HB STATUS" class="glyphicon glyphicon-link"></span></a>	</td>	
    </tr>
  </tbody>
</table>
  </div>
  
</div>

</div>



<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="width:1000px;" id='myModalDialog1' role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Estados</h4>
			</div>
			<div class="modal-body">				
				<iframe id="modalContent1" frameborder="0" style="width: 100%; min-height: 30rem;"></iframe>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="universalModal" tabindex="-1" role="dialog" aria-labelledby="universalModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:1000px;" id='myModalDialog' role="document">
    <div class="modal-content">
      <form role="form" id="universalModalForm">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"> Close</span></button>
          <h4 class="modal-title"><span class="glyphicon glyphicon-pencil"></span> Edit<span class="modal-title">.model-title</span></h4>
        </div>
        <div class="alert alert-danger fade in" id="universalModal-alert" style="display: none;">
          <span class="alert-body"></span>
        </div>
        <div class="modal-body">
		<iframe id="modalContent" frameborder="0" style="width: 100%; min-height: 30rem;"></iframe>
		</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <!--button type="submit" class="btn btn-primary" id="submitBtn"></button-->
        </div>
      </form>
    </div>
  </div>
</div>
