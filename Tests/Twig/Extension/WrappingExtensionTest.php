<?php

/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\CoreBundle\Tests\Twig\Extension;

use Sonata\CoreBundle\Twig\Extension\WrappingExtension;


class WrappingExtensionTest extends \PHPUnit_Framework_TestCase
{
    public function testGetName()
    {
        $extension = new WrappingExtension(true);
        $this->assertEquals('sonata_core_wrapping', $extension->getName());
    }

    public function testGetGlobals()
    {
        $extension = new WrappingExtension(true);

        $this->assertArrayHasKey(
            'wrap_fields_with_addons',
            $globals = $extension->getGlobals()
        );
        $this->assertTrue($globals['wrap_fields_with_addons']);

        $extension = new WrappingExtension(false);

        $this->assertArrayHasKey(
            'wrap_fields_with_addons',
            $globals = $extension->getGlobals()
        );
        $this->assertFalse($globals['wrap_fields_with_addons']);
    }
}
