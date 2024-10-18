document.addEventListener("DOMContentLoaded", function() {
    const buttons = document.querySelectorAll(".color-button");
    const colorDiv = document.querySelector(".selector-selected-color");
    const colorNameDiv = document.querySelector(".selector-selected-color-name");
    const ProductColor = document.querySelector('#dynamic-color-rect');

    const defaultColor = "#FFFF00"; // Yellow
    const defaultColorName = "Yellow"; // Name of the default color

    // Function to set the background color and update color name
    function setColor(color, name) {
        colorDiv.style.backgroundColor = color;
        colorNameDiv.textContent = name;
    }

    // Load color from localStorage when the page loads
    function loadColorFromStorage() {
        const savedColor = localStorage.getItem("selectedColor") || defaultColor; // Default to yellow if none saved
        const savedColorName = localStorage.getItem("selectedColorName") || defaultColorName; // Default to yellow name

        setColor(savedColor, savedColorName);

        buttons.forEach(button => {
            if (button.getAttribute('data-color') === savedColor) {
                addIconToButton(button);
                ProductColor.setAttribute('fill', savedColor);
            }
        });
    }

    // Function to add <i> tag to the clicked button
    function addIconToButton(button) {
        buttons.forEach(btn => {
            const icon = btn.querySelector("i");
            if (icon) {
                btn.removeChild(icon);
            }
        });

        if (!button.querySelector("i")) {
            const icon = document.createElement("i");
            icon.className = "bi bi-check";
            button.appendChild(icon);
        }
    }

    // Set up button click event listeners
    buttons.forEach(button => {
        button.addEventListener("mouseover", function() {
            const color = button.getAttribute('data-color');
            const colorName = button.getAttribute('data-color-name');
            setColor(color, colorName);
            ProductColor.setAttribute('fill', color);
        });

        button.addEventListener('mouseleave', () => {
            loadColorFromStorage();
        });

        button.addEventListener('click', function() {
            const color = button.getAttribute('data-color');
            const colorName = button.getAttribute('data-color-name');
            setColor(color, colorName);
            localStorage.setItem("selectedColor", color);
            localStorage.setItem("selectedColorName", colorName);
            addIconToButton(button);
            ProductColor.setAttribute('fill', color);
        });
    });

    // Load saved color from localStorage when the page loads, or default to yellow
    loadColorFromStorage();
});






// color popup show

//  JavaScript to handle the popup visibility
    document.getElementById('add-colorBtn').addEventListener('click', function() {
        document.getElementById('colors-popupModel').style.display = 'block'; // Show the popup
    });

    document.getElementById('color-close-popup').addEventListener('click', function() {
        document.getElementById('colors-popupModel').style.display = 'none'; // Hide the popup
    });

    // Close the popup when clicking outside of it
    window.addEventListener('click', function(event) {
        const popup = document.getElementById('colors-popupModel');
        if (event.target === popup) {
            popup.style.display = 'none';
        }
    });


    // JavaScript to handle the close button functionality
    document.querySelectorAll('.thump-img-close').forEach(button => {
        button.addEventListener('click', function() {
            // Remove the respective img-cont parent
            this.closest('.img-cont').remove();
        });
    });


    // menu access

    document.getElementById('addTextLink').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default anchor behavior
        // Hide the main menu panel
        document.querySelector('.main-menu-panel').style.display = 'none';
        // Show the text add panel
        document.querySelector('.text-add-panel').style.display = 'block';
         // Hide the workspace-edit-buttons container
      document.querySelector('.workspace-edit-buttons').style.display = 'none';
      document.querySelector('.print-area').style.display = 'block';
    });

    document.getElementById('textpanel-closeBtn').addEventListener('click', function() {
        // Hide the text add panel
        document.querySelector('.text-add-panel').style.display = 'none';
        // Optionally, show the main menu panel again
        document.querySelector('.main-menu-panel').style.display = 'block';
    });


    // clipart menu

    document.getElementById('add-clipart-menu').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default anchor behavior
        // Hide the main menu panel
        document.querySelector('.main-menu-panel').style.display = 'none';
        // Show the text add panel
        document.querySelector('.text-add-panel').style.display = 'none';
         // Hide the workspace-edit-buttons container
      document.querySelector('.workspace-edit-buttons').style.display = 'none';
      document.querySelector('.print-area').style.display = 'block';
      document.querySelector('.add-clipart-panel').style.display = 'block';

    });

    document.getElementById('clipartpanel-closeBtn').addEventListener('click', function() {
        // Hide the text add panel
        document.querySelector('.add-clipart-panel').style.display = 'none';
        // Optionally, show the main menu panel again
        document.querySelector('.main-menu-panel').style.display = 'block';
    });

// product color change when i click the button color change

// Function to add <i> tag to the clicked button
function addIconColorButton(button) {
    // Select all buttons with the class 'color-switch'
    const colorbuttons = document.querySelectorAll('#color-switch');

    colorbuttons.forEach(btn => {
        // Remove <i> from all buttons
        const icon = btn.querySelector("i");
        if (icon) {
            btn.removeChild(icon);
        }
    });

    // Add the <i> tag to the clicked button
    if (!button.querySelector("i")) {
        const icon = document.createElement("i");
        icon.className = "bi bi-check"; // Bootstrap icon classes
        button.appendChild(icon);
    }
}

// Get the dynamic color rectangle and all color switch buttons
const dynamicProductColor = document.querySelector('#dynamic-color-rect');
const colorSwitchButtons = document.querySelectorAll('#color-switch');

// Loop through buttons and set event listeners
colorSwitchButtons.forEach(button => {
    button.addEventListener('click', function () {
        const selectedColor = this.getAttribute('data-color');
        dynamicProductColor.setAttribute('fill', selectedColor);

        // Add <i> tag to the clicked button
        addIconColorButton(button); // Corrected: Pass the clicked button
    });
});


function resizeSVG() {
    // Select the container where the SVG is placed
    var canvas = document.querySelector('.product-canvas');
    var svgMask = document.querySelector('.product-canvas-mask');
    var svgTexture = document.querySelector('.product-canvas-texture');

    // Get the dimensions of the parent container (or window size)
    var containerWidth = canvas.offsetWidth;

    // Define your base dimensions (based on the original viewBox of the SVG)
    var baseWidth = 1200;  // Width from viewBox attribute
    var baseHeight = 1130; // Height from viewBox attribute

    // Calculate the scale factor
    var scaleFactor = containerWidth / baseWidth;

    // Adjust the SVG's height according to the scale factor
    var newHeight = baseHeight * scaleFactor;

    // Define your top offset (for example, -480px)
    var topOffset = -300 * scaleFactor;  // Adjust top offset according to the scale factor

    // Apply the new width, height, and top offset to the SVG elements
    svgMask.style.width = containerWidth + 'px';
    svgMask.style.height = newHeight + 'px';
    svgMask.style.top = topOffset + 'px';  // Apply the top offset

    svgTexture.style.width = containerWidth + 'px';
    svgTexture.style.height = newHeight + 'px';
    svgTexture.style.top = topOffset + 'px';  // Apply the top offset
}

// Run the resize function on window resize
window.addEventListener('resize', function () {
    resizeSVG();
});

// Run the function initially when the page loads
window.addEventListener('load', function () {
    resizeSVG();
});
