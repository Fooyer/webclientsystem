class Table {

    constructor(linhasPorPagina,arquivoAPI){

        this.rowsPerPage = 20;
        this.currentPage = 1;
        this.tableData;

        startTable(linhasPorPagina,arquivoAPI)

    }

    renderTable() {

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

    prevPage() {

        if (currentPage > 1) {
            currentPage--
            renderTable()
        }

    }

    nextPage() {

        if (currentPage < tableData.length / rowsPerPage) {
            currentPage++;
            renderTable();
        }

    }

    async startTable(linhasPorPagina,arquivoAPI){

        rowsPerPage = linhasPorPagina

        await fetch(arquivoAPI).then(Response => Response.json()).then(data => tableData = data)

        renderTable()

        document.getElementById('prev-page').addEventListener('click', tabela.prevPage);
        document.getElementById('next-page').addEventListener('click', tabela.nextPage);
    }

}

module.exports = Table;