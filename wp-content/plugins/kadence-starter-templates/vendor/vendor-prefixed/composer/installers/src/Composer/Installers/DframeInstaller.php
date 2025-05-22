<?php
/**
 * @license MIT
 *
 * Modified using {@see https://github.com/BrianHenryIE/strauss}.
 */

namespace KadenceWP\KadenceStarterTemplates\Composer\Installers;

class DframeInstaller extends BaseInstaller
{
    /** @var array<string, string> */
    protected $locations = array(
        'module'  => 'modules/{$vendor}/{$name}/',
    );
}
