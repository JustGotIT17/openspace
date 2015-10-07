<?php

namespace App\Providers;
/**
* 
*/
class ConfigServiceProvider
{
	public static $url_sensors_devices = "http://weather.asti.dost.gov.ph/home/index.php/api/devices";
	public static $url_sensors_data = "http://weather.asti.dost.gov.ph/home/index.php/api/data";
	public static $sensor_type_id_rain = [1,2,3,6];
	public static $sensor_type_id_waterlevel = [3,4,6];
	public static $sensor_type_id_vaisala = [3,4,6];
	
	function __construct()
	{
		# code...
		
	}

}