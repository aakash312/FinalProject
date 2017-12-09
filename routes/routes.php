
<?php
    
    class routes
{
    public static function getRoutes()
    
{
        
        $route = new route();
       
        $route->http_method = 'GET';
       
        $route->page = 'homepage';
       
        $route->action = 'show';
       
        $route->controller = 'homepageController';
       
        $route->method = 'show';
       
        $routes[] = $route;
       
        $route = new route();
       
        $route->http_method = 'POST';
       
        $route->action = 'create';
       
        $route->page = 'homepage';
       
        $route->controller = 'homepageController';
       
        $route->method = 'create';
       
        $routes[] = $route;
       
        $route = new route();
       
        $route->http_method = 'POST';
       
        $route->action = 'signup';
       
        $route->page = 'accounts';
       
        $route->controller = 'accountsController';
       
        $route->method = 'signup';
       
        $routes[] = $route;
       
        $route = new route();
       
        $route->http_method = 'POST';
       
        $route->action = 'register';
       
        $route->page = 'accounts';
       
        $route->controller = 'accountsController';
       
        $route->method = 'register';
       
        $routes[] = $route;
       
        $route = new route();
       
        $route->http_method = 'GET';
       
        $route->action = 'show';
       
        $route->page = 'tasks';
       
        $route->controller = 'tasksController';
       
        $route->method = 'show';
       
        $routes[] = $route;
       
        $route = new route();
       
        $route->http_method = 'GET';
       
        $route->action = 'all';
       
        $route->page = 'tasks';
       
        $route->controller = 'tasksController';
       
        $route->method = 'all';
       
        $routes[] = $route;
       
        $route = new route();
       
        $route->http_method = 'GET';
       
        $route->action = 'allOneUser';
       
        $route->page = 'tasks';
       
        $route->controller = 'tasksController';
       
        $route->method = 'allOneUser';
       
        $routes[] = $route;
       
        $route = new route();
       
        $route->http_method = 'GET';
       
        $route->action = 'all';
       
        $route->page = 'accounts';
       
        $route->controller = 'accountsController';
       
        $route->method = 'all';
       
        $routes[] = $route;
       
        $route = new route();
       
        $route->http_method = 'GET';
       
        $route->action = 'show';
       
        $route->page = 'accounts';
       
        $route->controller = 'accountsController';
       
        $route->method = 'show';
       
        $routes[] = $route;
       
        $route = new route();
       
        $route->http_method = 'POST';
       
        $route->action = 'login';
       
        $route->page = 'accounts';
       
        $route->controller = 'accountsController';
       
        $route->method = 'login';
       
        $routes[] = $route;
       
        $route = new route();
       
        $route->http_method = 'POST';
       
        $route->action = 'delete';
       
        $route->page = 'tasks';
       
        $route->controller = 'tasksController';
       
        $route->method = 'delete';
       
        $routes[] = $route;
       
        $route = new route();
       
        $route->http_method = 'POST';
       
        $route->action = 'update';
       
        $route->page = 'tasks';
       
        $route->controller = 'tasksController';
       
        $route->method = 'update';
       
        $routes[] = $route;
       
        return $routes;
}
}

    class route

{
  
    public $page;
    
    public $action;
    
    public $method;
    
    public $controller;

}

  

