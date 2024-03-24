const financeButton = document.querySelector('#finance-b');
const inventoryButton = document.querySelector('#inventory-b');
const salesButton = document.querySelector('#sales-b');

const finance = document.querySelector('#finance');
const inventory = document.querySelector('#inventory');
const sales = document.querySelector('#sales');

financeButton.addEventListener('click', () => {
    finance.classList.remove('hidden')
    finance.classList.add('flex')
    sales.classList.remove('flex')
    sales.classList.add('hidden')
    inventory.classList.remove('flex')
    inventory.classList.add('hidden')
})

inventoryButton.addEventListener('click', () => {
    finance.classList.remove('flex')
    finance.classList.add('hidden')
    sales.classList.remove('flex')
    sales.classList.add('hidden')
    inventory.classList.remove('hidden')
    inventory.classList.add('flex')
})
salesButton.addEventListener('click', () => {
    finance.classList.remove('flex')
    finance.classList.add('hidden')
    inventory.classList.remove('flex')
    inventory.classList.add('hidden')
    sales.classList.remove('hidden')
    sales.classList.add('flex')
})