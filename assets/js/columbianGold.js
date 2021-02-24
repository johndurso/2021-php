//open and close social menu

var john = document.getElementById("john");
var menu = document.getElementById("socialMenu");

function openMenu() {
    menu.classList.add("open");	
    john.classList.add("iconKeyed");
}

function closeMenu() {
    menu.classList.remove("open");
    john.classList.remove("iconKeyed");
}

function toggleMenu(event) {
    menu.classList.toggle("open"); 
    john.classList.toggle("iconKeyed");
}


// dark/light theme toggle

const STORAGE_KEY = 'theme';
const THEME_ATTRIBUTE = 'data-theme';
const THEME_BTN_CLASS = '.js-theme-btn';

function setTheme() {
  let theme = localStorage.getItem(STORAGE_KEY);

  if (!theme) {
    const hour = (new Date).getHours();
    const isNightTime = hour > 18 || hour < 6;

    theme = isNightTime ? "dark" : "light";
  }

  // Set the data attribute to the theme
  document.body.setAttribute(THEME_ATTRIBUTE, theme);
}

function handleThemeBtnClick() {
  const currentTheme = document.body.getAttribute(THEME_ATTRIBUTE);
  const newTheme = currentTheme === 'light' ? 'dark' : 'light';
  
  localStorage.setItem(STORAGE_KEY, newTheme);
  setTheme();
}

document.querySelector(THEME_BTN_CLASS).addEventListener('click', handleThemeBtnClick);

setTheme();

//smooth scroll
const links = document.querySelectorAll("nav ul.navigationMenu li a");

for (const link of links) {
  link.addEventListener("click", clickHandler);
}

function clickHandler(e) {
  e.preventDefault();
  const href = this.getAttribute("href");
  const offsetTop = document.querySelector(href).offsetTop;

  scroll({
    top: offsetTop,
    behavior: "smooth"
  });
}