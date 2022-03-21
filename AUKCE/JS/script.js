const gallery = document.getElementById("gallery");
for(let index in data){
    let item = data[index];
    let ele =document.createElement("div");
    ele.innerHTML = `
    <figure><img src = "./data/${item.image}
    <h2>${item.name}</h2>
    <p>${item.desc}</p>
    <p>${item.author}</p>`;
    gallery.appendChild(ele);
}