
    <?php
    $action = $_POST['action'];
    $html = "";
if($action==1){


    $html .="
    <div class=container>
    
    <input type=text >Date of birth :</input>
    <input type=text> age :</input>
    <input type=text>contact :</input>
    <button onclick=loaddata()>Next</button>
    
    </div>
    
    ";
}else 
if($action==2){

  
    $html .="
    <div class=container>
    
    <input type=text >address :</input>
    <input type=text> caste :</input>
    <input type=text>fax :</input>
    <button onclick=loaddata()>Next</button>
    
    </div>
    
    ";
}
    echo $html;
    ?>
