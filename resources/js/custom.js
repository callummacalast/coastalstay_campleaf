let map_btn = document.getElementById('map-view-btn');
let list_btn = document.getElementById('list-view-btn');

let map_view = document.getElementById('hotspot-map');
let list_view = document.getElementById('hotspot-list');

if (map_btn) {
    map_btn.addEventListener('click', () => {
        map_btn.classList.add('hidden')
        map_view.classList.remove('hidden')
        map_view.classList.add('flex')
        list_view.classList.add('hidden')
        list_btn.classList.remove('hidden')
    })
}


if (list_btn) {
    list_btn.addEventListener('click', () => {
        list_btn.classList.add('hidden')
        list_view.classList.remove('hidden')
        list_view.classList.add('flex')
        map_view.classList.add('hidden')
        map_btn.classList.remove('hidden')
    })
}