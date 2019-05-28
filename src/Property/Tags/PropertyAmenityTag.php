<?php
declare(strict_types=1);

namespace RWC\HotPads\Property\Tags;


use RWC\HotPads\Property\IListingTag;

class PropertyAmenityTag extends AbstractTag implements IListingTag
{
    /**
     * Tag type.
     */
    const TYPE = 'PROPERTY_AMENITY';

    /**
     * Legal values for this tag.
     */
    const LEGAL_VALUES = [
        'BarbecueArea',
        'Basement',
        'BasketBallCourt',
        'BusinessCenter',
        'CableSatellite',
        'ChildCare',
        'ClubDiscount',
        'Concierge',
        'ControlledAccess',
        'Courtyard',
        'Deck',
        'DisabledAccess',
        'Dock',
        'Doorman',
        'Elevator',
        'FencedYard',
        'FitnessCenter',
        'Garden',
        'GatedEntry',
        'GreenHouse',
        'HotTubSpa',
        'HouseKeeping',
        'Intercom',
        'JettedBathTub',
        'Lawn',
        'NightPatrol',
        'OnSiteMaintenance',
        'OnSiteManagement',
        'PackageReceiving',
        'PlayGround',
        'Pong',
        'Pool',
        'Porch',
        'RaquetBallCourt',
        'Sauna',
        'SecuritySystem',
        'Skylight',
        'SportsCourt',
        'SprinklerSystem',
        'SunDeck',
        'TennisCourt',
        'TVLounge',
        'VolleyBallCourt',
        'WetBar',
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
     * Returns true if the value is valid for this tag type.
     *
     * @param string $value The value to test.
     * @return bool Returns true if the value is valid.
     */
    public function isValidValue(string $value) : bool
    {
        return in_array($value, self::LEGAL_VALUES);
    }
}
