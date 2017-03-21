/**
 * Created by Administrator on 2017/3/10.
 */
//��λÿһ��ҳ��
var containerWidth = $("#container-box").width();
// $("#container-box").css('width',containerWidth*4);
$("#container").css('left',0);
$("#container-second").css('left',containerWidth*1);
$("#container-third").css('left',containerWidth*2);
$("#container-four").css('left',containerWidth*3);
$(".nav-font").on("click",function(){
    $("#container-box").css({
        //position:"absolute",
        left:(-$(this).index()*containerWidth)
    });
    $("#nav").css({
        left:($(this).index()*containerWidth)
    });
    $(this).addClass("selected").siblings().removeClass("selected");//导航栏的透明度控制
});
$("#container").on('click',function(){
    console.log(456);
});
// $("#container").on('click',function(){
//         // var iLeft = e.clientX - $(this).offset().left;
//         console.log(123);
//     $(this).on('mousemove',function(e){
//         $(this).css({
//             left: e.clientX-iLeft
//         });
//     });
// });





















// if(navigator.userAgent.indexOf('mobile')){
//     mobile();
// }
//     function mobile(){
//     var currut = $("#container-box").offset().left;
//         $("body").on('swipeleft','.wrapper',function(e){
//             console.log(e.currentTarget);
//             if(e.currentTarget === $("#container-four").get(0)){
//             }else{
//                 $("#container-box").css({
//                     left:currut - containerWidth
//                 });
//             }
//         });
//         $("body").on('swiperight','.wrapper',function(e){
//             var currut = $("#container-box").offset().left;
//             console.log(e.currentTarget);
//             if(e.currentTarget === $("#container").get(0)){
//
//             }else{
//                 $("#container-box").css({
//                     left:currut + containerWidth
//                 });
//             }
//         });
//
//     }






