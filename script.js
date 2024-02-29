const btnEl = document.querySelectorAll("#btnel");
const countEl = document.getElementById("count");

let a = 0;

btnEl.forEach((btn) => {
  btn.addEventListener("click", increment);
});
function increment() {
  a++;
  countEl.textContent = a;
}
