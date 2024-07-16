<?php

if (!function_exists('theme')) {
    /**
     * Generate HTML link tag for CSS asset.
     *
     * @param string $path Path to the CSS file relative to the assets directory.
     * @param string $version Optional version query parameter to prevent caching issues.
     * @return string
     */
    function theme(string $path): string
    {
        $assetPath = base_url('public/assets/' . $path);
        return $assetPath;
    }
}
