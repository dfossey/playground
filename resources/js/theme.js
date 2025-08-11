window.setAppTheme = function (theme) {
    localStorage.setItem('data-bs-theme', theme);
    document.documentElement.setAttribute('data-bs-theme', theme);
}

window.toggleSidebar = function () {
    let minimized = document.body.getAttribute('data-kt-aside-minimize');
    minimized = minimized === 'on' ? 'off' : 'on';

    document.cookie = `data-kt-aside-minimize=${minimized}; path=/; max-age=31536000`;
    document.body.setAttribute('data-kt-aside-minimize', minimized);
}
