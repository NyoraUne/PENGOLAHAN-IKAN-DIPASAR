window.addEventListener('DOMContentLoaded', event => {
    const datatablesSimple = document.getElementById('tb1');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple);
    }
});
window.addEventListener('DOMContentLoaded', event => {
    const datatablesSimple = document.getElementById('tb2');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple);
    }
});
window.addEventListener('DOMContentLoaded', event => {
    const datatablesSimple = document.getElementById('tb3');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple);
    }
});
window.addEventListener('DOMContentLoaded', event => {
    const datatablesSimple = document.getElementById('tb4');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple);
    }
});
window.addEventListener('DOMContentLoaded', event => {
    const datatablesSimple = document.getElementById('polos');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple, {
            searchable: false,
            paging: false
        });
    }
});
