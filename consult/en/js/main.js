const mailButton = document.getElementById('mailButton')
const formWrapper = document.getElementById('formWrapper')
const closeBtn = document.getElementById('closeButton')
const changeState = ()=>{
    console.log(formWrapper.hidden)
    formWrapper.hidden=!formWrapper.hidden
}
mailButton.addEventListener('click',changeState)
closeBtn.addEventListener('click',changeState)