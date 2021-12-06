let form = document.getElementById("form");
 form.onsubmit = (e) => {
    e.preventDefault();
    let age = document.getElementById("age").value
    let books = document.getElementById("books").value
    console.log(age, books);
}