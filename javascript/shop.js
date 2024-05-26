//werkende winkelwagen
//werkende wishlist-button
let winkelmand = [];
let clicked = false;

function addToCart(pNaam, pPrijs) {
  let existingProduct = winkelmand.find((p) => p.name === pNaam);

  if (existingProduct) {
    existingProduct.quantity++;
  } else {
    let nieuwP = {
      name: pNaam,
      price: pPrijs,
      quantity: 1,
    };
    winkelmand.push(nieuwP);
  }
  updateCart();
}

function removeParentEl() {
  let a = event.target.parentElement;
  a.remove();
}

function updateCart() {
  let cartContainer = document.getElementById("cart_container");
  cartContainer.innerHTML = "<ul>";
  let eindprijs = 0;

  if (winkelmand != 0) {
    for (let i = 0; i < winkelmand.length; i++) {
      cartContainer.innerHTML +=
        "<p>" +
        winkelmand[i].name +
        " aantal:  " +
        winkelmand[i].quantity +
        " - " +
        winkelmand[i].price * winkelmand[i].quantity +
        "€ </li>" +
        '<button type="button" onclick="removeParentEl()" class="remove-btn">     X</button>';
      eindprijs += winkelmand[i].price * winkelmand[i].quantity;
    }
  }

  cartContainer.innerHTML += "</ul><p>TOTAAL: &#8364  " + eindprijs + "</p>";
}

function heart() {
  clicked = !clicked;
  const el = document.getElementById("btn_heart");
  if (clicked) {
    el.style.color = "red";
  } else {
    el.style.color = "black";
  }
}
