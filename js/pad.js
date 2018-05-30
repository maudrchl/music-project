const $touches_container = document.querySelector('.touches_container')
// console.log($touches_container)
const $buttons = Array.from($touches_container.querySelectorAll('.touches'))
const $sounds = Array.from(document.querySelectorAll('.sound'))
console.log($sounds)

// console.log($buttons)
// console.log($sounds)
// console.log('coucou')

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
        $button.classList.add('active')
    }
})

document.addEventListener('keyup', (event) => 
{
    const $button = $buttons.find((element) => element.classList.contains(`key-${event.keyCode}`))

    if ($button)
    {
        $button.classList.remove('active')
    }
})

const playSound = (soundName) =>
{

    const $sound = $sounds.find( (element) => element.classList.contains(soundName))

    $sound.currentTime = 0
    $sound.play()
}