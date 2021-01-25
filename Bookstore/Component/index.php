<?php
     function inputEle($icon,$placehoulder,$name,$value){
         $ele="
            <div class=\"input-group mb-3\">
                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text text-white bg-dark\" id=\"basic-addon1\">$icon</span>
                </div>
                <input type=\"text\" class=\"form-control\" name='$name' value='$value' placeholder='$placehoulder' aria-label=\"Username\" aria-describedby=\"basic-addon1\">
            </div>
         ";

        echo  $ele;
     }

     function buttonEle($name,$text,$styleclass,$btnid){
      $ele="
        <button name='$name' class='$styleclass' id='$btnid' >$text</button>
      ";   
      echo $ele;
     }