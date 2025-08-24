document.getElementById('telefone').addEventListener('input', function(e){

    let value = e.target.value.replace(/\D/g, '');
    if(value.length > 11) value = value.slice(0, 11);

    if(value.length > 2){
        value = `(${value.slice(0, 2)}) ${value.slice(2, 7)}-${value.slice(7, 11)}`;
    } else if (value.length > 0){
        value = `(${value})`
    }

    e.target.value = value;
});

document.getElementById('contact-form').addEventListener('submit', function(e){
    e.preventDefault();

    // capturar os valores dos campos
    const nome = document.getElementById('nome').value;
    const email = document.getElementById('email').value;
    const telefone = document.getElementById('telefone').value;
    const mensagem = document.getElementById('mensagem').value;

    // criar o html para exibir os dados
    const resultDiv = document.getElementById('form-result');
    resultDiv.innerHTML = `
        <h3>Mensagem Enviada!</h3>
        <p>Nome: ${nome} </p>
        <p>Email: ${email} </p>
        <p>Telefone: ${telefone} </p>
        <p>Mensagem: ${mensagem} </p>
    `;

    resultDiv.style.display = 'block';

    document.getElementById('contact-form').reset();

});