const searchInput = document.getElementById('search-input');
const gridContainer = document.getElementById('grid-container');

searchInput.addEventListener('keyup', function() {
  const filter = searchInput.value.toLowerCase().trim();

  // percorre todos os títulos de grade
  gridContainer.querySelectorAll('.grid-title').forEach(title => {
    // esconde o título se nenhum elemento filho corresponder à pesquisa
    let titleVisible = false;

    // percorre todos os elementos filhos da grade atual
    title.nextElementSibling.querySelectorAll('.grid-item').forEach(item => {
      // filtra pelo conteúdo do item ou do título
      const text = `${item.textContent} ${title.textContent}`.toLowerCase();
      const match = text.includes(filter);

      // exibe ou oculta o item com base no filtro
      item.style.display = match ? 'block' : 'none';

      // se houver correspondência com o filtro, exibe o título
      if (match) {
        titleVisible = true;
      }
    });

    title.style.display = titleVisible ? 'block' : 'none';
  });
});
