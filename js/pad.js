const $touches_container = document.querySelector('touches_container')
const $buttons = Array.from($touches_container.querySelectorAll('.button'))
const $sounds = Array.from($touches_container.querySelectorAll('.sound'))

//console.log($touches_container)
//console.log($buttons)
//console.log($sounds)
console.log('coucou')

for (const $button of $buttons)
{
    $button.addEventListener('mousedown', (event) =>
    {
        event.preventDefault()

        playSound($button.dataset.sound)
    })
}

document.addEventListener('keydown', () => 
{
    const $button = $buttons.find((element) => element.classList.contains(`key-${event.keyCode}`))

    if ($button)
    {
        playSound($button.dataset.sound)
    }
})

const playSound = (soundName) =>
{
    const $sound = $sounds.find( (element) => element.classList.contains(soundName))

    $sound.currentTime = 0
    $sound.play()
}