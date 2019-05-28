<?php
declare(strict_types=1);


namespace RWC\HotPads\Property;


class ListingPhoto
{
    /**
     * URL of image. Limited to 255 characters.
     *
     * @var string
     */
    protected $url;

    /**
     * Limited to 30 characters.
     *
     * @var string|null
     */
    protected $label;

    /**
     * Limited to 30 characters.
     *
     * @var string|null
     */
    protected $caption;

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        if (strlen($url) > 255) {
            throw new \InvalidArgumentException('Max length is 255 characters');
        }

        $this->url = $url;
    }

    /**
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * @param string|null $label
     */
    public function setLabel(?string $label): void
    {
        if (strlen($label) > 30) {
            throw new \InvalidArgumentException('Max length is 80 characters');
        }

        $this->label = $label;
    }

    /**
     * @return string|null
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * @param string|null $caption
     */
    public function setCaption(?string $caption): void
    {
        if (strlen($caption) > 30) {
            throw new \InvalidArgumentException('Max length is 80 characters');
        }

        $this->caption = $caption;
    }


}
