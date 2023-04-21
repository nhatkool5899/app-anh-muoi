const progress = document.querySelectorAll('.progress-done');
const progress_2 = document.querySelectorAll('.progress-done-2');
const progress_3 = document.querySelectorAll('.progress-done-3');
const number = 100;
const numberProgress = 70;

function changeWidth(){
    for (let i = 0; i < progress.length; i++) {
        progress[i].style.width = `${(75 / number) * 100}%`;
        progress[i].innerText = `còn lại ${Math.ceil(numberProgress)} phần`;
    }
}

function changeWidth_2(){
    for (let i = 0; i < progress_2.length; i++) {
        progress_2[i].style.width = `${(86 / number) * 100}%`;
        progress_2[i].innerText = `còn lại ${Math.ceil(numberProgress - 50)} phần`;
    }
}


function changeWidth_3(){
    for (let i = 0; i < progress_3.length; i++) {
        progress_3[i].style.width = `${(94 / number) * 100}%`;
        progress_3[i].innerText = `còn lại 8 phần`;
    }
}

changeWidth();
changeWidth_2();
changeWidth_3();

