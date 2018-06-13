const colorPicker = document.querySelector('.color_choice')
newColor = colorPicker.value

colorPicker.addEventListener('change', () => {
    newValue = colorPicker.value
    changeValue()
})

changeValue = () => 
{
    colorPicker.value = newValue
    return true
}
