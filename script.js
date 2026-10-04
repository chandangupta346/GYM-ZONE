// Search Gym
const searchInput = document.getElementById("search");

searchInput.addEventListener("keyup", function () {
    let filter = searchInput.value.toLowerCase();
    let cards = document.querySelectorAll(".card");

    cards.forEach(function(card) {
        let gymName = card.querySelector("h2").innerText.toLowerCase();

        if (gymName.includes(filter)) {
            card.style.display = "block";
        } else {
            card.style.display = "none";
        }
    });
});