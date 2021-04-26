


let slide = document.querySelectorAll('#imgShift .slide');
var current = 0;

function cls(){
    for(let i = 0; i < slide.length; i++){
          slide[i].style.display = 'none';
    }
}

function next(){
    cls();
    if(current === slide.length-1) current = -1;
    current++;

    slide[current].style.display = 'block';
    slide[current].style.opacity = 0.4;

    var x = 0.4;
    var intX = setInterval(function(){
        x+=0.1;
        slide[current].style.opacity = x;
        if(x >= 1) {
            clearInterval(intX);
            x = 0.4;
        }
    }, 100);

}

function prev(){
    cls();
    if(current === 0) current = slide.length;
    current--;

    slide[current].style.display = 'block';
    slide[current].style.opacity = 0.4;

    var x = 0.4;
    var intX = setInterval(function(){
        x+=0.1;
        slide[current].style.opacity = x;
        if(x >= 1) {
            clearInterval(intX);
            x = 0.4;
        }
    }, 100);

}

function start(){
    cls();
    slide[current].style.display = 'block';
}
start();
// ---------------------------------------------------------------------------------------------


 
const galleryItems=document.querySelector("#gallery .container").children;
const prev2=document.querySelector("#gallery .prev");
const next2=document.querySelector("#gallery .next");
const page=document.querySelector("#gallery .page-num");
const maxItem=3;
let index=1;
 
 const pagination=Math.ceil(galleryItems.length/maxItem);
 console.log(pagination)

 prev2.addEventListener("click",function(){
   index--;
   check();
   showItems();
 })
 next2.addEventListener("click",function(){
     index++;
     check();
   showItems();  
 })

 function check(){
      if(index==pagination){
          next2.classList.add("disabled");
      }
      else{
        next2.classList.remove("disabled");	
      }

      if(index==1){
          prev2.classList.add("disabled");
      }
      else{
        prev2.classList.remove("disabled");	
      }
 }

 function showItems() {
      for(let i=0;i<galleryItems.length; i++){
          galleryItems[i].classList.remove("show");
          galleryItems[i].classList.add("hide");


         if(i>=(index*maxItem)-maxItem && i<index*maxItem){
            // if i greater than and equal to (index*maxItem)-maxItem;
           // means  (1*8)-8=0 if index=2 then (2*8)-8=8
         galleryItems[i].classList.remove("hide");
         galleryItems[i].classList.add("show");
         }
         page.innerHTML=index;
      }

          
 }

 window.onload=function(){
     showItems();
     check();
 }












