<?php

// FRONT END BREADCRUMBS

// Beranda
Breadcrumbs::register('beranda', function($breadcrumbs)
{
    $breadcrumbs->push('Beranda', route('index'));
});

// Beranda > Berita
Breadcrumbs::register('berita', function($breadcrumbs)
{
    $breadcrumbs->parent('beranda');
    $breadcrumbs->push('Berita', route('berita.index'));
});

// Beranda > Galeri
Breadcrumbs::register('galeri', function($breadcrumbs)
{
    $breadcrumbs->parent('beranda');
    $breadcrumbs->push('Galeri', route('galeri.index'));
});

// Beranda > Program
Breadcrumbs::register('program', function($breadcrumbs)
{
    $breadcrumbs->parent('beranda');
    $breadcrumbs->push('Program', route('program.index'));
});

// Beranda > Pedoman
Breadcrumbs::register('pedoman', function($breadcrumbs)
{
    $breadcrumbs->parent('beranda');
    $breadcrumbs->push('Pedoman', route('pedoman.index'));
});

// Beranda > Media Promosi
Breadcrumbs::register('media-promosi', function($breadcrumbs)
{
    $breadcrumbs->parent('beranda');
    $breadcrumbs->push('Media Promosi', route('media-promosi.index'));
});

// Beranda > Forum Fasilitator
Breadcrumbs::register('forum-fasilitator', function($breadcrumbs)
{
    $breadcrumbs->parent('beranda');
    $breadcrumbs->push('Forum Fasilitator', route('thread.index'));
});

// Beranda > Forum Fasilitator > Profile
Breadcrumbs::register('profile', function($breadcrumbs)
{
    $breadcrumbs->parent('forum-fasilitator');
    $breadcrumbs->push('Profile', route('profile.index'));
});

// Beranda > Forum Fasilitator > Buat Thread
Breadcrumbs::register('buat-thread', function($breadcrumbs)
{
    $breadcrumbs->parent('forum-fasilitator');
    $breadcrumbs->push('Buat Thread', route('thread.create'));
});

// Beranda > Forum Fasilitator > [Thread]
Breadcrumbs::register('thread', function($breadcrumbs, $thread) {
    $breadcrumbs->parent('forum-fasilitator');
    $breadcrumbs->push($thread->judulThread, App\Helpers\AppHelpers::urlThreadForum($thread->id, $thread->judulThread));
});

// Beranda > Forum Fasilitator > [Thread] > Tanggapi Thread
Breadcrumbs::register('tanggapi-thread', function($breadcrumbs, $thread) {
    $breadcrumbs->parent('thread', $thread);
    $breadcrumbs->push('Tanggapi Thread', route('comment.create', base64_encode(config('app.salt').$thread->id)));
});

// Beranda > Forum Fasilitator > [Thread] > Edit Tanggapan Thread
Breadcrumbs::register('edit-tanggapan-thread', function($breadcrumbs, $comment) {
    $breadcrumbs->parent('thread', $comment->thread);
    $breadcrumbs->push('Edit Tanggapan Thread', route('comment.edit', encrypt($comment->id)));
});

// Beranda > Pasar Aman
Breadcrumbs::register('pasar-aman', function($breadcrumbs)
{
    $breadcrumbs->parent('beranda');
    $breadcrumbs->push('Pasar Aman', route('pasar-aman.index'));
});

// END FRONT END BREADCRUMBS

// -------------------------------------------------------------------------------------------------------------

// BACK END BREADCRUMBS

// Dashboard
Breadcrumbs::register('admin.dashboard', function($breadcrumbs)
{
    $breadcrumbs->push('Dashboard', route('admin.dashboard.index'));
});

// Dashboard > Kelola Banner
Breadcrumbs::register('admin.banner', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('Kelola Banner', route('admin.banner.index'));
});

// Dashboard > Kelola Berita
Breadcrumbs::register('admin.berita', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('Kelola Berita', route('admin.berita.index'));
});

// Dashboard > Kelola Berita > Buat Berita
Breadcrumbs::register('admin.berita.create', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.berita');
    $breadcrumbs->push('Tambah Berita', route('admin.berita.create'));
});

// Dashboard > Kelola Galeri
Breadcrumbs::register('admin.galeri', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('Kelola Galeri', route('admin.galeri.index'));
});

// Dashboard > Kelola Galeri > Tambah Galeri
Breadcrumbs::register('admin.galeri.create', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.galeri');
    $breadcrumbs->push('Tambah Galeri', route('admin.galeri.create'));
});

// Dashboard > Kelola Program
Breadcrumbs::register('admin.program', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('Kelola Program', route('admin.program.index'));
});

