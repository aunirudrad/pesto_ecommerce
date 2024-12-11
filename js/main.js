// Menu

let menu = document.querySelector('.menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('move');
    navbar.classList.toggle('open-menu');
}

//close menu on scroll

window.onscroll = () => {
    menu.classList.remove("move");
    navbar.classList.remove("open-menu");
}

// scrollReveal

const animate = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: '2500',
    delay: '400',

});

animate.reveal('.home-text', { origin: 'left' });
animate.reveal('.home-img', { origin: 'bottom' });
animate.reveal('.heading, .newsletter h2', { origin: 'top' });
animate.reveal('header,.feature-box, .feature-menu-box, .item-box, .m-item-box,.t-box, .newsletter', { interval: 100 });


// Modal Elements for item-1
const modal = document.getElementById("product-modal");
const closeBtn = document.querySelector(".close-btn");
const viewProductBtn = document.querySelector(".view-product-btn");
const quantityInput = document.getElementById("quantity");
const increaseBtn = document.getElementById("increase-btn");
const decreaseBtn = document.getElementById("decrease-btn");
const cartTotal = document.getElementById("cart-total");
const addToCartBtn = document.getElementById("add-to-cart-btn");


let cartCount = 0;
// Open Modal
viewProductBtn.addEventListener("click", (e) => {
    e.preventDefault(); // Prevent default link behavior
    modal.style.display = "flex"; // Show the modal
});

// Close Modal
closeBtn.addEventListener("click", () => {
    modal.style.display = "none"; // Hide the modal
});

// Increase Quantity
increaseBtn.addEventListener("click", () => {
    quantityInput.value = parseInt(quantityInput.value) + 1;
});

// Decrease Quantity
decreaseBtn.addEventListener("click", () => {
    if (quantityInput.value > 1) {
        quantityInput.value = parseInt(quantityInput.value) - 1;
    }
});



// Modal Elements for item-2
const modal2 = document.getElementById("product-modal2");
const closeBtn2 = document.querySelector(".close-btn2");
const viewProductBtn2 = document.querySelector(".view-product-btn2");
const quantityInput2 = document.getElementById("quantity2");
const increaseBtn2 = document.getElementById("increase-btn2");
const decreaseBtn2 = document.getElementById("decrease-btn2");

const addToCartBtn2 = document.getElementById("add-to-cart-btn2");



// Open Modal
viewProductBtn2.addEventListener("click", (e) => {
    e.preventDefault(); // Prevent default link behavior
    modal2.style.display = "flex"; // Show the modal
});

// Close Modal
closeBtn2.addEventListener("click", () => {
    modal2.style.display = "none"; // Hide the modal
});

// Increase Quantity
increaseBtn2.addEventListener("click", () => {
    quantityInput2.value = parseInt(quantityInput2.value) + 1;
});

// Decrease Quantity
decreaseBtn2.addEventListener("click", () => {
    if (quantityInput2.value > 1) {
        quantityInput2.value = parseInt(quantityInput2.value) - 1;
    }
});



// Modal Elements for item-3
const modal3 = document.getElementById("product-modal3");
const closeBtn3 = document.querySelector(".close-btn3");
const viewProductBtn3 = document.querySelector(".view-product-btn3");
const quantityInput3 = document.getElementById("quantity3");
const increaseBtn3 = document.getElementById("increase-btn3");
const decreaseBtn3 = document.getElementById("decrease-btn3");
const cartTotal3 = document.getElementById("cart-total3");
const addToCartBtn3 = document.getElementById("add-to-cart-btn3");


// Open Modal
viewProductBtn3.addEventListener("click", (e) => {
    e.preventDefault(); // Prevent default link behavior
    modal3.style.display = "flex"; // Show the modal
});

// Close Modal
closeBtn3.addEventListener("click", () => {
    modal3.style.display = "none"; // Hide the modal
});

// Increase Quantity
increaseBtn3.addEventListener("click", () => {
    quantityInput3.value = parseInt(quantityInput3.value) + 1;
});

// Decrease Quantity
decreaseBtn3.addEventListener("click", () => {
    if (quantityInput3.value > 1) {
        quantityInput3.value = parseInt(quantityInput3.value) - 1;
    }
});

