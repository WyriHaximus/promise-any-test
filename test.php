<?php

declare(strict_types=1);

use function React\Promise\any;
use function React\Promise\reject;
use function React\Promise\resolve;

any([
    reject(new RuntimeException('Oops')),
    resolve(true),
])->then(
    static function () {
        echo 'Fulfilled:', PHP_EOL;
        var_export(func_get_args());
    },
    static function () {
        echo 'Rejected:', PHP_EOL;
        var_export(func_get_args());
    }
);
