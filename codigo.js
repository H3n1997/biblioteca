$(function(){
	$('form#fromAutor').on('submit', altaAutor);
	$('form#formEditorial').on('submit', altaEditorial);
	$('form.formLibros').on('submit', altaLibros);
	$('form.bajas-from').on('submit', searchAutor);
	cargaAutor();
	cargaEditorial();
	$('li.autor').on('click', menuAutor);
	$('li.editorial').on('click', menuEditorial);
	$('li.libro').on('click', menuLibro);
});
function altaAutor(e){
	e.preventDefault();
	var autor=$('input#autor').val();
	var nacionalidad=$('input#nacionalidad').val();
	$.ajax({
		url: 'altas.php',
		type: 'POST',
		dataType: 'JSON',
		data: {autor: autor, pais:nacionalidad, tipo:0},
	})
	.done(function() {
		console.log("success");
	});
}
function altaEditorial(e){
	e.preventDefault();
	var editorial=$('input#nombreEditorial').val();
	$.ajax({
		url: 'altas.php',
		type: 'POST',
		dataType: 'JSON',
		data: {editorial: editorial, tipo:1},
	})
	.done(function() {
		console.log("success");
	});
}
function cargaAutor(){
	$.ajax({
		url: 'cargaAutor.php',
		type: 'GET',
		dataType: 'JSON',
	})
	.done(function(data) {
		var cadena="";
		for(x in data){
			cadena=cadena+'<option value='+data[x].id+'>'+data[x].nombre+'</option>'
		}
		$('select.autor').append(cadena);
	});
	
}
function cargaEditorial(){
	$.ajax({
		url: 'cargaEditorial.php',
		type: 'GET',
		dataType: 'JSON',
	})
	.done(function(data) {
		var cadena="";
		for(x in data){
			cadena=cadena+'<option value='+data[x].id+'>'+data[x].nombre+'</option>'
		}
		$('select.editorial').append(cadena);
	});
	
}
function altaLibros(e){
	e.preventDefault();
	var titulo=$('input#titulo').val();
	var autor=$('select.autor').val();
	var editorial=$('select.editorial').val();
	var categoria=$('input#categoria').val();
	var precio=$('input#precio').val();
	$.ajax({
		url: 'altas.php',
		type: 'POST',
		dataType: 'JSON',
		data: {titulo:titulo, autor:autor, editorial:editorial, categoria:categoria, precio:precio, tipo:2},
	})
	.done(function() {
		console.log("success");
	});
}
function menuAutor(){
	$('form#fromAutor').show('slow');
	$('form#formEditorial').hide('slow');
	$('form.formLibros').hide('slow');
}
function menuEditorial(){
	$('form#formEditorial').show('slow');
	$('form#fromAutor').hide('slow');
	$('form.formLibros').hide('slow');
}
function menuLibro(){
	$('form.formLibros').show('slow');
	$('form#fromAutor').hide('slow');
	$('form#formEditorial').hide('slow');
}
function searchAutor(e){
	e.preventDefault();
	var autor=$('input#bajas-from-search').val();
	$.ajax({
		url: 'search.php',
		type: 'GET',
		dataType: 'JSON',
		data: {autor: autor},
	})
	.done(function(data) {
		var tabla="<tr>";
		console.log(data.id);
		tabla+="<td>"+data.titulo+"</td>";
		tabla+="<td>"+data.idAutor+"</td>";
		tabla+="<td>"+data.idEditorial+"</td>";
		tabla+="<td>"+data.categoria+"</td>";
		tabla+="<td>"+data.precio+"</td>";
		tabla+="<td><img src=Trash.png data-id="+data.id+"></td>";
		tabla=tabla+"</tr>";
		$('table#bajas').append(tabla);
		$('table tbody img').on('click', elimina);
	});
}
function elimina(){
	var id=$(this).data('id')
	if(confirm("Desea eliminar")){
		$.ajax({
			url: 'elimina.php',
			type: 'POST',
			dataType: 'JSON',
			data: {id: id},
		})
		.done(function() {
		});
		$('table tbody tr').hide('slow');
	}
}