# Docker Workflow

## Environment setup

copy env-template to .env and update the settings accordingly.  The default should just work.

## Create a user account

```sh
docker-compose exec nix_www php /app/artisan tinker
```

Then to create a user do the following:

```
>>> $user = new App\User();
=> App\User {#2994}
>>> $user->password = Hash::make('secret')
>>> $user->email = 'admin@admin.com'
>>> $user->name = 'Admin'
>>> $user->role = 'admin';
>>> $user->save()
```

After which you should be able to navigate to http://localhost:9000/login 


NOTE: in production you need to be have a backup script running.