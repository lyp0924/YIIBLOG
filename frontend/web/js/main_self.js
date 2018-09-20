// $(".dropdown-menu>li>a").each(function (e) {
//     $(this).on('click',function () {
//         $('.dropdown-toggle>span').html(this.innerText);
//     });
// });
$("#titleImg").hover(function (e) {
    $(this).attr("class","titleImg1");
    window.setTimeout(function () {
        $("#titleImg").attr("class","titleImg");
    },500)
    window.setTimeout(function () {
        $("#titleImg").attr("class","titleImg2");
    },550)
    window.setTimeout(function () {
        $("#titleImg").attr("class","titleImg");
    },1050)
});
