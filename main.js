// const allRonds = document.querySelectorAll('.rond');
// const allBoxes = document.querySelectorAll('.box');

// const controller = new ScrollMagic.Controller();

// allBoxes.forEach(box => {
    
//     for(i = 0; i < allRonds.length; i++) {

//         if (allRonds[i].getAttribute('data-anim') === box.getAttribute('data-anim')){

//             let tween = gsap.from(box, {y:-200, opacity: 0, duration: 5})

//             let scene = new ScrollMagic.Scene({
//                 triggerElement: allRonds[i],
//                 reverse: true
                
//             })
            
//             .setTween(tween)
//             // .addIndicators()
//             .addTo(controller)
//         }
//     }
// });


const hamburger = document.querySelector('.hamburger');
const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');


let menuOpen = false;
hamburger.addEventListener('click',() => {
    if (!menuOpen) {
        hamburger.classList.add('open');
        menuOpen = true;
    }else {
        hamburger.classList.remove('open');
        menuOpen = false;
    }
});
// const mobile_menu = document.querySelector('header .nav-bar .nav-list ul');
// const header = document.querySelector('.header .container');

// hamburger.addEventListener('click', () => {
//     hamburger.classList.toggle('active');

//     console.log(hamburger);
// });

