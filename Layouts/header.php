<?php
require_once('Clientes/metadata.php');
?>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="/">
			<span class="glyphicon glyphicon-cloud" aria-hidden="true" ></span>
			e2ew
			</a>
		</div>
			<ul class="nav navbar-nav">
				<li class="active">
					<li class="dropdown">
		 			<a class="dropdown-toggle" data-toggle="dropdown" href="#">App
		 				<span class="caret"></span></a>
		 				<ul class="dropdown-menu">
			 				<li> <a href="http://<?php echo $out;?>:8080/EICW/initAppn1.start()" target="_blank">EIC</a></li>
			 				<li><a href="http://e2ew.inttegrio-aws.com/bmi/appn1.init()" target="_blank">BMI</a></li>
		 			</ul>
	 </li>
				</li>
				<li>
					<a href="?menu=mostrar">Ver Estados</a>
				</li>
				<li>
					<a  data-toggle="modal" data-target="#universalModal" id="searchBtn_logs" >Logs</a>
				</li>
			</ul>
	</div>
</nav>
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
