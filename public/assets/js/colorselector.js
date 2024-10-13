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
        });
    });

    // Load saved color from localStorage when the page loads
    loadColorFromStorage();
});
