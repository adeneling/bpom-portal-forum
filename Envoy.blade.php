@servers(['web' => 'root@vdi-studio.com'])

@task('git')
	cd /var/www/bpom.vdi-studio.com/
    git pull origin master
@endtask

@task('composer')
	cd /var/www/bpom.vdi-studio.com/
    composer update
@endtask

@task('migrate:refresh')
	cd /var/www/bpom.vdi-studio.com/
	php artisan migrate:refresh --seed
@endtask

@task('laravel:log')
	cd /var/www/bpom.vdi-studio.com/
	cd storage/logs/
	cat laravel.log
@endtask