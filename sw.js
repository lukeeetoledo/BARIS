self.addEventListener("install", e => {
    e.waitUntil(
        caches.open ("static").then(cache => {
            return cache.addAll(["./", "./CSS/index.css", "./img/Logo_192.png", "img/LOGO.png"]);
        })
  ) ;
});
self.addEventListener ("fetch", e => {
    e.respondWith(
        caches.match(e.request).then (response =>{
            return response || fetch(e.request);
        })
    );
});