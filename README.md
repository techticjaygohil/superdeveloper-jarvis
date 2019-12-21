# superdeveloper-jarvis
Creating a demo jarwis package

Laravel 5.3 didn't support auto-registering packages and aliases. You will need to add:

Jarwis\JarwisServiceProvider::class
to your list of providers and:

'Jarwis' => Jarwis\JarwisServiceProvider\Facade::class
to the aliases array, both in config/app.php.
