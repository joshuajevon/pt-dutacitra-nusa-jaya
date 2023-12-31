var swiper = new Swiper(".mySwiper", {
    effect: "cards",
    grabCursor: true,

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    cardsEffect: {
        perSlideOffset: 6, // Space between cards in px
        perSlideRotate: 2, // Rotation of cards in degrees
    },

    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
});

// const productTypeSelectors = $(".product-type-selector");
// let currentProductType = 1;

// $(".product-type").each(function () {
//     if (this.getAttribute("data-product-type") != currentProductType) {
//         $(this).addClass("hidden");
//         $(this).removeClass("invisible absolute");
//     }
// });

// function changeProductType(element) {
//     let changeToProductType = element.getAttribute("data-product-type");

//     $(
//         `.product-type-selector[data-product-type="${currentProductType}"]`
//     ).removeClass(
//         "bg-custom-light-blue text-custom-dark-blue pointer-events-none"
//     );

//     $(
//         `.product-type-selector[data-product-type="${changeToProductType}"]`
//     ).addClass(
//         "bg-custom-light-blue text-custom-dark-blue pointer-events-none"
//     );

//     $(`.product-type[data-product-type="${currentProductType}"]`).fadeOut(
//         function () {
//             $(
//                 `.product-type[data-product-type="${changeToProductType}"]`
//             ).fadeIn();
//         }
//     );

//     currentProductType = changeToProductType;
// }
