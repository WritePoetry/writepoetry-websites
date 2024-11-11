( () => {
    'use strict';
    document.addEventListener("DOMContentLoaded", () => {
        const targetElements = document.querySelectorAll('.logo-wrapper');

        if (targetElements.length) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        console.log("A .logo-wrapper element is in the viewport!");
                        // Stop observing if you only want this to happen once for each element
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                root: null,           // Observe in the context of the viewport
                rootMargin: '0px',    // No margin offset
                threshold: 0.1        // Trigger when 10% of the element is visible
            });

            targetElements.forEach(element => observer.observe(element));
        } else {
            console.warn("No elements with the class .logo-wrapper were found");
        }
    } );
} )();