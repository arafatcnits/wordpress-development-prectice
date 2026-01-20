// Navbar START.........................
document.addEventListener("DOMContentLoaded", function () {
    const navbarMenu = document.getElementById("navbar");
    const burgerMenu = document.getElementById("burger");
    const overlayMenu = document.querySelector(".overlay");
    const closeIcon = document.getElementById("close-icon");

    // ফাংশনগুলো ঠিকমতো কাজ করছে কিনা দেখার জন্য আমরা চেক করে নিব যে এলিমেন্টগুলো পেজে আছে কিনা
    if (burgerMenu && navbarMenu) {

        // Show and Hide Navbar Function
        const toggleMenu = () => {
            navbarMenu.classList.toggle("active");
            overlayMenu.classList.toggle("active");
            document.body.classList.toggle("no-scroll"); // (Optional) মেনু ওপেন থাকলে বডি স্ক্রল বন্ধ করার জন্য
        };

        // Close Navbar Function
        const closeNavbar = () => {
            navbarMenu.classList.remove("active");
            if (overlayMenu) overlayMenu.classList.remove("active");
            document.body.classList.remove("no-scroll");
        };

        // Collapse Mobile Submenu Function
        const toggleSubMenu = (e) => {
            const menuDropdown = e.target.closest(".menu-dropdown");
            const isInsideSubMenu = e.target.closest(".submenu");
            const submenuLink = e.target.closest(".submenu-link");

            // Check screen width (Mobile view < 992px) - আমি এটি ঠিক করে দিয়েছি
            // সাধারণ মোবাইল ব্রেকপয়েন্ট ৯৯২ বা ৭৬৮ পিক্সেল হয়
            const isMobileView = window.innerWidth < 992; 

            // If NOT mobile view, do not collapse/expand manually (Desktop hover does it via CSS usually)
            // আপনার আগের লজিকে এটা < 0 ছিল, তাই কাজ করত না।
            if (!isMobileView) {
                return;
            }

            if (menuDropdown && !isInsideSubMenu && !submenuLink) {
                e.preventDefault();

                const subMenu = menuDropdown.querySelector(".submenu");
                const menuLink = menuDropdown.querySelector(".menu-link");

                if (menuDropdown.classList.contains("active")) {
                    menuDropdown.classList.remove("active");
                    if (menuLink) menuLink.style.color = "";
                    if (subMenu) subMenu.style.maxHeight = null;
                } else {
                    collapseAllMenus();
                    menuDropdown.classList.add("active");
                    if (subMenu) {
                        subMenu.style.maxHeight = `${subMenu.scrollHeight}px`;
                    }
                }
            } else if (submenuLink) {
                const submenuItem = submenuLink.closest(".submenu-item");
                activateSubmenuItem(submenuItem);
                const menuDropdown = submenuItem.closest(".menu-dropdown");
                if(menuDropdown) menuDropdown.classList.add("active");
                collapseAllMenusExcept(menuDropdown);
            }
        };

        // Helper Functions
        const activateSubmenuItem = (submenuItem) => {
            if(!submenuItem) return;
            const subMenu = submenuItem.parentElement;
            const allSubmenuItems = subMenu.querySelectorAll(".submenu-item");
            allSubmenuItems.forEach((item) => {
                item.classList.remove("active");
                const link = item.querySelector(".submenu-link");
                if (link) link.style.color = "";
                item.style.backgroundColor = "";
            });
            // Reset other main menu items...
        };

        const collapseAllMenus = () => {
            const activeMenus = document.querySelectorAll(".menu-dropdown.active");
            activeMenus.forEach((menu) => {
                const menuLink = menu.querySelector(".menu-link");
                const subMenu = menu.querySelector(".submenu");
                menu.classList.remove("active");
                if (menuLink) menuLink.style.color = "";
                if (subMenu) subMenu.style.maxHeight = null;
            });
        };

        const collapseAllMenusExcept = (exceptMenu) => {
            const activeMenus = document.querySelectorAll(".menu-dropdown.active");
            activeMenus.forEach((menu) => {
                if (menu !== exceptMenu) {
                    const menuLink = menu.querySelector(".menu-link");
                    const subMenu = menu.querySelector(".submenu");
                    menu.classList.remove("active");
                    if (menuLink) menuLink.style.color = "";
                    if (subMenu) subMenu.style.maxHeight = null;
                }
            });
        };

        // Initialize Event Listeners
        burgerMenu.addEventListener("click", toggleMenu);
        
        if (overlayMenu) {
            overlayMenu.addEventListener("click", toggleMenu);
        }
        
        navbarMenu.addEventListener("click", toggleSubMenu);
        
        if (closeIcon) {
            closeIcon.addEventListener("click", closeNavbar);
        }
    }
});

// Navbar End.........................

// Back to top button Start....................
var btn = $("#back_to_top");

$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    btn.addClass("show");
  } else {
    btn.removeClass("show");
  }
});

btn.on("click", function (e) {
  e.preventDefault();
  $("html, body").animate({ scrollTop: 0 }, "300");
});
// Back to top button End.........
