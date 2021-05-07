import "../css/style.css"
import { gsap } from "gsap";
import { CSSRulePlugin } from "gsap/CSSRulePlugin";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(CSSRulePlugin, ScrollToPlugin, ScrollTrigger);
gsap.registerPlugin(ScrollTrigger, CSSRulePlugin, ScrollToPlugin);

const hamburger = document.getElementById('hamburger')
let closed = false;
hamburger.onclick = function(){
    if(closed == false){
        gsap.to('.tagline', {
            duration: 1, 
            opacity: 0,
            zIndex: -1
        })
        gsap.to('#nav-mobile', {
            duration: 1,
            display: 'block',
            x:40,
            opacity: 1,
            position: 'fixed',
            zIndex: 2
        })
        closed = true
    }else if(closed = true){
        gsap.to('#nav-mobile', {
            duration: 1,
            x:-400
        })
        gsap.to('.tagline', {
            duration: 1, 
            opacity: 1,
            zIndex: 1
        })
        closed = false
    }
}
//cross origin problem CSSRulePlugin must be loaded locally?
// var rule = CSSRulePlugin.getRule(".backgroundImage:after"); //get the rule
// gsap.from(rule,{
//     opacity: 0,
//     duration: 3
// })
gsap.to('.welcome-text', {
    opacity: 1,
    duration: 5
})
gsap.to('header', {
    scrollTrigger: {
        trigger: 'header',
        start: 'bottom top',
        toggleActions: "play none none reset"
    },
    duration: 1,
    position: 'fixed',
    backgroundColor: 'rgba(142, 121, 62, 0.93)',
    color: '#231F20',
})
gsap.to('header a, #hamburger', {
    scrollTrigger: {
        trigger: 'header',
        start: 'bottom top',
        toggleActions: "play none none reset"
    },
    color: '#231F20'
})
//background image to disapear on scroll
gsap.to('.backgroundImage',{
    scrollTrigger: {
        trigger: '.wrapper',
        start: 'center top',
        toggleActions: 'play none none none'
    },
    opacity: 0,
    duration: 3
})

//card image to scroll on mouseover 
let cardImage = document.querySelectorAll('.img')
cardImage.forEach(function(e){
    window.addEventListener('load', function () {
        let offsetHeight = e.childNodes[1].offsetHeight
        let titleHeight = e.nextElementSibling.scrollHeight
        e.addEventListener('mouseover', function(){
            gsap.to(e, {
                y: -offsetHeight + titleHeight,
                duration: 7
            })
        })
      })
})
cardImage.forEach(function(e){
    e.addEventListener('mouseout', function(){
        gsap.to(e, {
            y: 'unset',
            duration: 7
        })
    })
})
/////////////////////////////////////////Navigation scrollTO buttons
let portfolio = document.getElementById('portfolio')
portfolio.onclick = function(){
    gsap.to(window, {
        scrollTo: "#section",
        duration: 2
      });
      return false
}
let services = document.getElementById('services')
services.onclick = function(){
    gsap.to(window, {
        scrollTo: ".services",
        duration: 4
      });
      return false
}
let contact = document.getElementById('contact')
contact.onclick = function(){
    gsap.to(window, {
        scrollTo: ".contact-form",
        duration: 4
      });
      return false
}
/////////////////////////////////////////Mobile Navigation scrollTO buttons
let mobilePortfolio = document.getElementById('mobile-portfolio')
mobilePortfolio.onclick = function(){
    gsap.to(window, {
        scrollTo: "#section",
        duration: 2
      });
      gsap.to('#nav-mobile', {
        duration: 1,
        x:-400
    })
    gsap.to('.tagline', {
        duration: 1, 
        opacity: 1,
        zIndex: 1
    })
    closed = false
      return false
}
let mobileServices = document.getElementById('mobile-services')
mobileServices.onclick = function(){
    gsap.to(window, {
        scrollTo: ".services",
        duration: 4
      });
      gsap.to('#nav-mobile', {
        duration: 1,
        x:-400
    })
    gsap.to('.tagline', {
        duration: 1, 
        opacity: 1,
        zIndex: 1
    })
    closed = false
      return false
}
let mobileContact = document.getElementById('mobile-contact')
mobileContact.onclick = function(){
    gsap.to(window, {
        scrollTo: ".contact-form",
        duration: 4
      });
      gsap.to('#nav-mobile', {
        duration: 1,
        x:-400
    })
    gsap.to('.tagline', {
        duration: 1, 
        opacity: 1,
        zIndex: 1
    })
    closed = false
      return false
}
//get all contact buttons and link to contact-form
let buttons = document.querySelectorAll('.contact-button')
buttons.forEach(function(e){
    e.addEventListener('click', function(){
        gsap.to(window, {
            scrollTo: '.contact-form',
            duration: 4
        })
    })
})
//get each card and perform animation on each
let leftCard = document.querySelectorAll('.left')
leftCard.forEach(function(e){
    gsap.from(e,{
        scrollTrigger: {
             trigger: e,
             start: 'top bottom',
             end: 'top center',
             markers: false,
             scrub: true,
        },
        x: -300,
        y: 200,
    })
})

//get each card and perform animation on each
let rightCard = document.querySelectorAll('.right')
rightCard.forEach(function(e){
    gsap.from(e,{
        scrollTrigger: {
             trigger: e,
             start: 'top bottom',
             end: 'top center',
             markers: false,
             scrub: true,
        },
        x: 300,
        y: 200
    })
})
///////////////////////////////////////////////////////Begin Services Animations
const rowOne = gsap.from('.row-one', {
    opacity: 0,
    duration: 4,
    paused:  true
})
ScrollTrigger.create({
    trigger: '.row-one',
    start: 'bottom bottom',
    onEnter: () => rowOne.play()
})
ScrollTrigger.create({
    trigger: '.row-one',
    start: 'top bottom',
    onLeaveBack: () => rowOne.pause(0)
})
const rowTwo = gsap.from('.row-two', {
    y: 200,
    duration: 2,
    paused:  true
})
ScrollTrigger.create({
    trigger: '.row-two',
    start: 'top bottom',
    onEnter: () => rowTwo.play()
})
ScrollTrigger.create({
    trigger: '.row-two',
    start: 'top bottom',
    onLeaveBack: () => rowTwo.pause(0)
})

const servicesContact = gsap.from('.services-contact', {
    x: -100,
    duration: 1
})
ScrollTrigger.create({
    trigger: '.row-two',
    start: 'top bottom',
    onEnter: () => servicesContact.play()
})
ScrollTrigger.create({
    trigger: '.row-two',
    start: 'top bottom',
    onLeaveBack: () => servicesContact.pause(0)
})