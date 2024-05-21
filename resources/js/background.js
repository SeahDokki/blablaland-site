const colorPicker = document.getElementById('background-color')
const savedColor = localStorage.getItem('backgroundColor')

if (savedColor) {
    document.body.style.setProperty('background-color', savedColor, 'important')
}

colorPicker.addEventListener('input', function() {
    const color = colorPicker.value
    document.body.style.setProperty('background-color', color, 'important')
    localStorage.setItem('backgroundColor', color)
})

document.getElementById('color-picker-btn').addEventListener('click', function() {
    colorPicker.click()
})
