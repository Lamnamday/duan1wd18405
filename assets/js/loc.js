const filterOptions = document.querySelector('.filter-options')
const formFilter = document.querySelector('.form-filter')

filterOptions.onchange = function() {
    formFilter.submit()
}