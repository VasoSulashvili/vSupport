<?php

declare(strict_types=1);

namespace vSupport\Traits;

use vSupport\Enums\Active;

trait HasActive
{
    public function scopeActive($query, Active $active = null)
    {
        if ($active === null) {
            return $query;
        }

        return $query->where('active', $active->value);
    }
}
