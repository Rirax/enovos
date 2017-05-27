/**
 * Created by aalliot on 8/31/16.
 */

(function(){
    var button = document.getElementById('mobile-nav-icon');
    var menu = document.getElementById('menu');
    var bar = document.getElementById('bar');
    var isOpen = false;

    button.addEventListener('click', function () {
        if (isOpen)
        {
            menu.className = menu.className.replace('open', '');
            bar.className = bar.className.replace('open', '');
        }
        else
        {
            menu.classList += ' open';
            bar.classList += ' open';
        }

        isOpen = !isOpen;
    });
})();
