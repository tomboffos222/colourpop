<?php 
ini_set('display_errors',1);
error_reporting(E_ALL);

/**
 * 
 */
class Router
{
	private $routes;
	public function __construct()
	{
		$routesPath = ROOT. '/Routes.php';
		$this ->routes = include($routesPath);
	}
	
	public function run()
	{
		if(!empty($_SERVER['REQUEST_URI'])){
			$uri  =trim($_SERVER['REQUEST_URI'],'/');
		}
	
		foreach ($this->routes as $uriPattern => $path) {
			if(preg_match("~$uriPattern~", $uri)){
				$internalRoute = preg_replace("~$uriPattern~",$path,$uri);
				$segments = explode('/', $internalRoute);
				
				$controllerName = array_shift($segments);

				$controllerName = array_shift($segments).'Controller';

				$controllerName = ucfirst($controllerName);

				

				$actionName = 'action'.ucfirst(array_shift($segments));
				$parametrs = $segments;	
			
				$controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
				if(file_exists($controllerFile)){
					include_once($controllerFile);
				}
				
				$controllerObject = new $controllerName;
				
				$result = call_user_func_array(array($controllerObject,$actionName),$parametrs);

				if($result != null){
					break;
				}
			
			}
			# code...
		}

	}

}


 ?>