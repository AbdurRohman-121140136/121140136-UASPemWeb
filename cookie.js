// Fungsi untuk menyimpan informasi pengguna ke dalam cookie
function setCookie(key, value) {
    document.cookie = key + "=" + value + "; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
}

// Fungsi untuk menghapus cookie
function deleteCookie(key) {
    document.cookie = key + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/";
}

// Simpan informasi pengguna ke dalam cookie setelah halaman dimuat
window.onload = function() {
    setCookie('user', 'Tamu');
};

// Fungsi untuk mendapatkan informasi pengguna dari cookie
function getCookie(key) {
    var name = key + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var cookieArray = decodedCookie.split(';');
    for (var i = 0; i < cookieArray.length; i++) {
        var cookie = cookieArray[i].trim();
        if (cookie.indexOf(name) == 0) {
            return cookie.substring(name.length, cookie.length);
        }
    }
    return "";
}

// Fungsi untuk menyimpan informasi pengguna ke dalam localStorage
function setLocalStorage(key, value) {
    localStorage.setItem(key, value);
}

// Fungsi untuk mendapatkan informasi pengguna dari localStorage
function getLocalStorage(key) {
    return localStorage.getItem(key);
}

// Fungsi untuk menghapus informasi pengguna dari localStorage
function removeLocalStorage(key) {
    localStorage.removeItem(key);
}

// Simpan informasi pengguna ke dalam browser storage
setLocalStorage('user', 'Tamu');