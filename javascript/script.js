var btnTab1 = document.getElementById("btn-tab-1");
var btnTab2 = document.getElementById("btn-tab-2");

var tab1 = document.getElementById("tab-1");
var tab2 = document.getElementById("tab-2");

function showDetail(iddetail) {
    var detail = document.getElementById(iddetail);
    detail.classList.remove("d-none")
}

function hideDetail(iddetail) {
    var detail = document.getElementById(iddetail);
    detail.classList.add("d-none");
}

function changeTab(position) {
    if (position == 1) {
        btnTab1.classList.add("active");
        btnTab2.classList.remove("active");

        tab1.classList.add("d-block");
        tab1.classList.remove("d-none")
        tab2.classList.add("d-none");
    } else if (position == 2) {
        btnTab1.classList.remove("active");
        btnTab2.classList.add("active");

        tab1.classList.add("d-none");
        tab2.classList.remove("d-none")
        tab2.classList.add("d-block");
    }
}