// Rows
let rows = document.getElementsByClassName('page');
// Bouttons pagination
let buttons = document.getElementsByClassName('bouton-click');

// Condition : mettre les autres page en Display None si il y'a plus que 9 services
if (rows.length > 1) {
    buttons[0].classList.add('active')


    for (let i = 1; i < rows.length ; i++){
        rows[i].style.display = "none";
        buttons[i].classList.remove('active')
    };
}


// Click
for (let i = 0; i < rows.length ; i++)
    {
        buttons[i].addEventListener('click', ()=>{
            for (let i = 0; i < rows.length ; i++){
                rows[i].style.display = "none";
                buttons[i].classList.remove('active')
            }
            rows[i].style.display = "block";
            buttons[i].classList.add('active')
        });
    };