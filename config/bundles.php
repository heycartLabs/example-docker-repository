<?php

return [
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Symfony\Bundle\TwigBundle\TwigBundle::class => ['all' => true],
    Symfony\Bundle\MonologBundle\MonologBundle::class => ['all' => true],
    Symfony\Bundle\DebugBundle\DebugBundle::class => ['dev' => true],
    HeyCart\Core\Framework\Framework::class => ['all' => true],
    HeyCart\Core\System\System::class => ['all' => true],
    HeyCart\Core\Content\Content::class => ['all' => true],
    HeyCart\Core\Checkout\Checkout::class => ['all' => true],
    HeyCart\Core\Maintenance\Maintenance::class => ['all' => true],
    HeyCart\Core\DevOps\DevOps::class => ['e2e' => true],
    HeyCart\Core\Profiling\Profiling::class => ['all' => true],
    HeyCart\Administration\Administration::class => ['all' => true],
    HeyCart\Elasticsearch\Elasticsearch::class => ['all' => true],
    HeyCart\Storefront\Storefront::class => ['all' => true],
    Pentatrion\ViteBundle\PentatrionViteBundle::class => ['all' => true],
];
