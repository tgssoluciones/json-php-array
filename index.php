<script src="js/jquery.js"></script>
<script type="text/javascript">

$(document).ready(function(){
$.ajax({
url: 'buscador.php',
type: 'POST',
dataType: 'JSON',

success: function(data){
						$('.resp').html('<table>');
            for (fila of data.html3) {
				$('.resp').append('<tr>');
				for (celda of fila) {
					$('.resp').append('<td>'+celda+'</td>');
				}
				$('.resp').append('</tr>');
            }
			$('.resp').append('<table>');
        }
    });
}
);
</script>


<div class="col-md-10">
<table id="userTable" class="table table-sm table-striped">
<thead>
<tr>
<th width="5%">Nro</th>
<th width="20%">Usuario</th>
<th width="20%">Nombres</th>
<th width="30%">Email</th>
<th width="30%">Fecha</th>
</tr>
</thead>
<tbody>
	    <div id="respuesta"></div>
</tbody>
</table>
</div>