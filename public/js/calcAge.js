const ageElements = document.getElementsByClassName("age");

let now = new Date();
let yearNow = now.getUTCFullYear();
let monthNow = now.getMonth() + 1;
let dayNow = now.getDate();

let birthDay = new Date(1970, 07, 06, 0, 0, 0);
let yearBd = birthDay.getFullYear();
let monthBd = birthDay.getMonth();
let dayBd = birthDay.getDate();

let age = yearNow - yearBd;

if (monthNow < monthBd || (dayNow == monthBd && dayNow < dayBd)) {
  age--;
}

for (let i = 0; i < ageElements.length; i++) {
  ageElements[i].innerHTML = age;
}
