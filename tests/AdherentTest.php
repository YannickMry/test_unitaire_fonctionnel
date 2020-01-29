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

    public function testAccents(): void {

        $adherent = new Adherent('Lainé','Cécile', new \DateTime());

        $this->assertEquals(
            'Laine',
            $adherent->getNom()
        );

        $this->assertEquals(
            'Cecile',
            $adherent->getPrenom()
        );
    }

    public function testConcatenate(): void {

        $adherent = new Adherent('Lainé','Cécile', new \DateTime('1970-03-27'));

        $this->assertEquals(
            'Cecile Laine 27/03/1970',
            $adherent->getInfo()
        );
        
    }

}