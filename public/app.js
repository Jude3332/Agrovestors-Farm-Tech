const mediaPixel = document.querySelector(".media-pixel")
const activeclass = document.querySelector(".activeclass")
const register = document.querySelector(".register")


function Menu(e){
    e.name==="menu"? (e.name="close", activeclass.classList.remove("md:hidden"), activeclass.classList.add('md:flex')) : 
    (e.name="menu", activeclass.classList.remove("md:flex"), activeclass.classList.add("md:hidden"))
}



