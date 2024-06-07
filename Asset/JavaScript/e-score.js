document.getElementById('menu_java').addEventListener('click', function() {
    var menu_js = document.getElementById('menu_js');
    if (menu_js.style.display === 'none') {
        menu_js.style.display = 'flex';
    } else {
        menu_js.style.display = 'none';
    }
  });
