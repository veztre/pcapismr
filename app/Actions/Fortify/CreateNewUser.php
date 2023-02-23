<?php

namespace App\Actions\Fortify;

use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'contact' => ['required', 'string', 'max:255'],
            'region' => ['required', 'string'],
            'company_id'=> ['required', 'mimes:jpg,jpeg,png', 'max:1024'],
            'government_id' => ['required', 'mimes:jpg,jpeg,png', 'max:1024'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return DB::transaction(function () use ($input) {
            $request = request();

            $file = $request->file('company_id');
            $name = $file->getClientOriginalName();
            $file->move('User/CompanyID', $name);

            $file1 = $request->file('government_id');
            $name1 = $file1->getClientOriginalName();
            $file1->move('User/GovernmentID', $name1);
            return tap(User::create([
                'username' => $input['username'],
                'firstname' => $input['firstname'],
                'lastname' => $input['lastname'],
                'position' => $input['position'],
                'email' => $input['email'],
                'contact' => $input['contact'],
                'region' => $input['region'],
                'company_id' => $name,
                'government_id' => $name1,
                'password' => Hash::make($input['password']),
            ]), function (User $user) {
                $this->createTeam($user);
            });
        });
    }

    /**
     * Create a personal team for the user.
     */
    protected function createTeam(User $user): void
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->name, 2)[0]."'s Team",
            'personal_team' => true,
        ]));
    }
}
