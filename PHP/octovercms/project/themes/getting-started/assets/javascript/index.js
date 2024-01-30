(function () {
    if (!localStorage.getItem('demo-editor-tab-added')) {
        localStorage.setItem('demo-editor-tab-added', 1);
        localStorage.setItem('editor-tabs', '["cms:cms-page:index.htm"]');
        localStorage.setItem('tree-expand-status-editor-navigator-cms:cms-page', 1);    
    }

    document.addEventListener("DOMContentLoaded", function () {
        if (localStorage.getItem("video-tour-clicked")) {
            completeItem1();
        }

        if (document.getElementById("step-3")) {
            completeItem2();
        }

        var btn = document.getElementById("tour-btn");
        if (btn) {
            btn.addEventListener("click", onTourBtnClick);
        }
    });
    
    function onTourBtnClick() {
        localStorage.setItem('video-tour-clicked', 1);
        completeItem1();
    }

    function completeItem1() {
        document.getElementById("item-1").classList.add("completed");
        document.getElementById("item-2").classList.remove("hidden");
        document.getElementById("item-2-skeleton").classList.add("hidden");
    }

    function completeItem2() {
        document.getElementById("item-2").classList.add("completed");
        document.getElementById("item-3-skeleton").classList.add("hidden");
    }
})();