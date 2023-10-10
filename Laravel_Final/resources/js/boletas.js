const showPopup = (imageSrc, title, description, price) => {
    const popup = document.getElementById("popup");
    const popupImage = document.getElementById("popup-image");
    const popupTitle = document.getElementById("popup-title");
    const popupDescription = document.getElementById("popup-description");
    const popupPrice = document.getElementById("popup-price");

    setTimeout(() => {
        popupImage.src = imageSrc;
        popupTitle.textContent = title;
        popupDescription.textContent = description;
        popupPrice.textContent = price;
        popup.style.display = "block";
    }, 1000);
};

const closePopup = () => {
    const popup = document.getElementById("popup");
    popup.style.display = "none";
};

const buttons = document.querySelectorAll(".show-popup");

buttons.forEach((button) => {
    button.addEventListener("click", () => {
        const card = button.closest(".card");
        const imageSrc = card.querySelector("img.img-card").src;
        const title = card.querySelector(".card-title").textContent;
        const description = card.querySelector(".font-extralight.text-sm").textContent;
        const price = card.querySelector(".card-precio .text-red-600").textContent;

        showPopup(imageSrc, title, description, price);
    });
});
document.getElementById("close-popup").addEventListener("click", closePopup);