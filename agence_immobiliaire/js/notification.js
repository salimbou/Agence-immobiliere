

const notifi_btn = document.getElementById("notification-btn");
const notif_list = document.getElementById("not-list");

notifi_btn.addEventListener("click" , ()=>{
    notif_list.classList.toggle("show");
})