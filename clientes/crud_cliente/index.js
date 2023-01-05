
window.onload = function() {

   startTable();

    document.getElementById('prev-page').addEventListener('click', prevPage);
    document.getElementById('next-page').addEventListener('click', nextPage);

};

let rowsPerPage = 20;
let currentPage = 1;
let tableData;

function renderTable() {

    const table = document.getElementById('my-table');

    const startIndex = (currentPage - 1) * rowsPerPage;
    const endIndex = startIndex + rowsPerPage;

    table.innerHTML = '';

    for (let i = startIndex; i < endIndex; i++) {
        const row = tableData[i];
        if (!row) break;

        const tr = document.createElement('tr');

        tr.id = "linhaTabela"

        tr.setAttribute("onclick", "obterDadosLinhaTabela(event)")

        tr.innerHTML = `
        <td>${row.id}</td>
        <td>${row.nome}</td>
        <td>${row.email}</td>
        <td>${row.telefone}</td>`

        table.appendChild(tr)
    }
}

function prevPage() {

    if (tabela.currentPage > 1) {
        tabela.currentPage--
        tabela.renderTable()
    }

}

function nextPage() {

    console.log(tabela.tableData)

    if (tabela.currentPage < tabela.tableData.length / tabela.rowsPerPage) {
        tabela.currentPage++;
        tabela.renderTable();
    }

}

async function startTable(){

    await fetch("./../data_operations/obterClientes.php").then(Response => Response.json()).then(data => tableData = data)

    renderTable()

}