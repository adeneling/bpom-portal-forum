<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;
use App\Models\Banner\Banner;

class BannerSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Storage::makeDirectory('banner');

		$path = public_path('seeder/banner/1.png');
		$lastpath = explode('/', $path);
		$name = str_replace(' ', '_', explode('.', end($lastpath))[0]);
		$filename = 'banner/'.str_random(3).'-'.$name.'.'.explode('.', end($lastpath))[1];
		Storage::put($filename, file_get_contents($path));
		$banner = new Banner;
		$banner->user_id = 1;
		$banner->banner = !is_null($filename) ? Storage::url($filename) : '';
		$banner->hero = '';
		$banner->lead = '';
		$banner->isenabled = 1;
		$banner->save();


		$path = public_path('seeder/banner/2.png');
		$lastpath = explode('/', $path);
		$name = str_replace(' ', '_', explode('.', end($lastpath))[0]);
		$filename = 'banner/'.str_random(3).'-'.$name.'.'.explode('.', end($lastpath))[1];
		Storage::put($filename, file_get_contents($path));
		$banner = new Banner;
		$banner->user_id = 1;
		$banner->banner = !is_null($filename) ? Storage::url($filename) : '';
		$banner->hero = '';
		$banner->lead = '';
		$banner->isenabled = 1;
		$banner->save();

		$path = public_path('seeder/banner/3.png');
		$lastpath = explode('/', $path);
		$name = str_replace(' ', '_', explode('.', end($lastpath))[0]);
		$filename = 'banner/'.str_random(3).'-'.$name.'.'.explode('.', end($lastpath))[1];
		Storage::put($filename, file_get_contents($path));
		$banner = new Banner;
		$banner->user_id = 1;
		$banner->banner = !is_null($filename) ? Storage::url($filename) : '';
		$banner->hero = '';
		$banner->lead = '';
		$banner->isenabled = 1;
		$banner->save();

		$path = public_path('seeder/banner/4.png');
		$lastpath = explode('/', $path);
		$name = str_replace(' ', '_', explode('.', end($lastpath))[0]);
		$filename = 'banner/'.str_random(3).'-'.$name.'.'.explode('.', end($lastpath))[1];
		Storage::put($filename, file_get_contents($path));
		$banner = new Banner;
		$banner->user_id = 1;
		$banner->banner = !is_null($filename) ? Storage::url($filename) : '';
		$banner->hero = '';
		$banner->lead = '';
		$banner->isenabled = 1;
		$banner->save();

		$path = public_path('seeder/banner/5.png');
		$lastpath = explode('/', $path);
		$name = str_replace(' ', '_', explode('.', end($lastpath))[0]);
		$filename = 'banner/'.str_random(3).'-'.$name.'.'.explode('.', end($lastpath))[1];
		Storage::put($filename, file_get_contents($path));
		$banner = new Banner;
		$banner->user_id = 1;
		$banner->banner = !is_null($filename) ? Storage::url($filename) : '';
		$banner->hero = '';
		$banner->lead = '';
		$banner->isenabled = 1;
		$banner->save();
	}
}
