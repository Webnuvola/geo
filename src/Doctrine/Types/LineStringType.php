<?php

namespace Brick\Doctrine\Types\Geometry;

use Brick\Geo\Proxy\LineStringProxy;

/**
 * Doctrine type for LineString.
 */
class LineStringType extends GeometryType
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'LineString';
    }

    /**
     * {@inheritdoc}
     */
    protected function createGeometryProxy($wkb)
    {
        return new LineStringProxy($wkb, true);
    }
}
