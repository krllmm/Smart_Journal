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
