import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

// ---------------------- Dynamic Search Placeholder ----------------------

document.addEventListener("DOMContentLoaded", function () {
    const cities = ["Class 12 Ncert", "Godan", "Rich Dad Poor Dad", "DBMS", "C++"];
    let index = 0;
    const searchBox = document.getElementById("searchBox");

    function typePlaceholder(text, callback) {
        let i = 0;
        searchBox.placeholder = "";
        let interval = setInterval(() => {
            searchBox.placeholder += text[i];
            i++;
            if (i === text.length) {
                clearInterval(interval);
                setTimeout(callback, 1000);
            }
        }, 100);
    }

    function changePlaceholder() {
        typePlaceholder(`Search Ex.... '${cities[index]}'`, () => {
            setTimeout(() => {
                index = (index + 1) % cities.length;
                changePlaceholder();
            }, 1500);
        });
    }

    if (searchBox) {
        changePlaceholder();
    }
});

// ---------------------- Book Collections ----------------------

document.addEventListener("DOMContentLoaded", function () {
    const newBooks = [
        {
            title: "NCERT Class -1 Mridang (English Book)",
            imgSrc: "assets/Book4.jpg",
            price: { original: 140, discounted: 70 },
            reviews: 4.2,
        },
        {
            title: "NCERT Anand Book for Balvatika (Activity Book & Worksheets)",
            imgSrc: "assets/Book4.jpg",
            price: { original: 492, discounted: 410 },
            reviews: 4.5,
        },
        {
            title: "NCERT Class - 2 Joyful (Math Book)",
            imgSrc: "assets/Book4.jpg",
            price: { original: 140, discounted: 70 },
            reviews: 4.8,
        },
        {
            title: "NCERT Class - 2 Mridang (English Book)",
            imgSrc: "assets/Book4.jpg",
            price: { original: 140, discounted: 70 },
            reviews: 4.3,
        },
    ];

    const oldBooks = [
        {
            title: "NCERT Class - 4 Science Book",
            imgSrc: "assets/Book4.jpg",
            reviews: 4.7,
        },
        {
            title: "NCERT Class - 5 Hindi Book",
            imgSrc: "assets/Book4.jpg",
            reviews: 4.9,
        },
        {
            title: "NCERT Class - 6 Mathematics Book",
            imgSrc: "assets/Book4.jpg",
            reviews: 4.5,
        },
        {
            title: "NCERT Class - 6 Mathematics Book",
            imgSrc: "assets/Book4.jpg",
            reviews: 4.6,
        },
    ];

    function generateStars(rating) {
        let fullStars = Math.floor(rating);
        let halfStar = rating % 1 !== 0;
        let starsHTML = "";

        for (let i = 0; i < fullStars; i++) {
            starsHTML += `<i class="bi bi-star-fill text-warning"></i> `;
        }
        if (halfStar) {
            starsHTML += `<i class="bi bi-star-half text-warning"></i> `;
        }
        for (let i = fullStars + (halfStar ? 1 : 0); i < 5; i++) {
            starsHTML += `<i class="bi bi-star text-warning"></i> `;
        }
        return starsHTML;
    }

    function renderNewBooks(containerId, booksArray) {
        const container = document.getElementById(containerId);
        if (!container) return;

        container.innerHTML = booksArray
            .map(
                (book) => `
                <div class="col">
                    <div class="card book-card h-100 shadow">
                        ${book.price.discounted < book.price.original ? '<div class="sale-badge">SALE</div>' : ""}
                        <img src="${book.imgSrc}" class="card-img-top book-image" alt="Book Image">
                        <div class="card-body text-center">
                            <h5 class="book-title" style="white-space: nowrap;
                               overflow: hidden;
                               text-overflow: ellipsis;">${book.title}</h5>
                            <div class="mb-2">
                                <span class="text-danger fw-bold">₹${book.price.discounted.toFixed(2)}</span>
                                <del class="text-muted">₹${book.price.original.toFixed(2)}</del>
                            </div>
                            <div class="mb-2 star-icons">
                                ${generateStars(book.reviews)}
                                <span class="text-muted">(${book.reviews})</span>
                            </div>
                            <button class="btn btn w-100" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to add this item to cart" style="background-color:orange;">
                                ADD TO CART
                            </button>
                        </div>
                    </div>
                </div>
            `
            )
            .join("");
    }

    function renderOldBooks(containerId, booksArray) {
        const container = document.getElementById(containerId);
        if (!container) return;

        container.innerHTML = booksArray
            .map(
                (book) => `
                <div class="col">
                    <div class="card book-card h-100 shadow">
                        <img src="${book.imgSrc}" class="card-img-top book-image" alt="Book Image">
                        <div class="card-body text-center">
                            <h5 class="book-title">${book.title}</h5>
                            <div class="mb-2 star-icons">
                                ${generateStars(book.reviews)}
                                <span class="text-muted">(${book.reviews})</span>
                            </div>
                        </div>
                    </div>
                </div>
            `
            )
            .join("");
    }

    renderNewBooks("newBooksContainer", newBooks);
    renderOldBooks("oldBooksContainer", oldBooks);
});

// ---------------------- Enable Bootstrap Tooltips ----------------------

document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach((tooltipTriggerEl) => {
        new bootstrap.Tooltip(tooltipTriggerEl);
    });
});




// For faq toggle 

function toggleFAQ(id) {
    const faq = document.getElementById(`faq${id}`);
    const icon = document.getElementById(`icon${id}`);
    if (faq.style.display === "none" || faq.style.display === "") {
        faq.style.display = "block";
        icon.classList.remove("bi-plus-lg");
        icon.classList.add("bi-dash-lg");
    } else {
        faq.style.display = "none";
        icon.classList.remove("bi-dash-lg");
        icon.classList.add("bi-plus-lg");
    }
}

//   end faq toggle






