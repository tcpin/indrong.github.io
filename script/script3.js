function popupku() {
  var body = document.querySelector("body");
  var pWm = document.createElement("a");
  pWm.setAttribute("href", "https://github.com/tcpin");
  pWm.setAttribute("style", "text-decoration: none; color: white; opacity: .5; position: fixed; bottom : 10px; left: 10px");
  pWm.innerHTML = "Github : Moldy";
  body.appendChild(pWm);
}
