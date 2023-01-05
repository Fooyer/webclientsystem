
window.onload = function() {

    const tabela = new Table(20,'./../data_operations/obterClientes.php')

};

class Table {

    constructor(linhasPorPagina,arquivoAPI){

        this.rowsPerPage = 20;
        this.currentPage = 1;
        this.tableData;

        this.startTable(linhasPorPagina,arquivoAPI)

    }

    renderTable() {

        const table = document.getElementById('my-table');

        const startIndex = (this.currentPage - 1) * this.rowsPerPage;
        const endIndex = startIndex + this.rowsPerPage;

        table.innerHTML = '';

        for (let i = startIndex; i < endIndex; i++) {
            const row = this.tableData[i];
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

    async startTable(linhasPorPagina,arquivoAPI){

        prevPage() {

            if (this.currentPage > 1) {
                this.currentPage--
                this.renderTable()
            }
    
        }
    
        nextPage() {
    
            if (this.currentPage < this.tableData.length / this.rowsPerPage) {
                this.currentPage++;
                this.renderTable();
            }
    
        }

        this.rowsPerPage = linhasPorPagina

        await fetch(arquivoAPI).then(Response => Response.json()).then(data => this.tableData = data)

        this.renderTable()

        document.getElementById('prev-page').addEventListener('click', prevPage);
        document.getElementById('next-page').addEventListener('click', nextPage);
    }

}