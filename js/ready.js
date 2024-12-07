$(document).ready(() => {
    // 延遲模擬載入過程
    $(".loading").delay(1000).fadeOut(500, function () {
        // 當 loading 消失後，顯示主要內容並添加滑動效果
        $("#content").animate({ opacity: 1 }, 800);
    });
});