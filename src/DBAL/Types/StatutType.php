<?php

namespace App\DBAL\Types;
use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

final class StatutType extends AbstractEnumType
{
    public const EN_ATTENTE = 'EN_ATTENTE';
    public const EN_COURS = 'EN_COURS';
    public const OK = 'OK';

    public static $choices = [
        self::EN_ATTENTE => 'En Attente',
        self::EN_COURS => 'En Cours',
        self::OK => 'OK'
    ];
}