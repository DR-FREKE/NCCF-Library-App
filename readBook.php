<?php 

$directory = 'ebooks';

if($open_directory = opendir($directory.'/'))
{
	while($read_dir = readdir($open_directory))
	{
		if($read_dir != '.' && $read_dir != '..')
		{
			//echo "<a href = '".$directory."/".$read_dir."'>".$read_dir."<br>";
            $path = $directory.'/'.$read_dir;
            $json_response[] = array('path'=>$path, 'name'=>$read_dir);
		}
	}
    echo json_encode($json_response);
}
?>