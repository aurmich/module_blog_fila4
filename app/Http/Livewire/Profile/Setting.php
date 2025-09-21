<?php

declare(strict_types=1);

namespace Modules\Blog\Http\Livewire\Profile;

<<<<<<< HEAD
use Illuminate\Contracts\View\View;
use Filament\Support\Enums\Width;
use Filament\Schemas\Schema;
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
=======
<<<<<<< HEAD
use Illuminate\Contracts\View\View;
use Filament\Support\Enums\Width;
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
=======
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\ComponentContainer;
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use Filament\Support\Enums\MaxWidth;
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
use Livewire\Component;
use Modules\Blog\Models\Profile;
use Modules\Xot\Actions\GetViewAction;
use Webmozart\Assert\Assert;

/**
<<<<<<< HEAD
 * @property Schema $form
=======
<<<<<<< HEAD
 * @property \Filament\Schemas\Schema $form
=======
 * @property ComponentContainer $form
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
 */
class Setting extends Component implements HasActions, HasForms
{
    use InteractsWithActions;
    use InteractsWithForms;

    public string $tpl = 'setting';

    public string $version = 'v1';

    public Profile $model;

    public array $data = [];

<<<<<<< HEAD
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-document-text';
=======
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
>>>>>>> a12f125f4a (.)
=======
    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-document-text';
>>>>>>> b93ef594b4 (.)
=======
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)

    public function mount(Profile $model, string $tpl = 'v1'): void
    {
        $this->model = $model;

        $this->tpl = $tpl;
        // dddx($this->model->toArray());

        $this->data['name'] = $this->model->user_name;

        $this->form->fill($this->data);
    }

<<<<<<< HEAD
    public function render(): View
=======
<<<<<<< HEAD
    public function render(): View
=======
    public function render(): \Illuminate\Contracts\View\View
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->version);

        $view_params = [
            'view' => $view,
            '_profile' => $this->model,
        ];

<<<<<<< HEAD
        return view($view, $view_params);
=======
<<<<<<< HEAD
        return view((string) $view, (string) $view_params);
=======
        return view($view, $view_params);
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
    }

    public function editProfile(): void
    {
        $this->mountAction('edit');
    }

    public function editPassword(): void
    {
        $this->mountAction('editPassword');
    }

    public function editEmail(): void
    {
        $this->mountAction('editEmail');
    }

    public function editEmailAction(): Action
    {
        return Action::make('editEmail')
            ->record($this->model)
            ->fillForm(fn ($record, $arguments): array => [
                'email' => $this->model->user?->email,
            ])
<<<<<<< HEAD
            ->schema([
=======
<<<<<<< HEAD
            ->schema([
=======
            ->form([
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
                TextInput::make('email')
                    ->required()
                    ->email()
                    ->unique(ignoreRecord: true),
            ])
            ->modalHeading('Change email')
            ->extraModalWindowAttributes(['class' => 'xot-edit-profile-modal'])
            ->modalCloseButton(false)
<<<<<<< HEAD
            ->modalWidth(Width::Small)
=======
<<<<<<< HEAD
            ->modalWidth(Width::Small)
=======
            ->modalWidth(MaxWidth::Small)
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
            ->modalSubmitActionLabel('Update email')
            ->modalCancelActionLabel('Cancel')
            ->action(function (array $data): void {
                $verified = $this->model->email === $data['email'] ? $this->model->email_verified_at : null;

                $this->model->update([
                    'email' => $data['email'],
                ]);

                Assert::notNull($this->model->user, '['.__LINE__.']['.__FILE__.']');
                $this->model->user->update([
                    'email' => $data['email'],
                    'email_verified_at' => $verified,
                ]);

                // NOT IMPLEMENTED: Send verification email
            });
    }

    public function editPasswordAction(): Action
    {
        return Action::make('editPassword')
            ->record($this->model)
<<<<<<< HEAD
            ->schema([
=======
<<<<<<< HEAD
            ->schema([
=======
            ->form([
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
                TextInput::make('old_password')
                    ->required()
                    ->password()
                    ->currentPassword(),
                TextInput::make('password')
                    ->required()
                    ->password()
                    ->rules(['confirmed']),
                TextInput::make('password_confirmation')
                    ->required()
                    ->password(),
            ])
            ->modalHeading('Change password')
            ->closeModalByClickingAway(false)
            ->extraModalWindowAttributes(['class' => 'xot-edit-profile-modal'])
            ->modalCloseButton(false)
<<<<<<< HEAD
            ->modalWidth(Width::Small)
=======
<<<<<<< HEAD
            ->modalWidth(Width::Small)
=======
            ->modalWidth(MaxWidth::Small)
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
            ->modalSubmitActionLabel('Update password')
            ->modalCancelActionLabel('Cancel')
            ->action(function (array $data): void {
                Assert::notNull($this->model->user, '['.__LINE__.']['.__FILE__.']');
                $this->model->user->update([
                    'password' => bcrypt($data['password']),
                ]);
            });
    }

    public function editAction(): Action
    {
        return Action::make('edit')
            ->record($this->model)
            ->fillForm(fn ($record, $arguments): array => [
                'user_name' => $this->model->user_name,
                'first_name' => $this->model->first_name,
                'last_name' => $this->model->last_name,
            ])
<<<<<<< HEAD
            ->schema([
=======
<<<<<<< HEAD
            ->schema([
=======
            ->form([
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
                SpatieMediaLibraryFileUpload::make('photo_profile')
                    ->hiddenLabel()
                    ->alignCenter()
                    ->avatar()
                    ->collection('photo_profile')
                    ->disk('uploads')
                    ->directory('photo_profile')
                    ->statePath('data'),
                TextInput::make('user_name')
                    ->label('User Name'),
                TextInput::make('first_name')
                    ->label('First Name'),
                TextInput::make('last_name')
                    ->label('Last Name'),
            ])
            ->modalHeading('Edit Profile')
            ->closeModalByClickingAway(false)
            ->extraModalWindowAttributes(['class' => 'xot-edit-profile-modal'])
            ->modalCloseButton(false)
<<<<<<< HEAD
            ->modalWidth(Width::Small)
=======
<<<<<<< HEAD
            ->modalWidth(Width::Small)
=======
            ->modalWidth(MaxWidth::Small)
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
            ->modalSubmitActionLabel('Save changes')
            ->modalCancelActionLabel('Cancel')
            // ->modalIcon('heroicon-o-banknotes')
            ->stickyModalHeader()
            ->stickyModalFooter()
            ->action(function (array $data, $arguments, Component $livewire): void {
                $this->model->update([
                    'first_name' => $data['first_name'],
                    'last_name' => $data['last_name'],
                ]);

                Assert::notNull($this->model->user, '['.__LINE__.']['.__FILE__.']');
                $this->model->user->update(['name' => $data['user_name']]);
            });
    }
}
