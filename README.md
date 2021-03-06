<h1 align="center"> laravel-unicomponent </h1>

<p align="center">
<a href="https://github.styleci.io/repos/152551123"><img src="https://github.styleci.io/repos/152551123/shield?branch=master" alt="StyleCI"></a> 
<a href="https://travis-ci.org/reallyli/laravel-unicomponent"><img src="https://travis-ci.org/reallyli/laravel-unicomponent.svg?branch=master" alt="TravisCi" /></a> 
<a href="https://scrutinizer-ci.com/g/reallyli/laravel-unicomponent"><img src="https://scrutinizer-ci.com/g/reallyli/laravel-unicomponent/badges/quality-score.png?b=master" alt="ScrutinizerCi" /></a>
</p>


## Installing

```shell
$ composer require reallyli/laravel-unicomponent -vvv
```

## Usage

```shell
$ app('unicomponent')->{componetName}()
```
Pre-set Log Formatter

```shell
$ app('unicomponent')->logFormatter()
```

Pusher Instance

```shell
$ app('unicomponent')->pusher
```

Pusher Trigger

```shell
$ app('unicomponent')->pusher->trigger($channels, string $eventName, array $data, array $params = [])
```

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/reallyli/laravel-unicomponent/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/reallyli/laravel-unicomponent/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT
