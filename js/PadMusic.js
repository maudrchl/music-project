class PadMusic{
    constructor(){
        this.initialize()
        this.createAudio()
        this.keySound()
        // this.playSound()
        this.colorButton()
    }

    initialize(){
        this.$touches_container = document.querySelector('.touches_container')
        this.$buttons = Array.from(this.$touches_container.querySelectorAll('.touches'))
        this.$genres = Array.from(document.querySelectorAll('.genre'))
        this.$genre1 = document.querySelector('.pop_select')
        this.$genre2 = document.querySelector('.rock_select')
        this.$genre3 = document.querySelector('.house_select')
    }

    createAudio(){   
        for (let i = 0; i <= this.$buttons.length; i++) {

            this.body = document.querySelector('body')
            this.$sons = document.createElement('audio')
        
            this.$buttons.forEach(element => {
        
                this.$sons.className = `sound pad_${i}`
                this.$sons.src = `sons/bass/${i}.wav`
            });
        
            this.body.appendChild(this.$sons)
        }      
    }

    keySound(){     
        for (this.$button of this.$buttons) {
            this.$button.addEventListener('mousedown', (event) => {
                event.preventDefault()
                if (this.$button) {
                    this.playSound(this.$button.dataset.sound)
                }
            })
        }
    
        document.addEventListener('keydown', () => {
    
            this.$button = this.$buttons.find((element) => element.classList.contains(`key-${event.keyCode}`))
            if (this.$button) {
                this.playSound(this.$button.dataset.sound)
               this.$button.classList.add('active')
            }
        })
        
         document.addEventListener('keyup', () => {
    
            this.$button = this.$buttons.find((element) => element.classList.contains(`key-${event.keyCode}`))
            if (this.$button) {
                this.playSound(this.$button.dataset.sound)
                this.$button.classList.remove('active')
            }
        })
    }

    playSound(soundName){
        const audio = new Audio()
        audio.src = soundName
        audio.play()
    }

    colorButton(){
        for (this.$genre of this.$genres) {
            this.$genre1.addEventListener('click', () => {
            this.$genre1.classList.toggle('changeGenreColor')
            this.$genre2.classList.remove('changeGenreColor')
            this.$genre3.classList.remove('changeGenreColor')
            })
        
            this.$genre2.addEventListener('click', () => {
            this.$genre1.classList.remove('changeGenreColor')
            this.$genre2.classList.toggle('changeGenreColor')
            this.$genre3.classList.remove('changeGenreColor')
            })
        
            this.$genre3.addEventListener('click', () => {
            this.$genre1.classList.remove('changeGenreColor')
            this.$genre2.classList.remove('changeGenreColor')
            this.$genre3.classList.toggle('changeGenreColor')
            })
        
            this.$genre1.addEventListener('mouseover', () => {
            this.$genre1.classList.remove('genre:hover')
            this.$genre1.classList.toggle('genre1:hover')
            })
        }
    }    
}