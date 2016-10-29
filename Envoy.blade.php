@servers(['local' => '127.0.0.1', 'web' => 'root@vdi-studio.com'])

@story('deploy')
    push
    pull-server
@endstory

@task('push', ['on' => 'local'])
	git push origin master
	git push github master
@endtask

@task('pull-server', ['on' => 'web'])
	cd /var/www/bpom.vdi-studio.com/
	git stash
    git pull origin master
@endtask

@task('composer', ['on' => 'web'])
	cd /var/www/bpom.vdi-studio.com/
    composer update
@endtask

@task('migrate:refresh', ['on' => 'web'])
	cd /var/www/bpom.vdi-studio.com/
	php artisan migrate:refresh --seed
@endtask

@task('laravel:log', ['on' => 'web'])
	cd /var/www/bpom.vdi-studio.com/
	cd storage/logs/
	cat laravel.log
@endtask