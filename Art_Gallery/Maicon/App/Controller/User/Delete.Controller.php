<?php

namespace App\Controller\User;

use App\Classes\Favorite\FieldTable as FavoriteFieldTable;
use App\Classes\Like\FieldTable as LikeFieldTable;
use App\Classes\User\FieldTable;
use App\Model\Art\Favorite\ArtLoadFavorite;
use App\Model\Art\Like\ArtLike;
use App\Model\User\UserDelete;

include_once('../../includes/session.php');
include('../../../autoloader.php');
// session_start();

if (isset($_SESSION['user-logged']) AND isset($_SESSION['permission'])) {

    $admin = FieldTable::Admin;
    $likeField = new LikeFieldTable();
    $favoriteField = new FavoriteFieldTable();

    if($_SESSION['permission'] == $admin){

        $id = (isset($_GET['userId'])) ? $_GET['userId'] : 0;

        if(empty($id)){
            header("Location: ../../../public/accounts.php");
        } else {

           
            if(!empty($likeField->table)){
                $like = new ArtLike();
                $like->dislikeAllByUser($id);

                
            }

            if(!empty($favoriteField->table)){
                $favorite = new ArtLoadFavorite();
                $favorite->removeAllByUser($id);

               
            }



            $delete = new UserDelete();

            if($delete->setId($id)->deleteRecord() < 0){
                header("Location: ../../../public/accounts.php?usererror=inexistent");
            } else {
                header("Location: ../../../public/accounts.php?delete=successfully");
            }
        }
    }

} else {
    header("location: ../../../public/accounts.php");
    exit();
}