<?php

namespace App\View\Artist;

use App\Model\Artist\ArtistEdit;

class ArtistSettings {


    public function showYourself($artist){

        if (!$artist instanceof ArtistEdit) {
            return false;
        }

        if($artist->dataSize() > 0){

            $id = $artist->get('id');
            $firstName = $artist->get('firstName');
            $lastName = $artist->get('lastName');
            $website = $artist->get('website');
            $street = $artist->get('street');
            $city = $artist->get('city');
            $country = $artist->get('country');
            

            // Extreme important keep this hidden element!!!
            echo "
                <input style='display: none' type='text' name='idArtist' placeholder='First Name' value='$id' require>
            ";

            echo "

                <div class='form-group'><label for='text-input'>Name</label><input class='form-control' type='text' name='first-name' value='$firstName'></div>
                <div class='form-group'><label for='password-input'>Surname</label><input class='form-control' type='text' name='last-name' value='$lastName'></div>
                <div class='form-group'><label for='text-input'>Website&nbsp;</label><input class='form-control' type='text' name='website' value='$website'></div>
                <div class='form-group'><label for='password-input'>Country</label><input class='form-control' type='text' name='country'value='$country'></div>
                <div class='form-group'><label for='text-input'>City</label><input class='form-control' type='text' name='city' value='$city'></div>
                <div class='form-group'><label for='password-input'>Street</label><input class='form-control' type='text' name='street' value='$street'></div>
             ";
            return true;
        }
        return false;

    }
}