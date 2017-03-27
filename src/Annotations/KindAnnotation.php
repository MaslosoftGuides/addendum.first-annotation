<?php

namespace Maslosoft\Guides\Addendum\Annotations;

use Maslosoft\Addendum\Collections\MetaAnnotation;

class KindAnnotation extends MetaAnnotation
{

	const Ns = __NAMESPACE__;

	public $value = null;

	public function init()
	{
		// Set annotation value to `kind` property
		$this->getEntity()->kind = $this->value;
	}

}
