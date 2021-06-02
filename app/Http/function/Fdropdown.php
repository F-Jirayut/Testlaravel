<?php
//mode = format value option (1 = value index , 2 = value html)
function Fdropdown_genArray($data , $class , $name , $id , $selected , $mode) {
    $genClass = ($class=="" ? "" : "class=\"".$class."\"");
    $genName = ($name=="" ? "" : "name=\"".$name."\"");
    $genId = ($id=="" ? "" : "id=\"".$id."\"");
    $html = "<select ".$genClass." ".$genName." ".$genId.">
    ".Fdropdown_genOptionArray($data , $selected , $mode)."
    </select>";
    return $html;
}

function Fdropdown_genOptionArray($data , $selected , $mode){
    $options = "";
    if($mode==1){
        foreach ($data as $index=>$opt){
            $options .= "<option ".($selected==$opt ? "selected" : "")." value=\"".$index."\">".$opt."</option>";
        }
    }
    else if($mode==2){
        foreach ($data as $opt){
            $options .= "<option ".($selected==$opt ? "selected" : "")." value=\"".$opt."\">".$opt."</option>";
        }
    }
    return $options;
}

function Fdropdown_genArrayKey($data , $keyid , $keyname , $class , $name , $id , $selected) {
    $genClass = ($class=="" ? "" : "class=\"".$class."\"");
    $genName = ($name=="" ? "" : "name=\"".$name."\"");
    $genId = ($id=="" ? "" : "id=\"".$id."\"");
    $html = "<select ".$genClass." ".$genName." ".$genId.">
    ".Fdropdown_genOptionArrayKey($data , $keyid , $keyname , $selected)."
    </select>";
    return $html;
}

function Fdropdown_genOptionArrayKey($data , $keyid , $keyname , $selected){
    $options = "";
    foreach ($data as $opt){
        $options .= "<option ".($selected==$opt[$keyid] ? "selected" : "").
        " value=\"".$opt[$keyid]."\">".$opt[$keyname]."</option>";
    }
    return $options;
}

?>
