<?php
class Validator
{
	public static function validateForm($fields)
	{
		foreach ($fields as $index => $value) {
			$value = htmlentities(trim($value));
			$fields[$index] = $value;
		}
		return $fields;
	}

	public static function validateImage($file)
	{
		$img_size = $file["size"];
     	if($img_size <= 2097152)
     	{
     		$img_type = $file["type"];
	     	if($img_type == "image/jpeg" || $img_type == "image/png" || $img_type == "image/gif" || $img_type == "image/webp")
	    	{
	    		$img_temporal = $file["tmp_name"];
	    		$img_info = getimagesize($img_temporal);
		    	$img_width = $img_info[0]; 
				$img_height = $img_info[1];
				
					$image = file_get_contents($img_temporal);
					return base64_encode($image);
				
	    	}
	    	else
	    	{
	    		throw new Exception("El formato de la imagen debe ser jpg, png o gif");
	    	}
     	}
     	else
     	{
     		throw new Exception("El tamaño de la imagen debe ser como máximo 2MB");
     	}
	}

		public static function uploadImage($file, $path, $name)
	{
		if(file_exists($path))
		{
			if(move_uploaded_file($file, $path.$name))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}

	public static function deleteImage($path, $name)
	{
		if(file_exists($path.$name))
		{
			if(unlink($path.$name))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}

	public static function validateEmail($email)
	{
		if(filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

		function generarCodigo($longitud) {
		$key = '';
		$pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
		$max = strlen($pattern)-1;
		for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
		return $key;
	}
}	
?>