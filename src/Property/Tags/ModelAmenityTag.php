<?php
declare(strict_types=1);

namespace RWC\HotPads\Property\Tags;

class ModelAmenityTag extends AbstractFiniteOptionTag
{
    /**
     * Tag type.
     */
    const TYPE = 'MODEL_AMENITY';

    /**
     * Legal values for this tag.
     */
    const LEGAL_VALUES = [
        'Dishwasher',
        'Washer',
        'Dryer',
        'Freezer',
        'GarbageDisposal',
        'Microwave',
        'RangeOven',
        'Refrigerator',
        'TrashCompactor',
        'Fireplace',
        'CeilingFan',
        'DoublePaneWindows',
        'Handrails',
        'LargeClosets',
        'MotherInLawUnit',
        'Patio',
        'Balcony',
        'StorageSpace',
        'VaultedCeiling',
        'WindowCoverings',
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
