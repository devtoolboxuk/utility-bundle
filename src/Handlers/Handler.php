<?php

namespace devtoolboxuk\utilitybundle\handlers;

class Handler
{

    protected function formatBytes($bytes, $precision = 2)
    {
        $units = ["B", "KB", "MB", "GB", "TB"];

        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);

        $bytes /= (1 << (10 * $pow));

        return round($bytes, $precision) . $units[$pow];
    }

}