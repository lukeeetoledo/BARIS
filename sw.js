self.addEventListener("install", e => {
    e.waitUntil(
        caches.open ("static").then(cache => {
            return cache.addAll(["./", "./CSS/index.css", "./img/Logo_192.png"]);
        })
  ) ;
});
self.addEventListener("fetch", e => {
    console.log('Intercepting fetch request for: ${e.request.url}');
});