document.querySelector('.sp-menu__btn').addEventListener('click', function(){
    document.querySelector('.sp-menu__list').classList.toggle('is-active');
 });

 $('#sp-menu__list a[href]').on('click', function(event) {
    $('.sp-menu__btn').trigger('click');
});