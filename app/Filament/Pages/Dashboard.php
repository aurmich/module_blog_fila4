<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Pages;

use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';

    protected string $view = 'blog::filament.pages.dashboard';

    // public function mount(): void {
    //     $user = auth()->user();
<<<<<<< HEAD
    //     if(!$user->hasRole('super-admin')/** @phpstan-ignore method.nonObject */){
=======
    //     if(!$user->hasRole('super-admin')) { // @phpstan-ignore method.nonObject
>>>>>>> 5cc3f45 (.)
    //         redirect('/admin');
    //     }
    // }
}
