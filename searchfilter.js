
// search bar function
function searchProduct() {
    //DOM
    const input = document.getElementById('filter').value.toUpperCase();
    const cardContainer = document.getElementById('books');
    
    const cards = cardContainer.getElementsByClassName('card');

    for(let i = 0; i < card.length; i++) {
        let title = card[i].querySelector(".container h4.title");
    
    if(title.innerText.toUpperCase().indexOf(input) > -1) {
        card[i].style.display = " ";
    } else {
        card[i].style.display = "none";
    }
    }
}
    
  
    
