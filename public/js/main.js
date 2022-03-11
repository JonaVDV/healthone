"use strict";
const addProduct = document.querySelector(".add");
const editProduct = document.querySelectorAll(".edit");
const AddModal = document.querySelector("[data-add]");
const EditModal = document.querySelector("[data-edit]");
const hiddenInput = EditModal.querySelector('.hidden-input');
const closeButton = document.querySelector('.close');
// console.log(hiddenInput)
addProduct.addEventListener('click', () => {
    AddModal.classList.toggle('showModal');
});
editProduct.forEach(btn => {
    btn.addEventListener('click', () => {
        EditModal.classList.toggle('showModal');
        EditModal.setAttribute('data-id', btn.getAttribute('data-id'));
        hiddenInput.value = btn.getAttribute('data-id');
    });
});
closeButton.addEventListener('click', () => {
    EditModal.classList.toggle('showModal');
});
