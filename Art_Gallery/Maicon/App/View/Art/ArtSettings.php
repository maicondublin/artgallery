<?php

namespace App\View\Art;

use App\Classes\Artist\FieldTable;
use App\Model\Art\ArtEdit;
use App\Model\Artist\Artists\ArtistLoadArtists;

class ArtSettings {


    public function showYourself($features){

        $art = $features->art;
        $artists = $features->artist;
        $artistNames = array();

        if (!$art instanceof ArtEdit) {
            return false;
        }

        if($artists instanceof ArtistLoadArtists){
            $artistNames = $artists->getAll();
        }

        if($art->dataSize() > 0){

            $id = $art->get('id');
            $name = $art->get('name');
            $type = $art->get('type');
            // $artArtistId = $art->get('artistId');

            $artistField = new FieldTable();
            $artistId = $artistField->id;
            $artistFirstName = $artistField->firstName;
            $artistLastName = $artistField->lastName;
            
            // Extreme important keep this hidden element!!!
            echo "
                <input style='display: none' type='text' name='idArt' placeholder='First Name' value='$id' require>
            ";

            echo "
                <div class='form-group'><label for='text-input'>Art Name</label><input class='form-control' type='text' name='name' value='$name'></div>
                <div class='form-group'><label for='password-input'>Type</label><input class='form-control' type='text' name='type' value='$type'></div>
             ";

             echo "</label><select class='field form-group' name='artistId' style='padding:5px;'>";

            foreach ($artistNames as $row) {
                echo "<option value='{$row[$artistId]}'>{$row[$artistFirstName]} {$row[$artistLastName]}</option>";
            }

            echo "</select>";

            return true;
        }
        return false;

    }
}