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

// Beranda > Peta Situs
Breadcrumbs::register('peta-situs', function($breadcrumbs)
{
    $breadcrumbs->parent('beranda');
    $breadcrumbs->push('Peta Situs', route('peta-situs.index'));
});

// Beranda > Galeri
Breadcrumbs::register('galeri', function($breadcrumbs)
{
    $breadcrumbs->parent('beranda');
    $breadcrumbs->push('Galeri', route('galeri.index'));
});

// Beranda > Bahan Berbahaya
Breadcrumbs::register('bahan-berbahaya', function($breadcrumbs)
{
    $breadcrumbs->parent('beranda');
    $breadcrumbs->push('Bahan Berbahaya', route('bahan-berbahaya.index'));
});

// Beranda > Pasar Aman
Breadcrumbs::register('pasar-aman', function($breadcrumbs)
{
    $breadcrumbs->parent('beranda');
    $breadcrumbs->push('Pasar Aman', route('pasar-aman.index'));
});

// Beranda > Pasar Aman
Breadcrumbs::register('pasar-pengawasan', function($breadcrumbs)
{
    $breadcrumbs->parent('beranda');
    $breadcrumbs->push('Pasar Dalam Pengawasan', route('pasar.pengawasan'));
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

// Beranda > Forum Fasilitator > Semua Threads
Breadcrumbs::register('forum-fasilitator.threads', function($breadcrumbs)
{
    $breadcrumbs->parent('forum-fasilitator');
    $breadcrumbs->push('Semua Thread', route('threads.all'));
});

// Beranda > Forum Fasilitator > Semua Guide
Breadcrumbs::register('forum-fasilitator.guides', function($breadcrumbs)
{
    $breadcrumbs->parent('forum-fasilitator');
    $breadcrumbs->push('Semua Guide', route('guides.all'));
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

    $judulThread = '';
    strlen($thread->judulThread) > 15 ? $judulThread = substr($thread->judulThread, 0, 15)."..." : $judulThread = $thread->judulThread;

    $breadcrumbs->parent('forum-fasilitator');
    $breadcrumbs->push($judulThread, App\Helpers\AppHelpers::urlThreadForum($thread->id, $thread->judulThread));
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

// Dashboard > Kelola Banner > Tambah Banner
Breadcrumbs::register('admin.banner.create', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.banner');
    $breadcrumbs->push('Tambah Banner', route('admin.banner.create'));
});

// Dashboard > Kelola Banner > Ubah Banner
Breadcrumbs::register('admin.banner.edit', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.banner');
    $breadcrumbs->push('Ubah Banner', route('admin.banner.create'));
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

// Dashboard > Kelola Berita > Ubah Berita
Breadcrumbs::register('admin.berita.edit', function($breadcrumbs, $berita)
{
    $breadcrumbs->parent('admin.berita');
    $breadcrumbs->push($berita->judul, route('admin.berita.edit', encrypt($berita->id)));
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

// Dashboard > Kelola Galeri > Ubah Galeri
Breadcrumbs::register('admin.galeri.edit', function($breadcrumbs, $galeri)
{
    $breadcrumbs->parent('admin.galeri');
    $breadcrumbs->push($galeri->judul, route('admin.galeri.edit', encrypt($galeri->id)));
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

Breadcrumbs::register('admin.program-dokumen.create', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.program');
    $breadcrumbs->push('Tambah Dokumen Program', route('admin.program-dokumen.create'));
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

// Dashboard > Kelola Pedoman > Ubah Pedoman
Breadcrumbs::register('admin.pedoman.edit', function($breadcrumbs, $pedoman)
{
    $breadcrumbs->parent('admin.pedoman');
    $breadcrumbs->push($pedoman->judul, route('admin.pedoman.edit', encrypt($pedoman->id)));
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

// Dashboard > Kelola Bahan Berbahaya > Ubah Bahan Berbahaya
Breadcrumbs::register('admin.bahan-berbahaya.edit', function($breadcrumbs, $bahanBerbahaya)
{
    $breadcrumbs->parent('admin.bahan-berbahaya');
    $breadcrumbs->push($bahanBerbahaya->nama, route('admin.bahan-berbahaya.edit', encrypt($bahanBerbahaya->id)));
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