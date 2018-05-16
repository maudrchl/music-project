const $items = Array.from(document.querySelectorAll('.item'))
const $lol = Array.from(document.querySelectorAll('.lol'))
console.log($items)

for (let i = 0; i < $items.length; i++){
    $items[i].addEventListener('click', (e) => {
        if ($items[i].classList.contains('active')){
            $items[i].classList.remove('active')
            $items[i].classList.toggle('active')
    }
    $items[i].classList.toggle('active')
    })
}   

const $settings = Array.from(document.querySelectorAll('.settings'))
const $subsettings = Array.from(document.querySelectorAll('.subsettings'))

for (let i = 0; i < $settings.length; i++){
    $settings[i].addEventListener('mousedown', (e) =>{
        e.preventDefault()
        if ($settings[i].classList.contains('active')){
            $settings[i].classList.remove('active')
            $settings[i].classList.toggle('active')
        }
        $settings[i].classList.toggle('active')
    })
}