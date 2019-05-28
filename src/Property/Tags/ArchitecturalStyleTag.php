<?php
declare(strict_types=1);

namespace RWC\HotPads\Property\Tags;

class ArchitecturalStyleTag extends AbstractFiniteOptionTag
{
    /**
     * Tag type.
     */
    const TYPE = 'ARCHITECTURE_STYLE';

    /**
     * Legal values for this tag.
     */
    const LEGAL_VALUES = [
        'Bungalow',
        'CapeCod',
        'Colonial',
        'Contemporary',
        'Craftsman',
        'French',
        'Georgian',
        'Loft',
        'Modern',
        'Queen AnneVictorian',
        'RanchRambler',
        'SantaFePuebloStyle',
        'Spanish',
        'Split-level',
        'Tudor',
        'Other',
    ];

    /**
     * Returns the tag type.
     *
     * @return string Returns the tag type.
     */
    public function getType(): string
    {
        return self::TYPE;
    }

    /**
     * Returns an array of valid options for this tag.
     *
     * @return string[]
     */
    public function getOptions(): array
    {
        return self::LEGAL_VALUES;
    }
}
