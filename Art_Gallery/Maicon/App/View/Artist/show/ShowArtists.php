<?php

namespace App\View\Artist\show;

use App\Classes\Artist\FieldTable;
use App\Model\Artist\Artists\ArtistLoadArtists;

class ShowArtists {

    public function showYourself($users){

        if (!$users instanceof ArtistLoadArtists) {
            return false;
        }

        if($users->dataSize() > 0){

            $field = new FieldTable();

            $id = $field->id;
            $firstName = $field->firstName;
            $lastName = $field->lastName;
            $website = $field->website;
            $street = $field->street;
            $city = $field->city;
            $country = $field->country;
        
            // Table Header
            echo "
            <table class='table table-hover table-dark'>
            <thead>
                <tr>
                <th scope='col'>Artist Name</th>
                <th scope='col'>Website</th>
                <th scope='col'>Address</th>
                <th scope='col'>Action</th>
                </tr>
            </thead>
            <tbody>

        ";

            // Table Body
            foreach ($users->getAll() as $row) {
            
                echo "
                    <tr>
                        <td>{$row[$firstName]} {$row[$lastName]}</td>
                        <td>{$row[$website]}</td>
                        <td>{$row[$street]} {$row[$city]} {$row[$country]}</td>
                        <td>
                            <a class='btn btn-danger text-white' href='../App/Controller/Artist/Delete.Controller.php?idArtist={$row[$id]}'>
                                Delete
                            </a>
                            <a class='btn btn-warning text-white' href='./edit_artist.php?idArtist={$row[$id]}'>
                                Edit
                            </a>
                        </td>
                    </tr>
                ";
            }
            // The end of the table
            echo "</table>";
            return true;
        }
        return false;
    }
}