<?php
          $img_dir = "images/";
          $images = scandir($img_dir);
           foreach($images as $img)   { 
              if($img === '.' || $img === '..') {
                continue;
              }
            //$fileName = $img_dir
            echo '<a tittle=$img href={$img_dir}{$img}><img class=thumb src={$img_dir}{$img}></a>';
            } 