const subMenuLinks = document.querySelectorAll('.menu-item-has-children > a');
const mainMenu = document.querySelector('#menu-main-wrap');
const mainMenuContainer = document.querySelector('.menu-main-menu-container');

mainMenu.addEventListener('click', (evt) => {
  console.log(evt.target);
  if (evt.target.id == 'menu-main-button') {
    mainMenuContainer.classList.add('open');
  }
  
  if (evt.target.classList.contains('menu-main-menu-container')) {
    mainMenuContainer.classList.remove('open');
  }
});

function onSubMenuLinkClick(evt) {
  evt.preventDefault();
  evt.stopPropagation();
  evt.target.classList.toggle('open');
}

subMenuLinks.forEach(subMenuLink => {
  subMenuLink.addEventListener('click', onSubMenuLinkClick);
})
