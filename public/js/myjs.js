
const categorysidebar=document.querySelector(".category-items")

function sidebarclick(){
    categorysidebar.classList.toggle('category-items-opend')
}


// searchbardiv
const search=document.querySelector(".searchbardiv")
const closeformbtn=document.querySelector(".closeform-div")

function opensearchform(){
    search.classList.toggle("searchitem")
    closeformbtn.classList.toggle("searchitem")
}


function closeform(){
    search.classList.remove("searchitem")
    closeformbtn.classList.remove("searchitem")
}

// nav

const openavmobile=document.querySelector(".topul")

function opennavemobilebtn(){
    openavmobile.classList.toggle("topulmobileopen")
}

// login
function login(){
    const registerform=document.querySelector(".register")
    const loginform=document.querySelector(".loginform")
   registerform.classList.toggle("jsopenrgister")
   loginform.classList.toggle("jsloginopen")

}
const addcat=document.querySelector(".addcat")
const addpro=document.querySelector(".addpro")

function additem(){
    addcat.classList.toggle("opencatform")
    addpro.classList.toggle("openproform")

}


