// Função para abrir um modal
function openModal(modalId) {
    var modal = document.getElementById(modalId);
    modal.style.display = 'block';
}

// Função para fechar um modal
function closeModal(modalId) {
    var modal = document.getElementById(modalId);
    modal.style.display = 'none';
}

// Adicione um event listener a cada botão do menu para abrir o modal correspondente
document.querySelectorAll('.menu a').forEach(function(link) {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        var modalId = link.getAttribute('href').substring(1); // Remove o '#' do href
        openModal(modalId);
    });
});

// Adicione um event listener a cada botão "Fechar" dos modais para fechá-los
document.querySelectorAll('.close-modal').forEach(function(button) {
    button.addEventListener('click', function() {
        var modalId = button.closest('.modal').getAttribute('id');
        closeModal(modalId);
    });
});
