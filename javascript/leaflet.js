//Leaflet-map
let map = L.map("map").setView([51.230009555291645, 4.416169292905717], 17);

L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution:
    '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(map);

let iconLogo = L.icon({
  iconUrl: "assets/images/logo.png",
  iconSize: [38, 95],
});

L.marker([51.230009555291645, 4.416169292905717], { icon: iconLogo }).addTo(
  map
);
