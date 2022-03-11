const addProduct = <HTMLButtonElement>document.querySelector(".add")
const editProduct = document.querySelectorAll(".edit")
const AddModal = <HTMLElement>document.querySelector("[data-add]")
const EditModal = <HTMLElement>document.querySelector("[data-edit]")
const hiddenInput = <HTMLInputElement>EditModal.querySelector('.hidden-input')
const closeButton = <HTMLButtonElement>document.querySelector('.close')

// console.log(hiddenInput)

addProduct.addEventListener('click', () => {
  AddModal.classList.toggle('showModal')
})

editProduct.forEach(btn => {
  btn.addEventListener('click', () => {
    EditModal.classList.toggle('showModal')
    EditModal.setAttribute('data-id', <string>btn.getAttribute('data-id'))
    hiddenInput.value = <string>btn.getAttribute('data-id')
  })
})

closeButton.addEventListener('click', () => {
  EditModal.classList.toggle('showModal')
})

