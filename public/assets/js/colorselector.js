document.addEventListener("DOMContentLoaded",function(){

    const buttons = document.querySelectorAll(".color-button");
    const colorDiv = document.querySelector(".selector-selected-color");

        function setColor(color){
            colorDiv.style.backgroundColor = color;


        }

        buttons.forEach(button => {
            button.addEventListener("mouseover",function(){
                const color = button.getAttribute('data-color');
                setColor(color);
            });

            button.addEventListener('mouseleave',() => {
                setColor('transparent');
            });
        });



});
