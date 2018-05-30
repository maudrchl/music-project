const $touches_container = document.querySelector('.touches_container')
const $buttons = Array.from($touches_container.querySelectorAll('.touches'))
const $beat = $touches_container.querySelectorAll('.beats')
console.log($beat)

//create audio element

for (let i = 0; i <= $buttons.length; i++) {

    const body = document.querySelector('body')
    const $sons = document.createElement('audio')

    $buttons.forEach(element => {

        $sons.className = `sound pad_${i}`
        $sons.src = `sons/bass/${i}.wav`

        console.log($sons)
    });

    body.appendChild($sons)

}

//create array of sounds from $sons

    const $sounds = Array.from(document.querySelectorAll('.sound'))
    const $genres = Array.from(document.querySelectorAll('.genre'))
    const $genre1 = document.querySelector('.pop_select')
    const $genre2 = document.querySelector('.rock_select')
    const $genre3 = document.querySelector('.house_select')

    const $button = $buttons.find((element) => element.classList.contains(`key-${event.keyCode}`))
    if ($button)
    {
        playSound($button.dataset.sound)
        $button.classList.add('active')
    }

document.addEventListener('keyup', (event) => 
{
    const $button = $buttons.find((element) => element.classList.contains(`key-${event.keyCode}`))

    if ($button)
    {
        $button.classList.remove('active')
//affect a song to a touch

        for (const $button of $buttons) {
            $button.addEventListener('mousedown', (event) => {
                event.preventDefault()

                playSound($button.dataset.sound)
            })
        }
    }

    document.addEventListener('keydown', () => {
        
            const $button = $buttons.find((element) => element.classList.contains(`key-${event.keyCode}`))
            if ($button) {
                console.log(event.keyCode)
                playSound($button.dataset.$sound)
            }
        })

        const playSound = (soundName) => {

            const $sound = $sounds.find((element) => element.classList.contains(soundName))

            $sound.currentTime = 0
            $sound.play()
        }
    })




for (const $genre of $genres) {
    $genre1.addEventListener('click', () => {
        $genre1.classList.toggle('changeGenreColor')
        $genre2.classList.remove('changeGenreColor')
        $genre3.classList.remove('changeGenreColor')
    })

    $genre2.addEventListener('click', () => {
        $genre1.classList.remove('changeGenreColor')
        $genre2.classList.toggle('changeGenreColor')
        $genre3.classList.remove('changeGenreColor')
    })

    $genre3.addEventListener('click', () => {
        $genre1.classList.remove('changeGenreColor')
        $genre2.classList.remove('changeGenreColor')
        $genre3.classList.toggle('changeGenreColor')
    })

    $genre1.addEventListener('mouseover', () => {
        $genre1.classList.remove('genre:hover')
        $genre1.classList.toggle('genre1:hover')
    })
}