// Dashboard > Kelola Program > Tambah Program
Breadcrumbs::register('admin.program.create', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.program');
    $breadcrumbs->push('Tambah Program', route('admin.program.create'));
});

// Dashboard > Kelola Pedoman
Breadcrumbs::register('admin.pedoman', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('Kelola Pedoman', route('admin.pedoman.index'));
});

// Dashboard > Kelola Pedoman > Tambah Pedoman
Breadcrumbs::register('admin.pedoman.create', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.pedoman');
    $breadcrumbs->push('Tambah Pedoman', route('admin.pedoman.create'));
});

// Dashboard > Kelola Media Promosi
Breadcrumbs::register('admin.media-promosi', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('Kelola Media Promosi', route('admin.media-promosi.index'));
});

// Dashboard > Kelola Media Promosi > Tambah Media Promosi
Breadcrumbs::register('admin.media-promosi.create', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.media-promosi');
    $breadcrumbs->push('Tambah Media Promosi', route('admin.media-promosi.create'));
});

// Dashboard > Kelola Pasar Aman > Ubah Pasar Aman
Breadcrumbs::register('admin.media-promosi.edit', function($breadcrumbs, $mediaPromosi)
{
    $breadcrumbs->parent('admin.media-promosi');
    $breadcrumbs->push($mediaPromosi->nama, route('admin.media-promosi.edit', encrypt($mediaPromosi->id)));
});

// Dashboard > Kelola Pasar Aman
Breadcrumbs::register('admin.pasar-aman', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('Kelola Pasar Aman', route('admin.pasar-aman.index'));
});

// Dashboard > Pengawasan Pasar
Breadcrumbs::register('admin.pengawasan-pasar', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('Pengawasan Pasar', route('admin.pengawasan-pasar.index'));
});

// Dashboard > Kelola Pasar Aman > Tambah Pasar Aman
Breadcrumbs::register('admin.pasar-aman.create', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.pasar-aman');
    $breadcrumbs->push('Tambah Pasar Aman', route('admin.pasar-aman.create'));
});

// Dashboard > Kelola Pasar Aman > Ubah Pasar Aman
Breadcrumbs::register('admin.pasar-aman.edit', function($breadcrumbs, $pasarAman)
{
    $breadcrumbs->parent('admin.pasar-aman');
    $breadcrumbs->push($pasarAman->nama_pasar, route('admin.pasar-aman.edit', encrypt($pasarAman->id)));
});

// Dashboard > Kelola FAQ
Breadcrumbs::register('admin.faq', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('Kelola FAQ', route('admin.faq.index'));
});

// Dashboard > Kelola FAQ > Tambah FAQ
Breadcrumbs::register('admin.faq.create', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.faq');
    $breadcrumbs->push('Tambah FAQ', route('admin.faq.create'));
});

// Dashboard > Kelola Hubungi Kami
Breadcrumbs::register('admin.hubungi-kami', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('Kelola Hubungi Kami', route('admin.hubungi-kami.index'));
});

// Dashboard > Kelola Hubungi Kami > Tambah Hubungi Kami
Breadcrumbs::register('admin.hubungi-kami.create', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.hubungi-kami');
    $breadcrumbs->push('Tambah Hubungi Kami', route('admin.hubungi-kami.create'));
});

// Dashboard > Kelola Bahan Berbahaya
Breadcrumbs::register('admin.bahan-berbahaya', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('Kelola Bahan Berbahaya', route('admin.bahan-berbahaya.index'));
});

// Dashboard > Kelola Bahan Berbahaya > Tambah Bahan Berbahaya
Breadcrumbs::register('admin.bahan-berbahaya.create', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.bahan-berbahaya');
    $breadcrumbs->push('Tambah Bahan Berbahaya', route('admin.bahan-berbahaya.create'));
});

// Dashboard > Kelola Pengguna Forum
Breadcrumbs::register('admin.pengguna-forum', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('Kelola Pengguna Forum', route('admin.pengguna-forum.index'));
});

// Dashboard > Kelola Pengguna Forum > Tambah Pengguna Forum
Breadcrumbs::register('admin.pengguna-forum.create', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.pengguna-forum');
    $breadcrumbs->push('Tambah Pengguna Forum', route('admin.pengguna-forum.create'));
});

// Dashboard > Kelola Pengguna Forum > Ubah Pengguna Forum
Breadcrumbs::register('admin.pengguna-forum.edit', function($breadcrumbs, $user)
{
    $breadcrumbs->parent('admin.pengguna-forum');
    $breadcrumbs->push($user->name, route('admin.pengguna-forum.edit', encrypt($user->id)));
});