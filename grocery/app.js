const form = document.querySelector(".form-grocery");
const list_clear = document.querySelector(".btn-clear");
const list = document.getElementById("list");
const container = document.querySelector(".container");

let values = [];

let btndel = `<div class='btn-container'>
                <button type='button' class='btn-edit'>edit</button> 
                <button type='button' class='btn-delete'>delete</button>
            </div>`;

form.addEventListener("submit", function (e) {
    e.preventDefault();
    let input_list = document.querySelector(".input-list").value;
    if (input_list) {
        values.push(input_list);
        // renderList();
        list.innerHTML = values.map(value => `<p>${value}</p>${btndel}`).join('');
        document.querySelector(".input-list").value = "";
        // container.style.display = "flex"; // Flex the container
    }
});

list_clear.addEventListener("click", function (e) {
    e.preventDefault();
    values = [];
    list.innerHTML = "";
});

// function renderList() {
//     list.innerHTML = values.map(value => `<div><p>${value}</p>${btndel}</div>`).join('');
// }
