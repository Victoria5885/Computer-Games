 // Отримання елементів з DOM
 const gamesLink = document.getElementById('games-link');
 const gamesDropdown = document.getElementById('games-dropdown');
 const arrowIcon = gamesLink.querySelector('#arrow');

 function toggleDropdown() {
     console.log('toggleDropdown() викликано');
     gamesLink.classList.toggle('active');
     // Додамо логіку для відображення або приховування випадаючого списку
     if (gamesLink.classList.contains('active')) {
         gamesDropdown.style.display = 'block';
     } else {
         gamesDropdown.style.display = 'none';
     }
 }

 // Додавання обробника подій для кліку на стрілочку
 arrowIcon.addEventListener('click', function (e) {
     e.stopPropagation(); // Зупиняємо подію батьківського елемента (посилання)
     toggleDropdown();
 });

 // Додавання обробника подій для кліку в будь-якій області сторінки для закриття вікна
 document.addEventListener('click', function (e) {
     if (e.target !== gamesLink && !gamesLink.contains(e.target) && gamesLink.classList.contains('active')) {
         gamesLink.classList.remove('active'); // Закриваємо вікно
         gamesDropdown.style.display = 'none';
     }
 });

 // Закриття вікна при натисканні на клавішу "Escape"
 document.addEventListener('keydown', function (e) {
     if (e.key === 'Escape' && gamesLink.classList.contains('active')) {
         toggleDropdown();
     }
 });
