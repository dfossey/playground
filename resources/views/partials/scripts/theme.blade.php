<script>
    (() => {
        {{-- Theme --}}
        const el = document.documentElement;
        let mode = localStorage.getItem('data-bs-theme') || 'system';

        if (mode === 'system') {
            mode = matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
        }
        el.setAttribute('data-bs-theme', mode);
    })();
</script>
