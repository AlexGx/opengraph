<?php

namespace Fusonic\OpenGraph\Elements;

use Fusonic\OpenGraph\Property;

/**
 * An OpenGraph video element.
 */
class Video extends ElementBase
{
    /**
     * The URL of a video resource associated with the object.
     *
     * @var string
     */
    public $url;

    /**
     * An alternate URL to use if a video resource requires HTTPS.
     *
     * @var string
     */
    public $secureUrl;

    /**
     * The MIME type of a video resource associated with the object.
     *
     * @var type
     */
    public $type;

    /**
     * The width of a video resource associated with the object in pixels.
     *
     * @var int
     */
    public $width;

    /**
     * The height of a video resource associated with the object in pixels.
     *
     * @var int
     */
    public $height;

    /**
     * The URL of a video resource associated with the embedded object.
     *
     * @var string
     */
    public $iframe;
    
    /**
     * @param   string      $url            URL to the video.
     */
    public function __construct($url)
    {
        parent::__construct();

        $this->url = $url;
    }

    /**
     * Gets all properties set on this element.
     *
     * @return  array|Property[]
     */
    public function getProperties()
    {
        $properties = [];

        // URL must precede all other properties
        if ($this->url !== null) {
            $properties[] = new Property(Property::VIDEO_URL, $this->url);
        }

        if ($this->height !== null) {
            $properties[] = new Property(Property::VIDEO_HEIGHT, $this->height);
        }

        if ($this->secureUrl !== null) {
            $properties[] = new Property(Property::VIDEO_SECURE_URL, $this->secureUrl);
        }

        if ($this->type !== null) {
            $properties[] = new Property(Property::VIDEO_TYPE, $this->type);
        }

        if ($this->width !== null) {
            $properties[] = new Property(Property::VIDEO_WIDTH, $this->width);
        }

        if ($this->iframe !== null) {
            $properties[] = new Property(Property::VIDEO_IFRAME, $this->iframe);
        }

        return $properties;
    }
}
