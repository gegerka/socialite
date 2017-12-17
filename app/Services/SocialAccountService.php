<?php

namespace App\Services;

use App\UserSocialAccount;
use App\User;

class SocialAccountService
{
    public function createOrGetUser($providerObj, $providerName)
    {

        $providerUser = $providerObj->user();
        $socialAccount = UserSocialAccount::whereProvider($providerName)
            ->whereProviderUserId($providerUser->getId())
            ->first();
        if ($socialAccount) {
            return $socialAccount->user;
        } else {
            $socialAccount = new UserSocialAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => $providerName]);

            $user = User::whereEmail($providerUser->getEmail())->first();

            if (!$user) {
                $user = User::createBySocialProvider($providerUser);
            }

            $socialAccount->user()->associate($user);
            $socialAccount->save();

            return $user;

        }

    }
}