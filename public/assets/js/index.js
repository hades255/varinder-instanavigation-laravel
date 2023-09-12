const lang = document.querySelectorAll('.lang'),
      langItem = document.querySelectorAll('.lang-item'),
      menuBurger = document.querySelector('.menu-burger'),
      mobileMenu = document.querySelector('.mobile-menu'),
      mobileMenuLists = document.querySelectorAll('.mobile-menu ul li'),
      header = document.querySelector('.header'),
      body = document.querySelector('body'),
      faqList = document.querySelectorAll('.faq-list');

menuBurger.addEventListener('click', () => {
    menuBurger.classList.toggle('change');
    mobileMenu.classList.toggle('showMobileMenu');
    body.classList.toggle('showScroll')
});

mobileMenuLists.forEach(btn => {
    btn.addEventListener('click', () => {
        menuBurger.classList.toggle('change');
        mobileMenu.classList.toggle('showMobileMenu');
        body.classList.toggle('showScroll')
    })
});
lang.forEach(item => {
    item.addEventListener('click', () => {
        item.classList.toggle('borderBottom');
        item.children[1].classList.toggle('showLangMenu');
    });
})


langItem.forEach(item => {
    item.addEventListener('click', () => {
        item.parentElement.parentElement.parentElement.children[0].innerText = item.innerText
    });
});


