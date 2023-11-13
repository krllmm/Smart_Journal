const menu = document.getElementById('dropdown');
menu.classList.add('hidden_dropdown');

function show_dropdown(){
    menu.classList.toggle('hidden_dropdown');
}

const openButton = document.querySelector("[open-message-box");
const closeButton = document.querySelector("[close-message-box");
const dialog = document.querySelector("dialog");

openButton.addEventListener("click", ()=>{
    dialog.showModal();
});

closeButton.addEventListener("click", ()=>{
   dialog.close();
});


const openButtontrash = document.querySelector("[open-trash-box");
const closeButtontrash = document.querySelector("[close-trash-box");
const dialogtrash = document.querySelector(".trashcan");

openButtontrash.addEventListener("click", ()=>{
    dialogtrash.showModal();
});

closeButtontrash.addEventListener("click", ()=>{
   dialogtrash.close();
});
