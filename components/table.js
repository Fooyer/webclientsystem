const rowsPerPage = 20;
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

        console.log(row)

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

    if (currentPage > 1) {
        currentPage--
        renderTable()
    }

}

function nextPage() {

    if (currentPage < tableData.length / rowsPerPage) {
        currentPage++;
        renderTable();
    }

}

window.onload = async function() {

    await fetch('./../clientes/data_operations/obterClientes.php').then(Response => Response.json()).then(data => tableData = data)

    renderTable()

};

document.getElementById('prev-page').addEventListener('click', prevPage);
document.getElementById('next-page').addEventListener('click', nextPage);