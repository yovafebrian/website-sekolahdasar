// Fungsi untuk mengatur tema awal
function initTheme() {
    // Cek localStorage terlebih dahulu
    const savedTheme = localStorage.getItem('theme');
    
    // Jika tidak ada di localStorage, cek preferensi sistem
    if (!savedTheme) {
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        document.documentElement.classList.toggle('dark', prefersDark);
        localStorage.setItem('theme', prefersDark ? 'dark' : 'light');
    } else {
        document.documentElement.classList.toggle('dark', savedTheme === 'dark');
    }
    
    updateThemeIcon();
}

// Fungsi untuk toggle tema
function toggleTheme() {
    const html = document.documentElement;
    const isDark = html.classList.contains('dark');
    
    html.classList.toggle('dark', !isDark);
    localStorage.setItem('theme', isDark ? 'light' : 'dark');
    
    updateThemeIcon();
}

// Fungsi untuk update ikon tema
function updateThemeIcon() {
    const themeToggles = document.querySelectorAll('.theme-toggle');
    
    themeToggles.forEach(toggle => {
        if (document.documentElement.classList.contains('dark')) {
            toggle.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            `;
        } else {
            toggle.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                </svg>
            `;
        }
    });
}

// Export fungsi agar bisa digunakan di file lain
export { initTheme, toggleTheme, updateThemeIcon };