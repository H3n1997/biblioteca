$(function(){
	$.ajax({
		url:'autores.php',
		type:'GET',
		dataType:'JSON',
	})
	.done(function(data){
		var tabla='<tr><td>'+ data.nombre + '</tr></td>';
		$('tbody').html(tabla);
	})
	.fail(function(){
		console.log('error');
	});
});
$('form').on('submit',guardar);
function guardar(e){
	e.preventDefault();
}
