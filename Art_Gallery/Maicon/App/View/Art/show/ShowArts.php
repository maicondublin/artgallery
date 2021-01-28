<?php

namespace App\View\Art\show;

use App\Classes\Art\FieldTable;
use App\Classes\Favorite\FieldTable as FavoriteFieldTable;
use App\Classes\Like\FieldTable as LikeFieldTable;
use App\Model\Art\Features\FeaturesModel;

class ShowArts {

    public function showYourself($features){

        if (!$features instanceof FeaturesModel) {
            return false;
        }

        $arts = $features->art;
        $likeField = new LikeFieldTable();
        $likeArtId = $likeField->artId;
        // New Features
        // ================= LIKE FUNCTIONALITY ===================
        $likes = $features->like;
        $likeData = $likes->getData();
        // $array = array_column($likes->getData(), $likeArtId);
        // $likeList = implode(' , ', $array);
        // =========================================================

        $favoriteField = new FavoriteFieldTable();
        $favoriteArtId = $favoriteField->artId;

        $favorites = $features->favorite;

        $favoriteData = $favorites->getAll();

        if($arts->dataSize() > 0){

            $field = new FieldTable();

            $id = $field->id;
            $name = $field->name;
            $type = $field->type;
            // new feature
            $artistId = $field->author;
        

            // Table Body
            foreach ($arts->getAll() as $row) {
                // $hasLike = ((strpos($likeList, $row[$id]) !== false) ? "icon-like-blue": "");

                /**
                 * Title: PHP multidimensional array search by value
                 * Author: StackOverflow
                 * Author: Rahul
                 * Availability: https://stackoverflow.com/questions/6661530/php-multidimensional-array-search-by-value
                 */
                // ----------- Checks if a piece of art have a like ----------------
                $hasLike = (array_search($row[$id], array_column($likeData, $likeArtId)) !== false) ? "icon-like-blue": "";

                $hasFavorite = (array_search($row[$id], array_column($favoriteData, $favoriteArtId)) !== false) ? "icon-like-blue": "";
                // -----------------------------------------------------------------
                echo "
                        <div style='float:left;width:content-fit;overflow:hiden;>
                        <div class='container'>
                            
                                <div class='text-center border rounded-0 shadow-sm profile-box' style='width: 400px; min-height:460px;background-color: #ffffff;margin: 5px;'>
                                    <div style='height: 80px;'>
                                        <div class='image' style='margin-top:20px;'>
                                            <img src='assets/img/9d3353bff9537706e22623c9bb628fb0.jpg' width='380' alt='sample52'/>
                                        </div>
                                <h4 class='text-center' style='margin:10px;'>{$row[$name]}</h4>
                                <p style='font-size: 12px;'>{$row[$type]}</p>
                                <p style='font-size: 12px;'>{$row[$artistId]}</p>
                                <a href=''>
                                <img id='{$row[$id]}' class='favorite-Art download-icon icon-like $hasFavorite' src='../resources/Like_Button/icon/star.svg' alt='Like'>
                                </a>
                                <a href=''>
                                    <img id='{$row[$id]}' style='width:25px;' class='like-Art download-icon icon-like $hasLike' src='../resources/Like_Button/icon/thumb-up-button.svg' alt='Like'>
                                </a>
                            </div>
                        </div>  
                    </div>
                </div>

                ";
            }
    
         
            return true;
        }
        return false;
    }
}