// Dados dos livros (exemplo)
const livros = [
    {
        titulo: 'algoritmo e visual G',
        imagem: 'images/visual.png',
        arquivo: 'assets/livros/algoritmo e visuallg.pdf'
    },

    {
        titulo: 'Apostila de hardware',
        imagem: 'images/apostila.png',
        arquivo: 'assets/livros/apostila-de-hardware.pdf'
    },

    {
        titulo: 'Arquitetura dos computadores',
        imagem: 'images/arquitetura.png',
        arquivo: 'assets/livros/arquitetura_computadores.pdf'
    },

    {
        titulo: 'Efetividade das tecnologias de informação',
        imagem: 'images/21licoes.jpeg',
        arquivo: 'https://www.google.co.ao/books/edition/Efetividade_das_tecnologias_da_informa%C3%A7/u_IxEAAAQBAJ?hl=pt-PT&gbpv=1&dq=tecnologia+de+informa%C3%A7%C3%A3o+e+comunica%C3%A7%C3%A3o+portugues&pg=PA25&printsec=frontcover'
    },

    {
        titulo: 'Hardware e software',
        imagem: 'images/hardware.png',
        arquivo: 'assets/livros/hardwareesoftware.pdf'
    },

    {
        titulo: 'Programação para iniciantes',
        imagem: 'images/progra.png',
        arquivo: 'assets/livros/livro-programacao-para-iniciantes.pdf'
    }

];

// Renderiza os livros na tela
function renderizarLivros(livrosParaMostrar) {
    const container = document.getElementById('bookContainer');
    container.innerHTML = '';

    livrosParaMostrar.forEach(livro => {
        const livroDiv = document.createElement('div');
        livroDiv.className = 'book';
        livroDiv.style.backgroundImage = `url(${livro.imagem})`;

        livroDiv.innerHTML = `
            <div class="book-title">${livro.titulo}</div>
            <div class="book-actions">
                <a href="${livro.arquivo}" target="_blank">Ler</a>
                <a href="${livro.arquivo}" download>Baixar</a>
            </div>
        `;

        container.appendChild(livroDiv);
    });
}

// Função de pesquisa de livros
function pesquisarLivros() {
    const termo = document.getElementById('searchInput').value.toLowerCase();
    const livrosFiltrados = livros.filter(livro =>
        livro.titulo.toLowerCase().includes(termo)
    );
    renderizarLivros(livrosFiltrados);
}

// Inicializa com todos os livros
renderizarLivros(livros);