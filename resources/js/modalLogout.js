const buttonShowTrigger = document.getElementById('logoutButtonOpen')
const overlay = document.getElementById('overlayHitam')
const cancelButton = document.getElementById('cancelButton')
const modalLogout = document.getElementById('modalLogout')
const menu = document.getElementById('logoutTampil')

if(buttonShowTrigger && overlay && cancelButton){
    function openModal(){
        overlay.classList.remove('hidden')
        requestAnimationFrame(() => {
            overlay.classList.remove('opacity-0')
            overlay.classList.add('opacity-100')
        })
    }

    function closeModal(){
        overlay.classList.remove('opacity-100')
        overlay.classList.add('opacity-0')
        setTimeout(() => {
            overlay.classList.add('hidden')
        }, 300)
    }

    overlay.addEventListener('click', closeModal)
    buttonShowTrigger.addEventListener('click', openModal)
    cancelButton.addEventListener('click', closeModal)
}
