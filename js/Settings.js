const colorPicker = document.querySelector('.color_choice')
const colorLabel = document.querySelector('.label_color')
newColor = colorPicker.value

colorPicker.addEventListener('change', () => {
    newValue = colorPicker.value
    colorLabel.innerHTML = newValue
})
