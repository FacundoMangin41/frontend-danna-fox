
const $content = document.querySelector('.content-body-user')
const $main = document.querySelector('.main-box-user')

$content.addEventListener('click', (event) => {
  if (event.target.matches('.user-right > .icon')) {
    
    const userId = Number(event.target.nextElementSibling.getAttribute('data-user'))
    const otherMenu = document.querySelector('.user-menu.-opened')

    
    /* Check if other menu isn't equal to current menu */
    if (otherMenu && userId != Number(otherMenu.getAttribute('data-user'))) {
      /* Remove opened class to other user menu */
      otherMenu.classList.remove('-opened')
    }

    /* Add opened class to current user menu */
    event.target.nextElementSibling.classList.toggle('-opened')
    
  }
})

$main.addEventListener('click', (event) => {
  if (!event.target.matches('.user-right > .icon') && !event.target.matches('.user-menu')) {
    
    /* Remove opened class to other user menu */
    const otherMenu = document.querySelector('.user-menu.-opened')

    if (otherMenu) {
      otherMenu.classList.remove('-opened')
    }
    
  }
})
