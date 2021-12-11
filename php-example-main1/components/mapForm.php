<div id='map' style='width: 400px; height: 300px;'></div>
<form id ="report_form">
        <h6>Reporte</h6>
        <br>
        <label>Titulo</label>
        <input type="text" placeholder="Titulo" id="titulo" required/>
        <label>Descripcion del problema</label>
        <textarea placeholder="Describe el problema" id="descripcion" required></textarea>
        <label>Agrega una foto</label>
        <input type="file" id="foto">
        <label>Selecciona la ubicacion</label>    
</form>
<p>
  <b>Posición del marcador:</b><span id="currentPosition"></span>
</p>
<script type="text/javascript" src="/src/js/mapform.js"></script>