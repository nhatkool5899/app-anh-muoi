const progress = document.querySelectorAll('.progress-done');
const number = 100;
const numberProgress = 80;

function changeWidth(){
    for (let i = 0; i < progress.length; i++) {
        progress[i].style.width = `${(numberProgress / number) * 100}%`;
        progress[i].innerText = `${Math.ceil(numberProgress)} đã bán`;
    }
}

changeWidth();