<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>



<!-- Button trigger modal -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#agregarViaje">
  Agregar un nuevo viaje
</button>

<!-- Modal -->
<div class="modal fade" id="agregarViaje" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar un nuevo viaje</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
			<div class="form-group well">
				<p>Viajo de </p><input type="text"><p> a </p><input type="text">
				<p>el día</p>
				<input type="date">
				<p> a las </p>
				<select style="width:70px">
					<option>01</option>
					<option>02</option>
					<option>03</option>
					<option>04</option>
					<option>05</option>
					<option>06</option>
					<option>07</option>
					<option>08</option>
					<option>09</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
				</select>
				<select style="width:70px">
					<option>00</option>
					<option>05</option>
					<option>10</option>
					<option>15</option>
					<option>20</option>
					<option>25</option>
					<option>30</option>
					<option>35</option>
					<option>40</option>
					<option>45</option>
					<option>50</option>
					<option>55</option>
				</select>
				<select style="width:70px">
					<option>AM</option>
					<option>PM</option>
				</select>
				<label>Pasajeros</label><input type="number" min="1">
				
			</div>
			
		</form>      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Olvidar</button>
        <button type="button" class="btn btn-primary">Publicar</button>
      </div>
    </div>
  </div>
</div>



	<hr>
    <div class="thumbnail">
      <img src="..." alt="...">
      <div class="caption">
        <h3>"nombre" </h3>
        <p>viajará de "origen" a "destino" el día "fecha" a las "hora" quedan "numero" lugares disponbles</p>
        <p><a href="javascript: void(0)" onclick="alert('solicitud enviada')" class="btn btn-success" role="button">Viajar</a></p>
        <h6><small>publicado el dia ""</small></h6>
      </div>
    </div>
    <hr>

<div class="thumbnail">
      <img src="..." alt="...">
      <div class="caption">
        <h3>"nombre" </h3>
        <p>viajará de "origen" a "destino" el día "fecha" a las "hora" quedan "numero" lugares disponbles</p>
        <p><a href="#" class="btn btn-success" role="button">Viajar</a></p>
        <h6><small>publicado el dia ""</small></h6>
      </div>
    </div>
    <hr>

    <div class="thumbnail">
      <img src="..." alt="...">
      <div class="caption">
        <h3>"nombre" </h3>
        <p>viajará de "origen" a "destino" el día "fecha" a las "hora" quedan "numero" lugares disponbles</p>
        <p><a href="#" class="btn btn-success" role="button">Viajar</a></p>
        <h6><small>publicado el dia ""</small></h6>
      </div>
    </div>
    <hr>

<div class="thumbnail">
      <img src="..." alt="...">
      <div class="caption">
        <h3>"nombre" </h3>
        <p>viajará de "origen" a "destino" el día "fecha" a las "hora" quedan "numero" lugares disponbles</p>
        <p><a href="#" class="btn btn-success" role="button">Viajar</a></p>
        <h6><small>publicado el dia ""</small></h6>
      </div>
    </div>
    <hr>

    <div class="thumbnail">
      <img src="..." alt="...">
      <div class="caption">
        <h3>"nombre" </h3>
        <p>viajará de "origen" a "destino" el día "fecha" a las "hora" quedan "numero" lugares disponbles</p>
        <p><a href="#" class="btn btn-success" role="button">Viajar</a></p>
        <h6><small>publicado el dia ""</small></h6>
      </div>
    </div>
    <hr>

<div class="thumbnail">
      <img src="..." alt="...">
      <div class="caption">
        <h3>"nombre" </h3>
        <p>viajará de "origen" a "destino" el día "fecha" a las "hora" quedan "numero" lugares disponbles</p>
        <p><a href="#" class="btn btn-success" role="button">Viajar</a></p>
        <h6><small>publicado el dia ""</small></h6>
      </div>
    </div>
    <hr>

    <div class="thumbnail">
      <img src="..." alt="...">
      <div class="caption">
        <h3>"nombre" </h3>
        <p>viajará de "origen" a "destino" el día "fecha" a las "hora" quedan "numero" lugares disponbles</p>
        <p><a href="#" class="btn btn-success" role="button">Viajar</a></p>
        <h6><small>publicado el dia ""</small></h6>
      </div>
    </div>
    <hr>

<div class="thumbnail">
      <img src="..." alt="...">
      <div class="caption">
        <h3>"nombre" </h3>
        <p>viajará de "origen" a "destino" el día "fecha" a las "hora" quedan "numero" lugares disponbles</p>
        <p><button class="btn btn-success" role="button" onclick="initialize();">Viajar</button></p>
        <h6><small>publicado el dia " "</small></h6>
      </div>
    </div>



<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Alerta!</strong> Better check yourself, you're not looking too good.
</div>

