<!Doctype html>
<html>
    <head>
      <title>File Handling</title>
    </head>
    <body>
        <h2>File Handling in PHP</h2>
<?php
/*

datattypes in php
int,float,double,boolean,char,array, resource

php is loosely typed


resource type file handler
open file
close file
delete file

*/

$action=$_GET["action"];
$myfile=$_GET["pfile"];
$createfile=$_GET["cfile"];
$data=$_GET["datatowrite"];
if($_GET["action"]=="checkfile")
{
    echo"<br> action: ".$_GET["action"]."<br>";
    checkfiledetail($_GET["pfile"]);
}
else if($_GET["action"]=="file_read_contents")
{
    echo"<br> action: ".$_GET["action"]."<br>";
    readfiledetail($_GET["pfile"]);
}
else if($_GET["action"]=="fread")
{
    echo"<br> action: ".$_GET["action"]."<br>";
    readFread($_GET["pfile"]);
}
else if($_GET["action"]=="fgetc")
{
    echo"<br> action: ".$_GET["action"]."<br>";
    readFgetc($_GET["pfile"]);
}
else if($_GET["action"]=="fgets")
{
    echo"<br> action: ".$_GET["action"]."<br>";
    readFgets($_GET["pfile"]);
}
else if($_GET["action"]=="deletefile")
{
    echo"<br> action: ".$_GET["action"]."<br>";
    deleteFile($_GET["pfile"]);
}
else if ($_GET["action"]=="fwrite")
{
    echo"<br> action: ".$_GET["action"]."<br>";
    writeFile($_GET["pfile"],$_GET["datatowrite"]);
}
else if ($_GET["action"]=="fputs")
{
    echo"<br> action: ".$_GET["action"]."<br>";
    swriteFile($_GET["pfile"],$_GET["datatowrite"]);
}
else if ($_GET["action"]=="append")
{
    echo"<br> action: ".$_GET["action"]."<br>";
    appendFile($_GET["pfile"],$_GET["datatowrite"]);
}
else if ($_GET["action"]=="createfile")
{
    echo"<br> action: ".$_GET["action"]."<br>";
    createFile($_GET["cfile"]);
}



function checkfiledetail($myfile)
{
    echo"<br> you have selected ".$myfile."<br>";
    $file="mca.txt";
    
    if(file_exists($myfile))
    {
      echo"file exists <br>";
      if(filesize($myfile)==0)
      {
          echo"file is empty:".filesize($myfile)."<br>";
      }
      else
      {
        echo"file size is:".filesize($myfile)." bytes<br>";
      }
    }
    
    else
    {
        echo"file does not  exists";
    }
}
//checkfile()

function deleteFile($myfile)
{
    if(unlink($myfile))
    {
        echo "<br> file $myfile is deleted ";
    }
    else
    {
        echo "<br> file $myfile cannot be deleted check if file is open";
    }
    //echo"file is deleted <br>";
}//deletefile()

function readfiledetail($myfile)
{
    if(file_exists($myfile) && filesize($myfile)>0)
    {
       $filetoread= fopen($myfile,"r");
       $contents=file_get_contents($myfile);
       echo"<br> file contents of $myfile <hr>"."<pre>".$contents."</pre>";
       fclose($filetoread);
    }
}

function createFile($createfile)
{
    if(!file_exists($createfile))
   {
        if(fopen($createfile,"w"))
    {
     echo "<br> file is created and open for operations <br>";
     fclose(fopen($createfile,"w"));

    }
    else
    {
        echo "<br> error creating file <br>";
    }
}
else
{
    echo "<br> file already exists <br>";
}



}

function readFread($myfile) 
{
    if(file_exists($myfile)&& filesize($myfile)>0)
    {
        $fp=fopen($myfile,"r");
        $contents=fread($fp,filesize($myfile));
        echo "<br><pre> $contents </pre><br>";
        fclose($fp);
    }
    else
    echo"<br>error<br>";
}

function readFgetc($myfile)
{
    if(file_exists($myfile)&& filesize($myfile)>0)
    {
        $fp=fopen($myfile,"r");
        echo "<br><HR><pre>";
        while(!feof($fp))
        {
         echo fgetc($fp);
        }
        fclose($fp);
        echo "<hr></pre>";

        /*
        $contents=fgetc($fp);
        for only showing one character 
        */
    }
    else
    echo"<br>error<br>";
}

function readFgets($myfile)
{
    if(file_exists($myfile)&& filesize($myfile)>0)
    {
        $fp=fopen($myfile,"r");
        echo"<br><hr><pre>";
        while(!feof($fp))
        {
        echo fgets($fp,filesize($myfile));
    }
    echo"<br></pre>";
}
    else
    {
        echo "<br> error opening file <br> ";
    }
}

function writeFile($myfile,$data)
{
    // to write file open in write mode
    // w,r+,w+,x,x+ the + is for write only , append only mode
    // fwrite overwrites a file if file is closed and opened 

        $fp=fopen($myfile,"w");
        fwrite($fp,$data);
        fclose($fp);

}

function swriteFile($myfile,$data)
{
    $fp=fopen($myfile,"w");
    fputs($fp,$data);
    fclose($fp);
}

function appendFile($myfile,$data)
{
    //oprn file to append file
    $fp=fopen($myfile,"a");
    fwrite($fp,$data);
    fclose($fp);
}


?>

<div style="color:red;padding:20px">
<fieldset>
    <legend>File handling in php</legend>
    <form method="get">
        <input type="file" name="pfile" id="" placeholder="submit your file" /> <br>
        <input type="text" name="cfile" id="" placeholder="submit your file name" /> <br>
        <textarea name="datatowrite" style="width: 700px; height:100px;"placeholder="write file data"></textarea>
        <br>
        <input type="submit" name="action" value="checkfile"> 
        <input type="submit" name="action" value="deletefile">
        <input type="submit" name="action" value="createfile">

        <input type="submit" name="action" value="file_read_contents">
        <input type="submit" name="action" value="fread">
        <input type="submit" name="action" value="fgetc">
        <input type="submit" name="action" value="fgets">
        <input type="submit" name="action" value="fwrite">
        <input type="submit" name="action" value="fputs">
        <input type="submit" name="action" value="append">
    </form>
</fieldset>
</div>

    </body>
</html>