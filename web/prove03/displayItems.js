const products = [
    {
        name: "Peppy Puppy",
        price: 40,
        imgSrc: "https://static.scientificamerican.com/sciam/cache/file/D059BC4A-CCF3-4495-849ABBAFAED10456_source.jpg?w=590&h=800&526ED1E1-34FF-4472-B348B8B4769AB2A1",
        imgAlt: "Puppy",
        id: "puppy"
    },
    {
        name: "Krazy Kitty",
        price: 25,
        imgSrc: "https://i.imgur.com/k3i2jZ3.jpg",
        imgAlt: "Kitty playing with a toy",
        id: "kitty"
    },
    {
        name: "Goat Galore",
        price: 75,
        imgSrc: "https://timedotcom.files.wordpress.com/2018/05/american-airlines-says-no-emotional-support-goats.jpg",
        imgAlt: "Goat sticking its tongue out",
        id: "goat"
    },
    {
        name: "Crazy Cow",
        price: 80,
        imgSrc: "https://66.media.tumblr.com/709acf5805b63bf412dd5cf8d6e34803/tumblr_oplgjdcYJl1sgqqono1_500.jpg",
        imgAlt: "Cow laying down",
        id: "cow"
    },
    {
        name: "Blazing Birds",
        price: 40,
        imgSrc: "https://i.pinimg.com/originals/5f/51/0b/5f510bbc10345b91b189bf45dde83ddb.jpg",
        imgAlt: "Bird with a flower on its head",
        id: "bird"
    },
    {
        name: "Geeky Gecko",
        price: 55,
        imgSrc: "https://i.pinimg.com/originals/f8/98/0c/f8980c024247b20e4e587d5f55fc15c4.jpg",
        imgAlt: "Smiling Leopard Gecko",
        id: "gecko"
    }
];

function createProduct(product) {
    console.log("in createProduct()")
    const item = document.createElement('div');
    item.id = product.id;
    item.innerHTML = `<img src="${product.imgSrc}" alt="${product.imgAlt}"><br>
    <p class="productName">${product.name}</p>
    <input class="inputNum" type="number" value=1 id="${product.id}Quantity">
    <button onclick="addToCart(${product.id}Quantity.value)">Add to Cart</button>`;
    return item;

}

function displayItems() {
    console.log("In displayItems()");
    const container = document.getElementById("itemDisplay");
    products.forEach(product => {
        console.log("In for each loop");
        container.appendChild(createProduct(product));
    });
}

function addToCart(quantity) {
    alert("You are ordering " + quantity);
}