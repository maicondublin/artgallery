<?php

namespace App\View\Art\show;

use App\Classes\Art\FieldTable;
use App\Model\Art\Arts\ArtLoadArts;

class ShowArtsPanel {

    public function showYourself($arts){

        if (!$arts instanceof ArtLoadArts) {
            return false;
        }

        if($arts->dataSize() > 0){

            $field = new FieldTable();

            $id = $field->id;
            $name = $field->name;
            $type = $field->type;
            // new feature
            $artistId = $field->author;
        
            // Table Header
            echo "

            ";

            // Table Body
            foreach ($arts->getAll() as $row) {
            
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
                                
                                <a style='color:red;' href='../App/Controller/Art/Delete.Controller.php?idArt={$row[$id]}'>
                                    Delete
                                </a>
                                <a class='btn-edit' href='./edit_art.php?idArt={$row[$id]}'>
                                    Edit
                                </a>
                            </div>
                        </div>  
                    
                </div>
            </div>

                ";
            }
            // The end of the table
            echo "";
            return true;
        }
        return false;
    }
}