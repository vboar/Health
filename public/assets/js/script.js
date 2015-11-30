/**
 * Created by Vboar on 2015/11/29.
 */

/**
 * 当前导航菜单高亮
 */
$(document).ready(function() {
    var current = window.location.pathname;
    var menus = $('.navbar-nav').children();
    menus.each(function() {
        var temp = $(this).find('a').attr("href");
        var result = current.indexOf(temp);
        if (result == 0) {
            $(this).addClass('active');
        }
    });
});

