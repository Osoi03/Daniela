document.addEventListener("DOMContentLoaded", function() {
    const products = document.querySelectorAll('.product-card');
    products.forEach((product, index) => {
        setTimeout(() => {
            product.classList.add('visible');
        }, index * 200); // Agrega un pequeño retraso para cada producto
    });
});
