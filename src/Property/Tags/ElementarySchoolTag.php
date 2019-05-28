<?php
declare(strict_types=1);


namespace RWC\HotPads\Property\Tags;


class ElementarySchoolTag extends AbstractStringTag
{
    const TYPE = 'ELEMENTARY_SCHOOL';
    
    /**
     * Returns the tag type.
     *
     * @return string Returns the tag type.
     */
    public function getType(): string
    {
        return self::TYPE;
    }
}
