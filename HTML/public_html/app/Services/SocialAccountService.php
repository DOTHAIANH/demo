<?php


namespace App\Services;

use App\Models\SocialAccount;
use Laravel\Socialite\Contracts\User as ProviderUser;
use App\Models\Member;

class SocialAccountService
{
    public static function createOrGetUser(ProviderUser $providerUser, $social)
    {
        $account = SocialAccount::whereProvider($social)
            ->whereProviderUserId($providerUser->getId())
            ->first();

        if ($account) {
            return $account->user;
        } else {
            $email = $providerUser->getEmail() ?? $providerUser->getNickname();
            $account = new SocialAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => $social
            ]);
            $user = Member::whereEmail($email)->first();

            if (!$user) {

                $user = Member::create([
                    'email' => $email,
                    'name' => $providerUser->getName(),
                    'password' => $providerUser->getName(),
                ]);
            }

            $account->member()->associate($user);
            $account->save();

            return $user;
        }
    }
}