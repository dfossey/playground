<script>
    (() => {
        const el = document.documentElement;
        let mode = el.getAttribute("data-bs-theme-mode") || localStorage.getItem("data-bs-theme") || "system";

        if (mode === "system") {
            mode = matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }
        el.setAttribute("data-bs-theme", mode);
    })();
</script>
