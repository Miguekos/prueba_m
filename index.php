<?php include 'header.php'; ?>

<!--
<div class="jumbotron">
	<h1 class="text-center">Monitor</h1>
</div>

-->

<!-- <h2 class="text-center">Filtrar Por Estados</h2> -->

<!-- <div class="text-center">
  <button class="btn"> Mostrar Todos</button>
  <button class="btn"> Normal</button>
  <button class="btn"> Alarmados</button>
  <button class="btn"> Desconectados</button>
</div> -->


<p> </p>
        <div class="">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
						
						<div id="pruebasn03" class="col-md-3">
                            <div class="card">
                                <div class="card-header" id="sn03_alert" data-background-color=" ">
                                    <h4 class="text-center title" id="sn03_nombre">SN03</h4>
                                    <p class="text-center category">Estado del Servidor</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead  class="text-primary">
                                            <th>Server</th>
                                            <th>Estatus</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Uso CPU</td>
                                                <td  id="sn03_cpu_load" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Memoria Usada</td>
                                                <td id="sn03_used" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Memoria Usada %</td>
                                                <td id="sn03_total" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Memoria Usada %</td>
                                                <td id="sn03_percent" class="text-primary">0</td>
                                            </tr>
											<tr>
                                                <td>Carga Cores</td>
                                                <td id="sn03_load_total" class="text-primary">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
						
						
						<div class="col-md-3">
                            <div class="card">

                                <div class="card-header" id="sp14_alert" data-background-color=" ">
                                    <h4 class="text-center title" id="sp14_nombre">SP14</h4>
                                    <p class="text-center category">Estado del Servidor</p>
                                </div>
                                <div class="card-content table-responsive filterDiv Normal">
                                    <table class="table">
                                        <thead  class="text-primary">
                                            <th>Server</th>
                                            <th>Estatus</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Uso CPU</td>
                                                <td  id="sp14_cpu_load" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Memoria Usada</td>
                                                <td id="sp14_used" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Memoria Total</td>
                                                <td id="sp14_total" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Memoria Usada %</td>
                                                <td id="sp14_percent" class="text-primary">0</td>
                                            </tr>
											<tr>
                                                <td>Carga Cores</td>
                                                <td id="sp14_load_total" class="text-primary">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
						
						
						<div class="col-md-3">
                            <div class="card">
                                <div class="card-header" id="sd01_alert" data-background-color=" ">
                                    <h4 class="text-center title" id="sd01_nombre" >SD01</h4>
                                    <p class="text-center category">Estado del Servidor</p>
                                </div>
                                <div class="card-content table-responsive">
								
								
                                    <table class="table">
                                        <thead  class="text-primary">
                                            <th>Server</th>
                                            <th>Estatus</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>CPU Carga</td>
                                                <td  id="sd01_cpu_load" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Memoria Usada</td>
                                                <td id="sd01_used" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Memoria Total</td>
                                                <td id="sd01_total" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Memoria Usada %</td>
                                                <td id="sd01_percent" class="text-primary">0</td>
                                            </tr>
											<tr>
                                                <td>Carga Cores</td>
                                                <td id="sd01_load_total" class="text-primary">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-header" id="sp06_alert" data-background-color="">
                                    <h4 class="text-center title" id="sp06_nombre">SP06</h4>
                                    <p class="text-center category">Estado del Servidor</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead  class="text-primary">
                                            <th>Server</th>
                                            <th>Estatus</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>CPU Carga</td>
                                                <td  id="sp06_cpu_load" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Memoria Usada</td>
                                                <td id="sp06_used" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Memoria Total</td>
                                                <td id="sp06_total" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Memoria Usada %</td>
                                                <td id="sp06_percent" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Carga Cores</td>
                                                <td id="sp06_load_total" class="text-primary">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
						
						<div class="col-md-3">
                            <div class="card">
                                <div class="card-header" id="TKI_alert" data-background-color="">
                                    <h4 class="text-center title" id="TKI_nombre" >Tracking</h4>
                                    <p class="text-center category">Estado del Servidor</p>
                                </div>
                                <div class="card-content table-responsive">
								
								
                                    <table class="table">
                                        <thead  class="text-primary">
                                            <th>Server</th>
                                            <th>Estatus</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>CPU Carga</td>
                                                <td  id="TKI_cpu_load" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Memoria Usada</td>
                                                <td id="TKI_used" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Memoria Total</td>
                                                <td id="TKI_total" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Memoria Usada %</td>
                                                <td id="TKI_percent" class="text-primary">0</td>
                                            </tr>
											<tr>
                                                <td>Carga Cores</td>
                                                <td id="TKI_load_total" class="text-primary">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
						
						
						<div id="pruebatk2" class="col-md-3">
                            <div class="card">
                                <div class="card-header" id="TK2_alert" data-background-color="">
                                    <h4 class="text-center title" id="TK2_nombre" >TK2</h4>
                                    <p class="text-center category">Estado del Servidor</p>
                                </div>
                                <div class="card-content table-responsive">
                                
                                
                                    <table class="table">
                                        <thead  class="text-primary">
                                            <th>Server</th>
                                            <th>Estatus</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>CPU Carga</td>
                                                <td  id="TK2_cpu_load" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Memoria Usada</td>
                                                <td id="TK2_used" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Memoria Total</td>
                                                <td id="TK2_total" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Memoria Usada %</td>
                                                <td id="TK2_percent" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Carga Cores</td>
                                                <td id="TK2_load_total" class="text-primary">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
						
						
						<div class="col-md-3">
                            <div class="card">
                                <div class="card-header" id="TK3_alert" data-background-color="">
                                    <h4 class="text-center title" id="TK3_nombre" >TK3</h4>
                                    <p class="text-center category">Estado del Servidor</p>
                                </div>
                                <div class="card-content table-responsive">
                                
                                
                                    <table class="table">
                                        <thead  class="text-primary">
                                            <th>Server</th>
                                            <th>Estatus</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>CPU Carga</td>
                                                <td  id="TK3_cpu_load" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Memoria Usada</td>
                                                <td id="TK3_used" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Memoria Total</td>
                                                <td id="TK3_total" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Memoria Usada %</td>
                                                <td id="TK3_percent" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Carga Cores</td>
                                                <td id="TK3_load_total" class="text-primary">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
						
						
						<div class="col-md-3">
                            <div class="card">
                                <div class="card-header" id="TK4_alert" data-background-color="">
                                    <h4 class="text-center title" id="TK4_nombre" >TK4</h4>
                                    <p class="text-center category">Estado del Servidor</p>
                                </div>
                                <div class="card-content table-responsive">
                                
                                
                                    <table class="table">
                                        <thead  class="text-primary">
                                            <th>Server</th>
                                            <th>Estatus</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>CPU Carga</td>
                                                <td  id="TK4_cpu_load" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Memoria Usada</td>
                                                <td id="TK4_used" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Memoria Total</td>
                                                <td id="TK4_total" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Memoria Usada %</td>
                                                <td id="TK4_percent" class="text-primary">0</td>
                                            </tr>
                                            <tr>
                                                <td>Carga Cores</td>
                                                <td id="TK4_load_total" class="text-primary">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
						

                    </div>
                </div>
            </div>
            
<?php include 'footer.php'; ?>
