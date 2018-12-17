$(function () {
    $("#Trip_start_date").pickmeup({
        position: "left",
        hide_on_select: true,
        format: "Y-m-d",
        view: "months"
    });
});

/*
 jQuery(function ($) {
 jQuery('body').on('click', '#yt0', function () {
 jQuery.ajax({
 'url': '/index.php?r=trip/whattimeisit',
 'cache': false,
 'success': function (html) {
 jQuery("#req_time").html(html)
 }});
 return false;
 });
 
 jQuery('body').on('change', '#region_id', function () {
 jQuery.ajax({
 'type': 'POST',
 'url': '/index.php?r=trip/equipageisavailable',
 'data': {'region_id': this.value},
 'cache': false,
 'success': function (html) {
 jQuery("#city_name").html(html)
 }});
 return false;
 });
 });
 */