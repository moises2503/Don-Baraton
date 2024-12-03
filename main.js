const main_img= document.querySelector('.main_img')
const thubanails = document.querySelectorAll('.thubanail')


thubanails.forEach(thunb => {

    thunb.addEventListener('click', function(){
        const active = document.querySelector('.active')
        active.classList.remove('active')
        this.classList.add('active')
        main_img.src= this.src /*hace que al clickear por una imagen se muestre dicha imagen en la principal*/
    })
})
