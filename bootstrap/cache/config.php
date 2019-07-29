<?php return array (
  'app' => 
  array (
    'name' => 'Laravel',
    'env' => 'local',
    'debug' => false,
    'url' => 'http://localhost',
    'timezone' => 'UTC',
    'locale' => 'es',
    'fallback_locale' => 'es',
    'key' => 'base64:I022/ANpSNegCn+dA/2i29rlr/tMe7udO2UriDqizEQ=',
    'cipher' => 'AES-256-CBC',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'App\\Providers\\AppServiceProvider',
      23 => 'App\\Providers\\AuthServiceProvider',
      24 => 'App\\Providers\\BroadcastServiceProvider',
      25 => 'App\\Providers\\EventServiceProvider',
      26 => 'App\\Providers\\RouteServiceProvider',
      27 => 'SocialiteProviders\\Manager\\ServiceProvider',
      28 => 'SocialiteProviders\\Generators\\GeneratorsServiceProvider',
      29 => 'Collective\\Html\\HtmlServiceProvider',
      30 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      31 => 'App\\Providers\\MacroServiceProvider',
      32 => 'jeremykenedy\\LaravelRoles\\RolesServiceProvider',
      33 => 'App\\Providers\\ComposerServiceProvider',
      34 => 'Creativeorange\\Gravatar\\GravatarServiceProvider',
      35 => 'Intervention\\Image\\ImageServiceProvider',
      36 => 'App\\Providers\\LocalEnvironmentServiceProvider',
      37 => 'Rap2hpoutre\\LaravelLogViewer\\LaravelLogViewerServiceProvider',
      38 => 'jeremykenedy\\laravelexceptionnotifier\\LaravelExceptionNotifier',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Form' => 'Collective\\Html\\FormFacade',
      'HTML' => 'Collective\\Html\\HtmlFacade',
      'Socialite' => 'Laravel\\Socialite\\Facades\\Socialite',
      'Input' => 'Illuminate\\Support\\Facades\\Input',
      'Gravatar' => 'Creativeorange\\Gravatar\\Facades\\Gravatar',
      'Image' => 'Intervention\\Image\\Facades\\Image',
      'Uuid' => 'Webpatser\\Uuid\\Uuid',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'token',
        'provider' => 'users',
      ),
      'user' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'administrator' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
      ),
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
          'cluster' => '',
          'encrypted' => true,
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '/Applications/XAMPP/xamppfiles/htdocs/dowow/storage/framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
    ),
    'prefix' => 'laravel',
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'database' => 'laravel_material_2',
        'prefix' => '',
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'laravel_material_2',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'strict' => true,
        'engine' => NULL,
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'laravel_material_2',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'host' => '127.0.0.1',
        'database' => 'laravel_material_2',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'default' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 0,
      ),
    ),
  ),
  'debugbar' => 
  array (
    'enabled' => NULL,
    'except' => 
    array (
      0 => 'telescope*',
    ),
    'storage' => 
    array (
      'enabled' => true,
      'driver' => 'file',
      'path' => '/Applications/XAMPP/xamppfiles/htdocs/dowow/storage/debugbar',
      'connection' => NULL,
      'provider' => '',
    ),
    'include_vendors' => true,
    'capture_ajax' => true,
    'add_ajax_timing' => false,
    'error_handler' => false,
    'clockwork' => false,
    'collectors' => 
    array (
      'phpinfo' => true,
      'messages' => true,
      'time' => true,
      'memory' => true,
      'exceptions' => true,
      'log' => true,
      'db' => true,
      'views' => true,
      'route' => true,
      'auth' => true,
      'gate' => true,
      'session' => true,
      'symfony_request' => true,
      'mail' => true,
      'laravel' => false,
      'events' => false,
      'default_request' => false,
      'logs' => false,
      'files' => false,
      'config' => false,
      'cache' => false,
    ),
    'options' => 
    array (
      'auth' => 
      array (
        'show_name' => true,
      ),
      'db' => 
      array (
        'with_params' => true,
        'backtrace' => true,
        'timeline' => false,
        'explain' => 
        array (
          'enabled' => false,
          'types' => 
          array (
            0 => 'SELECT',
          ),
        ),
        'hints' => true,
      ),
      'mail' => 
      array (
        'full_log' => false,
      ),
      'views' => 
      array (
        'data' => false,
      ),
      'route' => 
      array (
        'label' => true,
      ),
      'logs' => 
      array (
        'file' => NULL,
      ),
      'cache' => 
      array (
        'values' => true,
      ),
    ),
    'inject' => true,
    'route_prefix' => '_debugbar',
    'route_domain' => NULL,
    'enabled_environment' => 'local',
  ),
  'exceptions' => 
  array (
    'emailExceptionEnabled' => false,
    'emailExceptionEnabledDefault' => true,
    'emailExceptionFrom' => 'email@email.com',
    'emailExceptionFromDefault' => 'email@email.com',
    'emailExceptionsTo' => 'email1@gmail.com, email2@gmail.com',
    'emailExceptionsToDefault' => 'email@email.com',
    'emailExceptionCCto' => '',
    'emailExceptionCCtoDefault' => 
    array (
    ),
    'emailExceptionBCCto' => '',
    'emailExceptionBCCtoDefault' => 
    array (
    ),
    'emailExceptionSubject' => '',
    'emailExceptionSubjectDefault' => 'Error on local',
    'emailExceptionView' => 'emails.exception',
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '/Applications/XAMPP/xamppfiles/htdocs/dowow/storage/app',
      ),
      'ftp' => 
      array (
        'driver' => 'ftp',
        'host' => 'ftp.example.com',
        'username' => 'your-username',
        'password' => 'your-password',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => '/Applications/XAMPP/xamppfiles/htdocs/dowow/storage/app/public',
        'url' => 'http://localhost/storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
      ),
    ),
  ),
  'gravatar' => 
  array (
    'default' => 
    array (
      'size' => '80',
      'fallback' => 'http://c1940652.r52.cf0.rackcdn.com/51ce28d0fb4f442061000000/Screen-Shot-2013-06-28-at-5.22.23-PM.png',
      'secure' => false,
      'maximumRating' => 'g',
      'forceDefault' => false,
      'forceExtension' => 'jpg',
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => '/Applications/XAMPP/xamppfiles/htdocs/dowow/storage/logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => '/Applications/XAMPP/xamppfiles/htdocs/dowow/storage/logs/laravel.log',
        'level' => 'debug',
        'days' => 7,
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
    ),
  ),
  'mail' => 
  array (
    'driver' => 'smtp',
    'host' => 'smtp.gmail.com',
    'port' => '587',
    'from' => 
    array (
      'address' => 'urbadigital@gmail.com',
      'name' => 'DoWOW!',
    ),
    'encryption' => 'tls',
    'username' => 'urbadigital@gmail.com',
    'password' => 'kinde2018',
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => '/Applications/XAMPP/xamppfiles/htdocs/dowow/resources/views/vendor/mail',
      ),
    ),
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => 'your-public-key',
        'secret' => 'your-secret-key',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'social' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'social',
        'expire' => 60,
      ),
    ),
    'failed' => 
    array (
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'roles' => 
  array (
    'connection' => NULL,
    'separator' => '.',
    'models' => 
    array (
      'role' => 'jeremykenedy\\LaravelRoles\\Models\\Role',
      'permission' => 'jeremykenedy\\LaravelRoles\\Models\\Permission',
    ),
    'pretend' => 
    array (
      'enabled' => false,
      'options' => 
      array (
        'hasRole' => true,
        'hasPermission' => true,
        'allowed' => true,
      ),
    ),
    'defaultUserModel' => 'App\\Models\\User',
    'defaultSeeds' => 
    array (
      'PermissionsTableSeeder' => true,
      'RolesTableSeeder' => true,
      'ConnectRelationshipsSeeder' => true,
      'UsersTableSeeder' => false,
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
    'sparkpost' => 
    array (
      'secret' => NULL,
    ),
    'stripe' => 
    array (
      'model' => 'App\\Models\\User',
      'key' => NULL,
      'secret' => NULL,
    ),
    'facebook' => 
    array (
      'client_id' => 'YOURFACEBOOKidHERE',
      'client_secret' => 'YOURFACEBOOKsecretHERE',
      'redirect' => 'http://yourwebsiteURLhere.com/social/handle/facebook',
    ),
    'twitter' => 
    array (
      'client_id' => 'YOURTWITTERidHERE',
      'client_secret' => 'YOURTWITTERkeyHERE',
      'redirect' => 'http://yourwebsiteURLhere.com/social/handle/twitter',
    ),
    'google' => 
    array (
      'client_id' => 'YOURGOOGLEPLUSidHERE',
      'client_secret' => 'YOURGOOGLEPLUSsecretHERE',
      'redirect' => 'http://yourwebsiteURLhere.com/social/handle/google',
    ),
    'github' => 
    array (
      'client_id' => 'YOURIDHERE',
      'client_secret' => 'YOURSECRETHERE',
      'redirect' => NULL,
    ),
    'youtube' => 
    array (
      'client_id' => 'YOURKEYHERE',
      'client_secret' => 'YOURSECRETHERE',
      'redirect' => 'https://larablog.io/social/handle/youtube',
    ),
    'twitch' => 
    array (
      'client_id' => 'YOURKEYHERE',
      'client_secret' => 'YOURSECRETHERE',
      'redirect' => 'http://laravel-authentication.local/social/handle/twitch',
    ),
    'instagram' => 
    array (
      'client_id' => 'YOURKEYHERE',
      'client_secret' => 'YOURSECRETHERE',
      'redirect' => 'http://laravel-authentication.local/social/handle/instagram',
    ),
    '37signals' => 
    array (
      'client_id' => 'YOURKEYHERE',
      'client_secret' => 'YOURSECRETHERE',
      'redirect' => 'http://laravel-authentication.local/social/handle/37signals',
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => 120,
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => '/Applications/XAMPP/xamppfiles/htdocs/dowow/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'laravel_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => false,
    'http_only' => true,
    'same_site' => NULL,
  ),
  'settings' => 
  array (
    'app_project_version' => NULL,
    'activation' => true,
    'timePeriod' => '24',
    'maxAttempts' => '3',
    'nullIpAddress' => '0.0.0.0',
    'restoreUserEncType' => 'AES-256-ECB',
    'restoreUserCutoff' => '31',
    'userListPaginationSize' => 50,
    'restoreKey' => 'sup3rS3cr3tR35t0r3K3y21!',
    'reCaptchStatus' => true,
    'reCaptchSite' => 'YOURGOOGLECAPTCHAsitekeyHERE',
    'reCaptchSecret' => 'YOURGOOGLECAPTCHAsecretHERE',
    'googleMapsAPIStatus' => false,
    'googleMapsAPIKey' => 'YOURGOOGLEMAPSkeyHERE',
    'dropZoneJsCDN' => 'https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js',
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/dowow/resources/views',
    ),
    'compiled' => '/Applications/XAMPP/xamppfiles/htdocs/dowow/storage/framework/views',
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'laravelexceptionnotifier' => 
  array (
    'emailExceptionEnabled' => false,
    'emailExceptionEnabledDefault' => true,
    'emailExceptionFrom' => 'email@email.com',
    'emailExceptionFromDefault' => 'email@email.com',
    'emailExceptionsTo' => 'email1@gmail.com, email2@gmail.com',
    'emailExceptionsToDefault' => 'email@email.com',
    'emailExceptionCCto' => '',
    'emailExceptionCCtoDefault' => 
    array (
    ),
    'emailExceptionBCCto' => '',
    'emailExceptionBCCtoDefault' => 
    array (
    ),
    'emailExceptionSubject' => '',
    'emailExceptionSubjectDefault' => 'Error on local',
    'emailExceptionView' => 'emails.exception',
  ),
  'trustedproxy' => 
  array (
    'proxies' => NULL,
    'headers' => 30,
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'dont_alias' => 
    array (
    ),
  ),
);
