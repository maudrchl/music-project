class PadMusic{
    constructor(){
        this.initialize()
        this.changeColorPad()
        this.createAudio()
        this.keySound()
        this.changeBckgColor()
    }

    initialize(){
        this.$touches_container = document.querySelector('.touches_container')
        this.$buttons = Array.from(this.$touches_container.querySelectorAll('.touches'))
        this.$genres = Array.from(document.querySelectorAll('.genre'))
        this.$genre1 = document.querySelector('.pop_select')
        this.$genre2 = document.querySelector('.rock_select')
        this.$genre3 = document.querySelector('.house_select')
    }

    changeColorPad(){
        this.$left = Array.from(document.querySelectorAll('.touches_bass'))
        for (let i=0; i<this.$left.length;i++){
            this.colorPad2 = localStorage.getItem("colorPad2")
            this.$left[i].style.background = this.colorPad2
        }

        this.$middle = Array.from(document.querySelectorAll('.touches_beat'))
        for (let i=0; i<this.$middle.length;i++){
            this.colorPad = localStorage.getItem("colorPad")
            this.$middle[i].style.background = this.colorPad
        }

        this.$right = Array.from(document.querySelectorAll('.touches_melodies'))
        for (let i=0; i<this.$right.length;i++){
            this.colorPad3 = localStorage.getItem("colorPad3")
            this.$right[i].style.background = this.colorPad3
        }
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
                let soundtargeted = event.target.dataset.sound
                let touchtargeted = event.target
                this.$button.dataset.sound = soundtargeted
                this.$button = touchtargeted
                event.preventDefault()
                if (this.$button) {
                    this.playSound(this.$button.dataset.sound)
                    this.$button.classList.add('active')
                }
            })

            this.$button.addEventListener('mouseup', (event) => {
                    let touchtargeted = event.target
                    this.$button = touchtargeted
                    this.$button.classList.remove('active')
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

    changeBckgColor(){
        this.$button_bckg = document.querySelector('.button_bckg')
        this.$small_button = document.querySelector('.small_button')
        this.$bckg = document.querySelector('.pad_background')

        this.$small_button.addEventListener('mousedown', () =>{
            
            if(this.$small_button.classList.contains('active')){
                this.$small_button.classList.remove('active')
                this.$small_button.style.transform = "translate(0px)"
                this.$small_button.style.transition = "0.7s ease-in-out"
                this.$small_button.style.background = "#FFC24B"
                this.$bckg.style.background = "#000000"
                this.$bckg.style.transition = "background-color 0.7s"
            } else {
                this.$small_button.classList.add('active')
                this.$small_button.style.transform = "translate(-30px)"
                this.$small_button.style.transition = "0.7s ease-in-out"
                this.$small_button.style.background = "#000000"
                this.$bckg.style.background = "#FFFFFF"
                this.$bckg.style.transition = "background-color 0.7s"
            }
        })
    }
}