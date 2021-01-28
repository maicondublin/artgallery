<?php

namespace App\View\User;

use App\Model\User\UserLoadSettings;

class AdminSettings {


    public function showYourself($user){

        if (!$user instanceof UserLoadSettings) {
            return false;
        }

        if($user->dataSize() > 0){

            $id = (isset($_GET['userId'])) ? $_GET['userId'] : "";
            $firstName = $user->get('firstName');
            $lastName = $user->get('lastName');
            $username = $user->get('username');
            $email = $user->get('email');
            $street = $user->get('street');
            $city = $user->get('city');
            $country = $user->get('country');
            
            // Extreme important keep this hidden element!!!
            echo "
                <input style='display: none' type='text' name='userId' placeholder='First Name' value='$id' require>
            ";

            echo "
                
                <div class='form-group'><label for='text-input'>Name</label><input class='form-control' type='text' name='first-name' value='$firstName'></div>
                <div class='form-group'><label for='password-input'>Surname</label><input class='form-control' type='text' name='last-name' value='$lastName'></div>
                <div class='form-group'><label for='text-input'>Username</label><input class='form-control' type='text' name='username' value='$username'></div>
                <div class='form-group'><label for='password-input'>Password&nbsp;</label><input class='form-control' type='password' name='password'></div>
                <div class='form-group'><label for='text-input'>Password Confirm</label><input class='form-control' type='password' name='confirm-password'></div>
                <div class='form-group'><label for='email-input'>Email&nbsp;</label><input class='form-control' type='email' name='email' value='$email'></div>
                <div class='form-group'><label for='password-input'>Country</label><input class='form-control' type='text' name='country' value='$country'></div>
                <div class='form-group'><label for='text-input'>City</label><input class='form-control' type='text' name='city' value='$city'></div>
                <div class='form-group'><label for='password-input'>Street</label><input class='form-control' type='text' name='street' value='$street'></div>

             ";
            return true;
        }
        return false;

    }
}