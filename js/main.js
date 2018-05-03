const $items = Array.from(document.querySelectorAll('.item'))
const $lol = Array.from(document.querySelectorAll('.lol'))
console.log($items)

for (let i = 0; i < $items.length; i++){
    $items[i].addEventListener('click', (e) => {
        if ($items[i].classList.contains('active')){
            $items[i].classList.remove('active')
            $items[i].classList.toggle('active')
        //     if ($items[i].dataset.icone == 1){

        //     } else if ($items[i].dataset.icone == 2){

        //     } else if ($items[i].dataset.icone == 3){

        //     } else if ($items[i].dataset.icone == 4){
        // }
    }
    $items[i].classList.toggle('active')
    })
}   