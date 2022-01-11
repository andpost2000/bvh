const subMenuLinks = document.querySelectorAll('.menu-item-has-children > a');
const mainMenu = document.querySelector('#menu-main-wrap');
const mainMenuContainer = document.querySelector('#menu-main-button + div');
const checkInContainer = document.querySelector('.check-in-form-container');
const langSelect = document.querySelector('.lang-select');
const menuMainButton = document.querySelectorAll('.menu-main-button');
const menuOpened = false;

mainMenuContainer.addEventListener('click', () => {
  mainMenuContainer.classList.remove('open');
});

mainMenu.addEventListener('click', (evt) => {
  console.log(evt.target);

  if (evt.target.classList.contains('menu-main-button')) {
    menuMainButton.forEach((btn) => {
      if (btn.classList.contains('open') && btn !== evt.target) {
        btn.classList.remove('open');
      }
    });
  }

  if (evt.target.id == 'menu-main-button') {
    mainMenuContainer.classList.add('open');
  }

  if (evt.target.id === 'check-in-button') {
    evt.target.classList.toggle('open');
  }

  if (evt.target.id === 'lang-button') {
    evt.target.classList.toggle('open');
  }
});

function onSubMenuLinkClick(evt) {
  evt.preventDefault();
  evt.stopPropagation();
  evt.target.classList.toggle('open');
}

subMenuLinks.forEach((subMenuLink) => {
  subMenuLink.addEventListener('click', onSubMenuLinkClick);
});


const startQuizBtn = document.querySelector('#start-quiz-btn');
const closeQuizBtn = document.querySelector('#close-quiz-btn');
const popupQuiz = document.querySelector('.quiz-row__popup');

startQuizBtn.addEventListener('click', () => {
  popupQuiz.classList.add('open');
});

closeQuizBtn.addEventListener('click', () => {
  popupQuiz.classList.remove('open');
});
