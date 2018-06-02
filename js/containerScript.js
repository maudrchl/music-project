let recorder;
let context;
let audio = document.querySelector('audio');
let startBtn = document.querySelector('.js-start');
let stopBtn = document.querySelector('.js-stop');
let pre = document.querySelector('pre')
window.URL = window.URL || window.webkitURL;
/** 
 * Detecte the correct AudioContext for the browser 
 * */
window.AudioContext = window.AudioContext || window.webkitAudioContext;
navigator.getUserMedia  = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia

let onFail = function(e)
{
	alert('Error '+e)
}

let onSuccess = function(s)
{
	let tracks = s.getTracks()
	startBtn.setAttribute('disabled', true)
    stopBtn.removeAttribute('disabled')
    
    context = new AudioContext()
	let mediaStreamSource = context.createMediaStreamSource(s)
	recorder = new Recorder(mediaStreamSource)
    recorder.record()
    
    stopBtn.addEventListener('click', () =>
    {
		stopBtn.setAttribute('disabled', true)
		startBtn.removeAttribute('disabled')
		recorder.stop()
		tracks.forEach(track => track.stop())
        recorder.exportWAV(function(s)
        {
			audio.src = window.URL.createObjectURL(s)
		})
	})
}

startBtn.addEventListener('click', () => 
{
	if (navigator.getUserMedia) {
		navigator.getUserMedia({audio: true}, onSuccess, onFail); 																			
    }
    else {
		console.warn('navigator.getUserMedia not present')
	}
})

// audio 2

let recorder2;
let context2;
let audio2 = document.querySelector('.audio2')
let startBtn2 = document.querySelector('.js-start2')
let stopBtn2 = document.querySelector('.js-stop2')
let pre2 = document.querySelector('pre2')
window.URL = window.URL || window.webkitURL

window.AudioContext = window.AudioContext || window.webkitAudioContext;
navigator.getUserMedia  = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia
let onFail2 = function(e)
{
	alert('Error '+e)
}

let onSuccess2 = function(s)
{
	let tracks2 = s.getTracks()
	startBtn2.setAttribute('disabled', true);
    stopBtn2.removeAttribute('disabled')
    
    context2 = new AudioContext()
	let mediaStreamSource2 = context2.createMediaStreamSource(s)
	recorder2 = new Recorder(mediaStreamSource2)
    recorder2.record()
    
    stopBtn2.addEventListener('click', ()=>
    {
		stopBtn2.setAttribute('disabled', true)
		startBtn2.removeAttribute('disabled')
		recorder2.stop()
        tracks2.forEach(track => track2.stop())
        
		recorder2.exportWAV(function(s) {
			audio2.src = window.URL.createObjectURL(s)
		})
	})
}

startBtn2.addEventListener('click', ()=>{
	if (navigator.getUserMedia) {
		navigator.getUserMedia({audio: true}, onSuccess, onFail); 																			
    }
    else {
		console.warn('navigator.getUserMedia not present');
	}
})
