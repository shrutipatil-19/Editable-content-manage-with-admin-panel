<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
      
    <title>cowork.one</title>
    <style>
      /* announsant bar satrt */
      .announcement-bar {
    background-color:  hsl(220, 48%, 28%);
    color: #FFFFFF;
    text-align: center;
    padding: 5px 10px;
    font-size: 18px;
    width: 100%;
    z-index: 100;
    position: fixed;
    top: 0;
    left: 0;

}

.announcement-bar p {
    display: inline-block;
    margin: 0;
}

.close-btn {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    background-color: transparent;
    border: none;
    font-size: 18px;
    cursor: pointer;
    color : #FFFFFF;
}

.close-btn:hover {
    color: #ff5733;
}

@media (max-width: 768px) {
    .announcement-bar {
        font-size: 16px;
        padding: 10px 5px;
    }

    .close-btn {
        right: 10px;
    }
}

@media (max-width: 480px) {
    .announcement-bar {
        font-size: 14px;
    }

    .close-btn {
        right: 5px;
    }
}
      /* announsant bar end */


        /*=============== GOOGLE FONTS ===============*/
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap");
/*=============== VARIABLES CSS ===============*/
:root {
  --header-height: 3.5rem;
  /*========== Colors ==========*/
  /*Color mode HSL(hue, saturation, lightness)*/
  --first-color: #808080;
  --first-color-lighten: hsl(220, 68%, 97%);
  --title-color: hsl(220, 48%, 28%);
  --text-color: hsl(220, 12%, 45%);
  --body-color: hsl(220, 100%, 99%);
  /*========== Font and typography ==========*/
  /*.5rem = 8px | 1rem = 16px ...*/
  --body-font: "Poppins", sans-serif;
  --normal-font-size: .938rem;
  --small-font-size: .813rem;
  --smaller-font-size: .75rem;
  /*========== Font weight ==========*/
  --font-medium: 500;
  --font-semi-bold: 600;
  /*========== z index ==========*/
  --z-tooltip: 10;
  --z-fixed: 100;
}
@media screen and (min-width: 1024px) {
  :root {
    --normal-font-size: 1rem;
    --small-font-size: .875rem;
    --smaller-font-size: .813rem;
  }
}

/*=============== BASE ===============*/
* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}

body {
  font-family: "Poppins", sans-serif;
  font-size: .938rem;
  background-color: var(--body-color);
  color: var(--text-color);
}

ul {
  list-style: none;
}

a {
  text-decoration: none;
}

/*=============== REUSABLE CSS CLASSES ===============*/
.nav-container {
  padding: 0px 77px;
}

/*=============== HEADER ===============*/
.header {
  position: fixed;
  top: 33px;
  left: 0;
  width: 100%;
  box-shadow: 0 0px 8px hsla(220, 68%, 12%, 0.1);
  background-color: var(--body-color);
  z-index: var(--z-fixed);
}

/*=============== NAV ===============*/

