const btn_plus = document.getElementById("plus_btn");
const btn_minus = document.getElementById("minus_btn");

let a = 0;

btn_plus.onclick = function () {

    let cal_event = document.createElement("img");
    document.getElementById("cal_event").appendChild(cal_event);
    cal_event.src = "./assets/cal_middle.png";

}

btn_minus.onclick = function () {

    let cal_event = document.getElementById("cal_event");
    cal_event.removeChild(cal_event.lastElementChild);

}