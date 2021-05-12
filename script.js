let i = 0
const positionId = document.getElementById('position')
const txt = 'Junior web-developer'
const speed = 50
positionId.innerHTML = ''

function typeWriter() {
    if (i < txt.length) {
        positionId.innerHTML += txt.charAt(i)
        i++
        setTimeout(typeWriter, speed)
    }
}

setTimeout(typeWriter, 300)
