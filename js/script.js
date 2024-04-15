const toastMessage = document.querySelector(".message-toast");
const messageCloseButton = document.querySelector(".message-close");

messageCloseButton.addEventListener("click", () => {
    toastMessage.remove()
})
