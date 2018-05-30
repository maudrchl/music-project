class Settings{
    constructor(){
        this.initialize()
        this.event()
    }

    initialize(){
        this.$settings = Array.from(document.querySelectorAll('.settings'))
        this.$subsettings = Array.from(document.querySelectorAll('.subsettings'))
    }

    event(){   
        for (let i = 0; i < this.$settings.length; i++){
            this.$settings[i].addEventListener('mousedown', (e) =>{
            e.preventDefault()
        if (this.$settings[i].classList.contains('active')){
            this.$settings[i].classList.remove('active')
            this.$settings[i].classList.toggle('active')
            }
            this.$settings[i].classList.toggle('active')
            })
        }   
    }
}