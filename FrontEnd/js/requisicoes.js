window.onload = function(e) {
	fetch(
		'http://devweb.uni.fermatil.com.br/TrabalhoFinalDevWeb/BackEnd/cadastros', {		
		}).then(response => response.json())				
	.then(data => { 
		console.log(data);
		data.forEach( cadastro => {  
			var table = document.getElementById("tabeladedados");
			var row = table.insertRow(-1);
			var TabCodigo = row.insertCell(0);
			var TabResponsavel = row.insertCell(1); 
			var TabDtinicio = row.insertCell(2); 
			var TabDtfinal = row.insertCell(3); 
			var TabDescricao = row.insertCell(4); 
			TabCodigo.innerHTML = cadastro.codigo;
			TabResponsavel.innerHTML = cadastro.responsavel;
			TabDtinicio.innerHTML = cadastro.dtinicio;
			TabDtfinal.innerHTML = cadastro.dtfinal;
			TabDescricao.innerHTML = cadastro.descricao;
		})
	}).catch(error => console.error(error))
}

function enviarForm() {
	var form = document.getElementById('formCadastrar');
	var data = {};
	data['codigo'] = form.codigo.value 
	data['responsavel'] = form.responsavel.value;
	data['dtinicio'] = form.dtinicio.value;
	data['dtfinal'] = form.dtfinal.value; 
	data['descricao'] = form.descricao.value;
	// console.log(JSON.stringify(data));
	fetch('http://devweb.uni.fermatil.com.br/TrabalhoFinalDevWeb/BackEnd/cadastros', {
		method: 'POST',       
		body: JSON.stringify(data)
	})
	.then((response) => {
		if (response.ok) {
			return response.json() 
		} else {
			return Promise.reject({ status: res.status, statusText: res.statusText });
		}   

	})
	.then((data) => {
		alert("Inserido com sucesso");
		location.href="principal.html"; })
	.catch(err => console.log('Error message:', err.statusText));
}
