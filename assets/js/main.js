let disableHandler = document.querySelectorAll('.disabled') 

Array.from(disableHandler).map((element) => {
    element.addEventListener('click', (event) => {
        event.preventDefault()
    })
})
