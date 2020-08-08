// Admin - Service - Icone - Selected

let icones = document.getElementsByClassName('icones')
let inputicone = document.getElementById('inputicone')
let bigicone = document.getElementById('bigicone')

// Parcourir toutes les icones 
for (let i = 0; i < icones.length; i++) {

    // icone actuelle
    const icone = icones[i];

    // Quand on click sur l'icone actuelle
    icone.addEventListener('click', ()=>{
        let classeSmallIcone = icone.childNodes[1].classList

        // Si l'icone se limite à une classe
        if (classeSmallIcone.length == 2) {
            (classeSmallIcone[0] != 'fa-4x') ? classeSmallIcone = classeSmallIcone[0] : classeSmallIcone = classeSmallIcone[1]
        } 

        // Si l'icone à plus qu'une classe (ĉ les fontawesome icones ex. fas fa-...)
            // À ajouter la condition


        // On affiche la classe de l'icone
        inputicone.textContent = classeSmallIcone

        // Si l'emplacement de la garnde icone / L'affichage de l'icone actuelle est remplie 
        //je supprime les classes existantes en les remplaçant par la classe fa-10x
        if (bigicone.classList.length > 1) {
            bigicone.className = "fa-10x"
        }
        // on rajoute la classe de l'icone actuelle pour l'afficher
        bigicone.classList.add(classeSmallIcone)

        // icone_id
        let icone_id = document.getElementById('icone_id')
        // icone_id.textContent = i+1
        icone_id.value = i+1
    })
}
