'use strict';

const limparFormulario = (endereco) => {
	document.getElementById('log').value = '';
	document.getElementById('est').value = '';
	document.getElementById('cid').value = '';
}



const preencherFormulario = (endereco) => {
	document.getElementById('log').value = endereco.logradouro;
	document.getElementById('est').value = endereco.uf;
	document.getElementById('cid').value = endereco.localidade;
}

const eNumero = (numero) => /^[0-9]+$/.test(numero);
const cepValido = (cep) => cep.length == 8 && eNumero(cep);

const pesquisarCep = async() => {
		limparFormulario();
		
	const cep = document.getElementById('cep').value;
	const url = `http://viacep.com.br/ws/${cep}/json/`;

	if (cepValido(cep)){
    const dados = await fetch(url);
    const endereco = await dados.json();
    if(endereco.hasOwnProperty('erro')){
    	document.getElementById('log').value = 'CEP não encontrado';
    	document.getElementById('est').value = 'CEP não encontrado';
    	document.getElementById('cid').value = 'CEP não encontrado';
    }else{
    	preencherFormulario(endereco);
    }
   }else{
   	document.getElementById('log').value = 'CEP incorreto';
   }
	
}

document.getElementById('cep')
                     .addEventListener('focusout',pesquisarCep);

