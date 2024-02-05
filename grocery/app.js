const form = document.querySelector(".form-grocery");
const list_clear = document.querySelector(".btn-clear");
const list = document.getElementById("list");

let values = [];

form.addEventListener("submit", function (e) {
    e.preventDefault();
    let input_list = document.querySelector(".input-list").value;
    if (input_list) {
        values.push(input_list);
        list.innerHTML = values.map(value => `<li>${value}</li>`).join('');
        document.querySelector(".input-list").value = "";
        console.log(values);
    }
});

list_clear.addEventListener("click", function (e) {
    e.preventDefault();
    values = [];
    list.innerHTML = "";
});
