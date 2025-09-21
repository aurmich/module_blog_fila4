<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Pages;

use Filament\Pages\Page;

class Dashboard extends Page
{
<<<<<<< HEAD
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-home';
=======
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';
>>>>>>> a12f125f4a (.)
=======
    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-home';
>>>>>>> b93ef594b4 (.)
>>>>>>> 336b9b7 (.)

    protected string $view = 'blog::filament.pages.dashboard';

    // public function mount(): void {
    //     $user = auth()->user();
<<<<<<< HEAD
    //     if(!$user->hasRole('super-admin')) { // @phpstan-ignore method.nonObject
=======
    //     if(!$user->hasRole('super-admin')/** @phpstan-ignore method.nonObject */){
=======
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'blog::filament.pages.dashboard';

    // public function mount(): void {
    //     $user = auth()->user();
    //     if(!$user->hasRole('super-admin')){
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
    //         redirect('/admin');
    //     }
    // }
}
