<?php declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->in([
        __DIR__ . '/app',
        __DIR__ . '/config',
        __DIR__ . '/database',
        __DIR__ . '/routes',
        __DIR__ . '/tests',
    ]);

$config = new PhpCsFixer\Config();

return $config
    ->setRules([
        '@PSR12' => true,
        'array_syntax' => ['syntax' => 'short'],
        'function_typehint_space' => true,
        'no_unused_imports' => true,
        'no_whitespace_before_comma_in_array' => true,
        'ordered_imports' => true,
        'whitespace_after_comma_in_array' => true,
        'cast_spaces' => ['space' => 'single'],
        'concat_space' => ['spacing' => 'none'],
        'single_quote' => true,
    ])
    ->setUsingCache(false)
    ->setFinder($finder);
