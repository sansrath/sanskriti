<?php

include("connection.php");


function isImage($images)
{
	$ext = substr(strrchr($images, '.'), 1);	
	
	if($ext <> "")
	{
		$ext = strtolower($ext);
		switch($ext)
		{
			case 'kutch.jpg': return true;
			case 'jpeg': return true;
			case 'png': return true;
			case 'psd': return true;
			case 'bmp': return true;
			case 'tiff': return true;
			case 'jp2': return true;
			case 'iff': return true;
			case 'ico': return true;
			default: return false;
		}
	}
	else
		 return false;
	
}

function ListMyFiles($dir,$MySearchFile) 
{
	    if($dh = opendir($dir)) 
	   {
		$files = Array();
		$inner_files = Array();

		while($file = readdir($dh)) 
		{
			    if($file != "." && $file != ".." && $file[0] != '.') 
			    {
					if(is_dir($dir . "/" . $file)) 
					{
						
					    $inner_files = ListMyFiles($dir . "/" . $file,$MySearchFile);
					    if(is_array($inner_files)) 
						$files = array_merge($files, $inner_files); 
					    
					} 
					else 
					{
						
						if($MySearchFile == "")
						{
							if(isImage($file))
							{
								array_push($files, $dir . "/" . $file);
							}
						}
						else if ( strstr( $file,$MySearchFile ) )
						{
							if(isImage($file))
							{
								array_push($files, $dir . "/" . $file);
							}
						}
					}
			    }
		}

		closedir($dh);
		return $files;
	    }
}


//NOTE : if u don't want to search by keywords plesae keep this field blank
$MySearchFile = "test";

foreach(ListMyFiles('includes/',$MySearchFile) as $images)
{
    
    echo "<br>".$images;
    
}  

?>