.nav__data {
  height: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.nav__logo {
  display: inline-flex !important;
  align-items: center !important;
  column-gap: 0.25rem !important;
  color: var(--title-color) !important;
  font-weight: var(--font-semi-bold) !important;
  transition: color 0.3s !important;
}
.nav__logo img {
  width: 150px;
}
.nav__logo:hover {
  color: var(--first-color);
}
.nav__toggle {
  position: relative;
  width: 32px;
  height: 32px;
}
.nav__toggle-menu, .nav__toggle-close {
  font-size: 1.25rem;
  color: var(--title-color);
  position: absolute;
  display: grid;
  place-items: center;
  inset: 0;
  cursor: pointer;
  transition: opacity 0.1s, transform 0.4s;
}
.nav__toggle-close {
  opacity: 0;
}
@media screen and (max-width: 1118px) {
  .nav__menu {
    background-color: var(--body-color);
    position: absolute;
    left: 0;
    top: 2.5rem;
    width: 100%;
    height: calc(100vh - 3.5rem);
    overflow: auto;
    padding-block: 1.5rem 4rem;
    pointer-events: none;
    opacity: 0;
    transition: top 0.4s, opacity 0.3s;
  }
  .nav__menu::-webkit-scrollbar {
    width: 0.5rem;
  }
  .nav__menu::-webkit-scrollbar-thumb {
    background-color: hsl(220, 12%, 70%);
  }
}
.nav__link {
  color: var(--title-color);
  font-weight: var(--font-semi-bold);
  padding: 1.25rem 1.5rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  transition: background-color 0.3s;
  font-size: 1.1rem;
}
.nav__link:hover {
  background-color: var(--first-color-lighten);
}

/* Show menu */
.show-menu {
  opacity: 1;
  top: 3.5rem;
  pointer-events: initial;
}

/* Show icon */
.show-icon .nav__toggle-menu {
  opacity: 0;
  transform: rotate(90deg);
}

.show-icon .nav__toggle-close {
  opacity: 1;
  transform: rotate(90deg);
}

/*=============== DROPDOWN ===============*/
.dropdown__button {
  cursor: pointer;
}
.dropdown__arrow {
  font-size: 1.5rem;
  font-weight: initial;
  transition: transform 0.4s;
}
.dropdown__content, .dropdown__group, .dropdown__list {
  display: grid;
}
.dropdown__container {
  background-color: var(--first-color-lighten);
  height: 0;
  overflow: hidden;
  transition: height 0.4s;
}
.dropdown__content {
  row-gap: 1.75rem;
}
.dropdown__group {
  padding-left: 2.5rem;
  row-gap: 0.5rem;
}
.dropdown__group:first-child {
  margin-top: 1.25rem;
}
.dropdown__group:last-child {
  margin-bottom: 1.25rem;
}
.dropdown__icon i {
  font-size: 1.25rem;
  color: var(--first-color);
}
.dropdown__title {
  font-size: var(--small-font-size);
  font-weight: var(--font-semi-bold);
  color: var(--title-color);
}
.dropdown__list {
  row-gap: 0.25rem;
}
.dropdown__link {
  font-size: var(--smaller-font-size);
  font-weight: var(--font-medium);
  color: var(--text-color);
  transition: color 0.3s;
}
.dropdown__link:hover {
  color: var(--title-color);
}

/* Rotate dropdown icon */
.show-dropdown .dropdown__arrow {
  transform: rotate(180deg);
}
.search {
  display: flex;
  align-items: center;
}
.search img {
  padding: 0px 15px;

}
/*=============== BREAKPOINTS ===============*/
/* For small devices */
@media (min-width: 200px) and (max-width:1200px)  {
  .dropdown__group {
    padding-left: 1.5rem;
  }
  .nav-container {
    padding: 0px 49px;
    margin: 20px 0px;
}
.search{
  
  display: none;
}
.nav-container {
  padding: 6px 12px;
}
}
/* For large devices */
@media screen and (min-width: 1118px) {
  /* Nav */
  .nav {
    height: calc(var(--header-height) + 2rem);
    display: flex;
    justify-content: space-between;
  }
  .nav__toggle {
    display: none;
  }
  .nav__list {
    display: flex;
    column-gap: 3rem;
    height: 100%;
  }
  .nav li {
    display: flex;
  }
  .nav__link {
    padding: 0;
  }
  .nav__link:hover {
    background-color: initial;
  }
  /* Dropdown */
  .dropdown__button {
    column-gap: 0.25rem;
    pointer-events: none;
  }
  .dropdown__container {
    height: max-content;
    position: absolute;
    left: 0;
    right: 0;
    top: 6.5rem;
    background-color: var(--body-color);
    box-shadow: 0 6px 8px hsla(220, 68%, 12%, 0.05);
    pointer-events: none;
    opacity: 0;
    transition: top 0.4s, opacity 0.3s;
  }
  .dropdown__content {
    grid-template-columns: repeat(4, max-content);
    column-gap: 6rem;
    max-width: 1120px;
    margin-inline: auto;
  }
  .dropdown__group {
    padding: 4rem 0;
    align-content: baseline;
    row-gap: 1.25rem;
  }
  .dropdown__group:first-child, .dropdown__group:last-child {
    margin: 0;
  }
  .dropdown__list {
    row-gap: 0.75rem;
  }
  .dropdown__icon {
    width: 60px;
    height: 60px;
    background-color: var(--first-color-lighten);
    border-radius: 50%;
    display: grid;
    place-items: center;
    margin-bottom: 1rem;
  }
  .dropdown__icon i {
    font-size: 2rem;
  }
  .dropdown__title {
    font-size: .938rem;
  }
  .dropdown__link {
    font-size: var(--small-font-size);
  }
  .dropdown__link:hover {
    color: var(--first-color);
  }
  .dropdown__item {
    cursor: pointer;
  }
  .dropdown__item:hover .dropdown__arrow {
    transform: rotate(180deg);
  }
  .dropdown__item:hover > .dropdown__container {
    top: 5.5rem;
    opacity: 1;
    pointer-events: initial;
    cursor: initial;
  }
}
@media screen and (min-width: 1152px) {
  .nav-container {
    margin-inline: auto;
  }
  
}
@media screen and (min-width: 1400px) {
  /* Nav */
  .nav {
            /* width: 1940px; */
        margin: auto;
  }
}
    </style>
</head>

<body>
  <!-- announsant bar start -->

  <div class="announcement-bar">
        <p>📢 Big Sale! Get 50% off on all items! Limited time offer.</p>
        <button class="close-btn" onclick="closeBar()">✖</button>
    </div>
  <!-- announsant bar end -->
    <!-- header start -->
    <header class="header" id="topheader">
        <nav class="nav nav-container">
            <div class="nav__data">
                <a href="{{route('home')}}" class="nav__logo">
                    <!-- <img src="/img/logo.png" alt=""> -->
                    <h1>COWORK.ONE</h1>
                </a>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line nav__toggle-menu"></i>
                    <i class="ri-close-line nav__toggle-close"></i>
                </div>
            </div>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li>
                        <a href="{{route('home')}}" class="nav__link">Home</a>
                    </li>
                    <li>
                        <a href="{{route('about')}}" class="nav__link">About</a>
                    </li>
                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button"><a href="{{route('event')}}">Events</a>
                          <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>
                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">
                                    <span class="dropdown__title">Personal Events</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Weddings</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Birthdays</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Anniversaries</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <span class="dropdown__title">Corporate Events</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Conferences</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Seminars</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Award Ceremonies</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">

                                    <span class="dropdown__title">Social and Cultural Events</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Festivals</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Religious Events</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Fairs and Carnivals</a>
                                        </li>
                                     
                                    </ul>
                                </div>

                                <div class="dropdown__group">


                                    <span class="dropdown__title">Educational Events</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Lectures</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Career Fairs</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- <li>
                        <a href="{{route('contact')}}" class="nav__link">Blogs</a>
                    </li> -->
                    <!-- <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                            Product <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">

                                    <span class="dropdown__title">templates</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Free templates</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Premium templates</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">

                                    <span class="dropdown__title">Designs</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Web designs</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">App designs</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Component design</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">

                                    <span class="dropdown__title">Others</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Recent blogs</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Tutorial videos</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Webinar</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li> -->
                    <!-- <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                            Pages <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">


                                    <span class="dropdown__title">About us</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">About us</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Support</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Contact us</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">

                                    <span class="dropdown__title">Safety and quality</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Cookie settings</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Privacy Policy</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li> -->
                    <li>
                        <a href="{{route('contact')}}" class="nav__link">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- <div class="search">
                <img src="img/search.png" alt="search">
                <img src="img/profile.png" alt="profile">
                <img src="img/whishlist.png" alt="whishlist">
                <p class="card-head">Card</p>
                <img src="img/cart.png" alt="card">
            </div> -->
        </nav>
    </header>

    <!-- header end -->

<script>
    /*=============== SHOW MENU ===============*/
const showMenu = (toggleId, navId) =>{
   const toggle = document.getElementById(toggleId),
         nav = document.getElementById(navId)

   toggle.addEventListener('click', () =>{
       // Add show-menu class to nav menu
       nav.classList.toggle('show-menu')
       // Add show-icon to show and hide menu icon
       toggle.classList.toggle('show-icon')
   })
}

showMenu('nav-toggle','nav-menu')

/*=============== SHOW DROPDOWN MENU ===============*/
const dropdownItems = document.querySelectorAll('.dropdown__item')

// 1. Select each dropdown item
dropdownItems.forEach((item) =>{
    const dropdownButton = item.querySelector('.dropdown__button') 

    // 2. Select each button click
    dropdownButton.addEventListener('click', () =>{
        // 7. Select the current show-dropdown class
        const showDropdown = document.querySelector('.show-dropdown')
        
        // 5. Call the toggleItem function
        toggleItem(item)

        // 8. Remove the show-dropdown class from other items
        if(showDropdown && showDropdown!== item){
            toggleItem(showDropdown)
        }
    })
})

// 3. Create a function to display the dropdown
const toggleItem = (item) =>{
    // 3.1. Select each dropdown content
    const dropdownContainer = item.querySelector('.dropdown__container')

    // 6. If the same item contains the show-dropdown class, remove
    if(item.classList.contains('show-dropdown')){
        dropdownContainer.removeAttribute('style')
        item.classList.remove('show-dropdown')
    } else{
        // 4. Add the maximum height to the dropdown content and add the show-dropdown class
        dropdownContainer.style.height = dropdownContainer.scrollHeight + 'px'
        item.classList.add('show-dropdown')
    }
}

/*=============== DELETE DROPDOWN STYLES ===============*/
const mediaQuery = matchMedia('(min-width: 1118px)'),
      dropdownContainer = document.querySelectorAll('.dropdown__container')

// Function to remove dropdown styles in mobile mode when browser resizes
const removeStyle = () =>{
    // Validate if the media query reaches 1118px
    if(mediaQuery.matches){
        // Remove the dropdown nav-container height style
        dropdownContainer.forEach((e) =>{
            e.removeAttribute('style')
        })

        // Remove the show-dropdown class from dropdown item
        dropdownItems.forEach((e) =>{
            e.classList.remove('show-dropdown')
        })
    }
}

addEventListener('resize', removeStyle)

// announdant bar start
function closeBar() {
            document.querySelector('.announcement-bar').style.display = 'none';
            document.getElementById('topheader').style.top = '0';
        }
</script>