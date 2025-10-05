// auth.js
export function checkAuth() {
   

    // Clear session token on reload or new tab
    window.addEventListener("beforeunload", () => {
        sessionStorage.removeItem("sessionToken");
    });
}

