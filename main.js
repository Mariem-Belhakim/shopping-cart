let regi = document.querySelectorAll('.fa-regular');


regi.forEach((heart)=>{
    heart.addEventListener('click',function(elem){
        // console.log(target.target)
        elem.target.classList.toggle('fa-solid');
        elem.target.classList.toggle('fa-regular');
    })
})

