<?php 

namespace Chay22\Asbak;

use Chay22\Asbak\Asbak;

interface Registry
{

	public function __construct(Asbak $asbak);

	public function get($key);
}