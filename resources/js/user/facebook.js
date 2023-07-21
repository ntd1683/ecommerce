// resources/js/facebook-chat.js
document.addEventListener("DOMContentLoaded", function(event) {
    // Đảm bảo rằng Facebook SDK đã được load trước khi khởi tạo Chat Plugin
    if (typeof FB !== "undefined") {
        FB.CustomerChat.showDialog();
    }
});
