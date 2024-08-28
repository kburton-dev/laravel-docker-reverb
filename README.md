## Getting Started

Copy example env
```
cp .env.example .env
```

Build frontend
```
npm run dev
// or
npm run build
```

Spin up services
```
docker compose up
```

Run migrations
```
docker compose exec app php artisan migrate
```

Broadcast events
```
docker compose exec app php artisan app:broadcast-public
// or
docker compose exec app php artisan app:broadcast-private
```

The private events won't show as this repo doesn't provide a way for you to login/register, so your browser won't authenticate on the private channel. Once you set all of that up, I assume this will work out of the box.