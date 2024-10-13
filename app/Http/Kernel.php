protected $routeMiddleware = [
  'auth' => \App\Http\Middleware\Authenticate::class,
  'guest' => \App\Http\Middleware\UserAuthenticated::class,  
];
