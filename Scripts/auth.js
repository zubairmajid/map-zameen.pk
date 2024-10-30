// auth.js
export function checkAuth() {
    // Redirect to login page if session token is missing
    if (!sessionStorage.getItem("sessionToken")) {
        window.location.href = "https://test.mustafapro.com/login.html";
    }

    // Clear session token on reload or new tab
    window.addEventListener("beforeunload", () => {
        sessionStorage.removeItem("sessionToken");
    });
}
