<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class AdherentTest extends TestCase
{
    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf(
            Adherent::class,
            new Adherent('Nom','Prénom', new \DateTime())
        );
    }

    public function testCapitalize(): void {

        $adherent = new Adherent('nom','prénom', new \DateTime());

        $this->assertEquals(
            'Nom',
            $adherent->getNom()
        );

        $this->assertEquals(
            'Prénom',
            $adherent->getPrenom()
        );
    }

}