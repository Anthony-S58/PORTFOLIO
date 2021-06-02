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
const mobile_menu = document.querySelector('.header .nav-list ul');
const links = document.querySelectorAll('.linkburger');

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

let mobileOpen = false;
hamburger.addEventListener('click',() => {
    if (!mobileOpen) {
        mobile_menu.classList.add('open');
        mobileOpen = true;
    }else {
        mobile_menu.classList.remove('open');
        mobileOpen = false;
    }
});

links.forEach(s => {
    s.addEventListener('click',() => {
        mobile_menu.classList.remove('open');
        hamburger.classList.remove('open');
        menuOpen = false;
        mobileOpen = false;
    console.log(menuOpen, mobileOpen);
                
    })
});
