document.addEventListener("DOMContentLoaded", function() {
    const buttons = document.querySelectorAll(".color-button");
    const colorDiv = document.querySelector(".selector-selected-color");

    // Function to set the background color
    function setColor(color) {
        colorDiv.style.backgroundColor = color;
    }

    // Load color from localStorage when the page loads
    function loadColorFromStorage() {


        const savedColor = localStorage.getItem("selectedColor");
        if (savedColor) {
            setColor(savedColor);
            // Add the <i> tag to the corresponding button
            buttons.forEach(button => {
                if (button.getAttribute('data-color') === savedColor) {
                    addIconToButton(button);
                    rect.setAttribute('fill', savedColor);
                }
            });
        }else{
            setColor('transparent');
        }
    }

    // Function to add <i> tag to the clicked button
    function addIconToButton(button) {
        buttons.forEach(btn => {
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

    // Set up button click event listeners
    buttons.forEach(button => {
        // Hover functionality to change color
        button.addEventListener("mouseover", function() {
            const color = button.getAttribute('data-color');
            setColor(color);
            rect.setAttribute('fill', color);
        });

        button.addEventListener('mouseleave', () => {
            loadColorFromStorage();

        });

        // Click event to set color and save it in localStorage
        button.addEventListener('click', function() {

            const color = button.getAttribute('data-color');
            console.log(color,'color');
            setColor(color);
            localStorage.setItem("selectedColor", color); // Store the color in localStorage
            addIconToButton(button); // Add <i> tag to clicked button
            rect.setAttribute('fill', color);
        });
    });

    // Load saved color from localStorage when the page loads
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
    });

    document.getElementById('textpanel-closeBtn').addEventListener('click', function() {
        // Hide the text add panel
        document.querySelector('.text-add-panel').style.display = 'none';
        // Optionally, show the main menu panel again
        document.querySelector('.main-menu-panel').style.display = 'block';
    });



