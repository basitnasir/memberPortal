$(document).ready(function () {
    $(".sidebar-dropdown").click(function (e) {
        e.preventDefault();

        const $this = $(this);
        const $sublist = $this.next(".dashboard-nav-sublist");

        $(".dashboard-nav-sublist").not($sublist).slideUp();
        $(".sidebar-dropdown").not($this).removeClass("active");

        $(".sidebar-sb-dropdown").removeClass("active");
        $(".dashboard-sm-sublist").slideUp();

        $this.toggleClass("active");
        $sublist.stop(true, true).slideToggle();
    });

    $(".sidebar-sb-dropdown").click(function (e) {
        const $submenu = $(this).next(".dashboard-sm-sublist");

        if ($submenu.length) {
            e.preventDefault();

            $(this)
                .closest(".dashboard-nav-sublist")
                .find(".dashboard-sm-sublist")
                .not($submenu)
                .slideUp()
                .parent(".dashboard-nav-subitem").addClass("active");

            $(this)
                .closest(".dashboard-nav-sublist")
                .find(".sidebar-sb-dropdown")
                .not(this)
                .removeClass("active")
                .parent(".dashboard-nav-subitem").removeClass("active");

            $(this).toggleClass("active");
            $(this).parent(".dashboard-nav-subitem").toggleClass("active");
            $submenu.stop(true, true).slideToggle();
        }
    });
});


// toggle siderbar js

$(".sidebar-toggle-btn").click(function () {
    $(".dashboard-sidebar").toggleClass("active");
});