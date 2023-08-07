import Sortable from "sortablejs/modular/sortable.complete.esm";

var sortir = Sortable.create(document.getElementById("urutan-sorter"),{
    animation : 150,
    multiDrag:true,
    handle: ".fa-grip-lines"
})