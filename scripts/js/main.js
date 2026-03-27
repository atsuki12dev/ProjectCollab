document.querySelectorAll('.filters_status button').forEach(filter => {
    filter.addEventListener('click', () => {
        const selectedCategory = filter.getAttribute('data-status');
        document.querySelectorAll('.card').forEach(card => {
            if (selectedCategory === 'all' || card.getAttribute('data-status') === selectedCategory) {
                card.style.display = '';
            } else {
                card.style.display = 'none';
            }
        });
    });
});
document.querySelectorAll('.filters_type button').forEach(filter1 => {
    filter1.addEventListener('click', () => {
        const selectedCategory1 = filter1.getAttribute('data-type');
        document.querySelectorAll('.card').forEach(card1 => {
            if (selectedCategory1 === 'all' || card1.getAttribute('data-type') === selectedCategory1) {
                card1.style.display = '';
            } else {
                card1.style.display = 'none';
            }
        });
    });
});
document.getElementById('searchInput').addEventListener('input', () => {
    const query = document.getElementById('searchInput').value.toLowerCase();
    document.querySelectorAll('.card').forEach(card => {
        const title = card.querySelector('h1').textContent.toLowerCase();
        if (title.includes(query)) {
            card.style.display = '';
        } else {
            card.style.display = 'none';
        }
    });
});



document.addEventListener('DOMContentLoaded', () => {
    const cardsContainer = document.getElementById('cards');
    const paginationContainer = document.getElementById('pagination');
    
    // Получаем все карточки
    const allCards = cardsContainer.querySelectorAll('.card');
    
    // НАСТРОЙКИ
    const itemsPerPage = 2; // Сколько карточек показывать на странице
    let currentPage = 1;
    const totalPages = Math.ceil(allCards.length / itemsPerPage);

    // Функция отображения карточек для конкретной страницы
    function showPage(page) {
        // Скрываем все карточки
        allCards.forEach(card => card.classList.remove('show'));

        // Вычисляем диапазон
        const start = (page - 1) * itemsPerPage;
        const end = start + itemsPerPage;

        // Показываем нужные карточки
        for (let i = start; i < end; i++) {
            if (allCards[i]) {
                allCards[i].classList.add('show');
            }
        }
    }

    // Функция создания кнопок пагинации
    function createPagination() {
        paginationContainer.innerHTML = ''; // Очистка

        // Кнопка "Назад"
        const prevBtn = document.createElement('button');
        prevBtn.innerText = '←';
        prevBtn.disabled = currentPage === 1;
        prevBtn.onclick = () => {
            if (currentPage > 1) {
                currentPage--;
                updatePagination();
            }
        };
        paginationContainer.appendChild(prevBtn);

        // Кнопки с номерами страниц
        for (let i = 1; i <= totalPages; i++) {
            const btn = document.createElement('button');
            btn.innerText = i;
            if (i === currentPage) btn.classList.add('active');
            
            btn.onclick = () => {
                currentPage = i;
                updatePagination();
            };
            paginationContainer.appendChild(btn);
        }

        // Кнопка "Вперед"
        const nextBtn = document.createElement('button');
        nextBtn.innerText = '→';
        nextBtn.disabled = currentPage === totalPages;
        nextBtn.onclick = () => {
            if (currentPage < totalPages) {
                currentPage++;
                updatePagination();
            }
        };
        paginationContainer.appendChild(nextBtn);
    }

    // Обновление состояния (карточки + кнопки)
    function updatePagination() {
        showPage(currentPage);
        createPagination();
    }

    // Запуск при загрузке
    if (allCards.length > 0) {
        updatePagination();
    }
});

const modal = document.getElementById('modal');

function hide(){
    modal.style.display = 'none';
}
function show(){
    modal.style.display = 'flex';
}