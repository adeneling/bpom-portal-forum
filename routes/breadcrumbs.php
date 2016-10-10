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

// Dashboard > Kelola Program
Breadcrumbs::register('admin.program', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('Kelola Program', route('admin.program.index'));
});

// Dashboard > Kelola Pedoman
Breadcrumbs::register('admin.pedoman', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('Kelola Pedoman', route('admin.pedoman.index'));
});

// Dashboard > Kelola Media Promosi
Breadcrumbs::register('admin.media-promosi', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('Kelola Media Promosi', route('admin.media-promosi.index'));
});

// Dashboard > Kelola Pasar Aman
Breadcrumbs::register('admin.pasar-aman', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('Kelola Pasar Aman', route('admin.pasar-aman.index'));
});

// Dashboard > Kelola FAQ
Breadcrumbs::register('admin.faq', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('Kelola FAQ', route('admin.faq.index'));
});

// Dashboard > Kelola Hubungi Kami
Breadcrumbs::register('admin.hubungi-kami', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('Kelola Hubungi Kami', route('admin.hubungi-kami.index'));
});