<?php

use Illuminate\Database\Seeder;
use App\Models\UserControl\ForumUsers;
use App\Models\Forum\Thread;
use App\Models\Forum\Comment;
use App\Models\Forum\ThreadImage;

class ForumDummySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//
		$path = public_path('seeder/berita/2.jpg');
		$lastpath = explode('/', $path);
		$name = str_replace(' ', '_', explode('.', end($lastpath))[0]);
		$filename = 'threadImage/'.str_random(3).'-'.$name.'.'.explode('.', end($lastpath))[1];
		Storage::put($filename, file_get_contents($path));
		$konten = '<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

			<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam aliquam quaerat voluptatem.</p>

			<blockquote>
			<p>&ldquo; Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab. &rdquo;</p>
			</blockquote>

			<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

			<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>

			<p><img alt="" src="'.Storage::url($filename).'" style="float:left; height:200px; width:200px" /><span style="font-size:12px"><strong>Adipisicing elit sed do eiuod</strong></span></p>

			<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

			<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

			<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>

			<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

			<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam aliquam quaerat voluptatem.</p>

			<blockquote><q>&ldquo; Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab. &rdquo;</q></blockquote>

			<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

			<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>

			<p><img alt="image description" src="http://exprostudio.com/html/birds_eye/final/images/blog-detail/img-01.jpg" /></p>

			<h3>Adipisicing elit sed do eiuod</h3>

			<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

			<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

			<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>

			<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

			<ul>
				<li>&nbsp;Consectetur adipisicing elit do eiusmod tempor</li>
				<li>&nbsp;Consectetur adipisicing elit do eiusmod tempor</li>
				<li>&nbsp;Consectetur adipisicing elit do eiusmod tempor</li>
				<li>&nbsp;Consectetur adipisicing elit do eiusmod tempor</li>
				<li>&nbsp;Consectetur adipisicing elit do eiusmod tempor</li>
				<li>&nbsp;Consectetur adipisicing elit do eiusmod tempor</li>
			</ul>

			<ul>
				<li>&nbsp;Consectetur adipisicing elit do eiusmod tempor</li>
				<li>&nbsp;Consectetur adipisicing elit do eiusmod tempor</li>
				<li>&nbsp;Consectetur adipisicing elit do eiusmod tempor</li>
				<li>&nbsp;Consectetur adipisicing elit do eiusmod tempor</li>
				<li>&nbsp;Consectetur adipisicing elit do eiusmod tempor</li>
				<li>&nbsp;Consectetur adipisicing elit do eiusmod tempor</li>
			</ul>

			<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur eaque ipsa quae ab illo inventore veritatiet quasi architecto beatae vitae dicta sunt explicabo.</p>
			';

		$komentar = '<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>';

		for($i=1;$i<=500;$i++){
			$email = 'user'.$i.'@puspaman.com';

			$user = new ForumUsers;
			$user->name = 'User'.$i;
			$user->photo = 'http://www.gravatar.com/avatar/'.md5(strtolower(trim($email))).'?s=85&d=identicon';
			$user->email = $email;
			$user->password = bcrypt('user'.$i);
			$user->remember_token = str_random(10);
			$user->admin = 1;
			$user->save();
		}

		for($i=1;$i<=500;$i++){
			Storage::makeDirectory('threadImage');
			for($j=1;$j<=150;$j++){
				for($k=1;$k<5;$k++){
					$path = public_path('seeder/berita/'.$k.'.jpg');
					$lastpath = explode('/', $path);
					$name = str_replace(' ', '_', explode('.', end($lastpath))[0]);
					$filename = 'threadImage/'.str_random(3).'-'.$name.'.'.explode('.', end($lastpath))[1];
					Storage::put($filename, file_get_contents($path));

					$image = ForumUsers::find($user->id)
							 ->newThreadImage()
							 ->withLocated(Storage::url($filename))
							 ->saveImage();
				}
			}
		}

		for($i=1;$i<=500;$i++){
			for($l=1;$l<=100;$l++){
				$thread = new Thread;
				$thread->forum_user_id = $user->id;
				$thread->judulThread = '[Pasar Aman Dummy] Thread Dummy ke-'.$l;
				$thread->tipe = 'umum';
				$thread->konten = $konten;
				$thread->save();

				for($m=1;$m<=500;$m++){
					for($n=1;$n<=2;$n++){
						$comment = Thread::find($thread->id)
								   ->newComment()
								   ->withUserDummy($m)
								   ->withComment($komentar)
								   ->withCounter($thread->comment()->commentThread($thread->id)->count())
								   ->saveComment();
					}
				}
			}
		}

		for($i=1;$i<=200;$i++){
			$thread = new Thread;
			$thread->forum_user_id = 1;
			$thread->judulThread = '[Pasar Aman Dummy] Guide Dummy ke-'.$i;
			$thread->tipe = 'guide';
			$thread->konten = $konten;
			$thread->save();
		}

	}
}
