const tbody = document.querySelector("tbody");

const listarClasses= async () => {
    const dados = await fetch("./index.php")
    const reposta = await dados.text();
    tbody.innerHTML = reposta;
}

listarClasses();

async function visClasse(id) {
    console.log("acessou:" + id);
}
