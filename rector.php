<?php

use Rector\CodeQuality\Rector\Empty_\SimplifyEmptyCheckOnEmptyArrayRector;
use Rector\CodeQuality\Rector\FuncCall\SimplifyRegexPatternRector;
use Rector\CodeQuality\Rector\If_\ExplicitBoolCompareRector;
use Rector\CodeQuality\Rector\Ternary\SwitchNegatedTernaryRector;
use Rector\CodingStyle\Rector\Encapsed\EncapsedStringsToSprintfRector;
use Rector\CodingStyle\Rector\If_\NullableCompareToNullRector;
use Rector\CodingStyle\Rector\Stmt\NewlineAfterStatementRector;
use Rector\Config\RectorConfig;
use Rector\DeadCode\Rector\Property\RemoveUnusedPrivatePropertyRector;
use Rector\DeadCode\Rector\PropertyProperty\RemoveNullPropertyInitializationRector;
use Rector\EarlyReturn\Rector\Return_\ReturnBinaryOrToEarlyReturnRector;
use Rector\Php80\Rector\ClassMethod\AddParamBasedOnParentClassMethodRector;
use Rector\Strict\Rector\Empty_\DisallowedEmptyRuleFixerRector;

/**
 * https://getrector.com/find-rule
 *
 *  ->withDeadCodeLevel(49)
 *  ->withTypeCoverageLevel(57)
 *  ->withCodeQualityLevel(69)
 *  ->withCodingStyleLevel(29)
 *  ->withRules([])
*/

const ANALYSIS_PATHS = [
    __DIR__ . '/app/',
    __DIR__ . '/config/',
    __DIR__ . '/database/',
    __DIR__ . '/routes/',
];
const LIVEWIRE_PATH = __DIR__ . '/app/Livewire/';

return RectorConfig::configure()
    ->withPaths(ANALYSIS_PATHS)
    ->withParallel()
    ->withSkip([
        # Livewire specific
        RemoveUnusedPrivatePropertyRector::class => LIVEWIRE_PATH,
        RemoveNullPropertyInitializationRector::class => LIVEWIRE_PATH,

        # PHPSets
        AddParamBasedOnParentClassMethodRector::class => ANALYSIS_PATHS,

        # Code quality
        SimplifyEmptyCheckOnEmptyArrayRector::class => ANALYSIS_PATHS,
        DisallowedEmptyRuleFixerRector::class => ANALYSIS_PATHS,
        ExplicitBoolCompareRector::class => ANALYSIS_PATHS,
        SimplifyRegexPatternRector::class => ANALYSIS_PATHS,
        SwitchNegatedTernaryRector::class => ANALYSIS_PATHS,

        # Coding style
        EncapsedStringsToSprintfRector::class => ANALYSIS_PATHS,
        NewlineAfterStatementRector::class => ANALYSIS_PATHS,
        NullableCompareToNullRector::class => ANALYSIS_PATHS,

        # Early return
        ReturnBinaryOrToEarlyReturnRector::class => ANALYSIS_PATHS,
    ])
    ->withPhpSets()
    ->withPreparedSets(
        deadCode: true,
        codeQuality: true,
        codingStyle: true,
        typeDeclarations: true,
        privatization: true,
        instanceOf: true,
        earlyReturn: true,
        carbon: true,
    );
