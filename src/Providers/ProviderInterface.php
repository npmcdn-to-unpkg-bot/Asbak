<?php
/**
 * Collection (Provider) class interface.
 *
 * @package Asbak
 * @author Cahyadi Nugraha <cnu@protonmail.com>
 * @link https://github.com/chay22/Asbak Github page
 * @license http://github.com/chay22/Asbak/LICENSE MIT LICENSE
 */
namespace Chay22\Asbak\Providers;

interface ProviderInterface
{
    public function get($key);
}
