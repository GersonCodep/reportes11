const showNavbar = (toggleId, navId, bodyId, headerId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    bodypd = document.getElementById(bodyId),
    headerpd = document.getElementById(headerId)
    if(toggle && nav && bodypd && headerpd){
        toggle.addEventListener('click', ()=>{
            // mostrar navbar
            nav.classList.toggle('show')
            // cambio de icon
            toggle.classList.toggle('bx-x')
            // agregar padding al body
            bodypd.classList.toggle('body-pd')
            // agregar padding al header
            headerpd.classList.toggle('body-pd')
        })
    }
}

showNavbar('header-toggle','nav-bar','body-pd','header')
const linkColor = document.querySelectorAll('.nav__link')

function colorLink(){
    if(linkColor){
        linkColor.forEach(l=> l.classList.remove('active'))
        this.classList.add('active')
    }
}
linkColor.forEach(l=> l.addEventListener('click', colorLink))