<?php

/*
 * This file is part of the Ivory Google Map package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Ivory\GoogleMap\Exception;

use Ivory\GoogleMap\Events\MouseEvent,
    Ivory\GoogleMap\Overlays\Animation;

/**
 * Overlay exception.
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
class OverlayException extends Exception
{
    /**
     * Gets the "INVALID CIRCLE CENTER" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID CIRCLE CENTER" exception.
     */
    static public function invalidCircleCenter()
    {
        return new static(sprintf('%s'.PHP_EOL.'%s'.PHP_EOL.'%s'.PHP_EOL.'%s',
            'The center setter arguments is invalid.',
            'The available prototypes are :',
            ' - function setCenter(Ivory\GoogleMap\Base\Coordinate $center)',
            ' - function setCenter(double $latitude, double $longitude, boolean $noWrap = true)'
        ));
    }

    /**
     * Gets the "INVALID CIRCLE RADIUS" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID CIRCLE RADIUS" exception.
     */
    static public function invalidCircleRadius()
    {
        return new static('The radius of a circle must be a numeric value.');
    }

    /**
     * Gets the "INVALID ENCODED POLYLINE VALUE" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID ENCODED POLYLINE VALUE" exception.
     */
    static public function invalidEncodedPolylineValue()
    {
        return new static('The encoded polyline value must be a string value.');
    }

    /**
     * Gets the "INVALID GROUND OVERLAY BOUND COORDINATES" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID GROUND OVERLAY BOUND COORDINATES" exception.
     */
    static public function invalidGroundOverlayBoundCoordinates()
    {
        return new static('A ground overlay bound must have a south west & a north east coordinate.');
    }

    /**
     * Gets the "INVALID GROUND OVERLAY URL" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID GROUND OVERLAY URL" exception.
     */
    static public function invalidGroundOverlayUrl()
    {
        return new static('The url of a ground overlay must be a string value.');
    }

    /**
     * Gets the "INVALID GROUND OVERLAY" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID GROUND OVERLAY" exception.
     */
    static public function invalidGroundOverlayBound()
    {
        return new static(sprintf('%s'.PHP_EOL.'%s'.PHP_EOL.'%s'.PHP_EOL.'%s'.PHP_EOL.'%s',
            'The bound setter arguments is invalid.',
            'The available prototypes are :',
            ' - public function setBound(Ivory\GoogleMapBundle\Model\Base\Bound $bound)',
            ' - public function setBount(Ivory\GoogleMapBundle\Model\Base\Coordinate $southWest, Ivory\GoogleMapBundle\Model\Base\Coordinate $northEast)',
            ' - public function setBound(double $southWestLatitude, double $southWestLongitude, double $northEastLatitude, double $northEastLongitude, boolean southWestNoWrap = true, boolean $northEastNoWrap = true)'
        ));
    }

    /**
     * Gets the "INVALID INFO WINDOW AUTO CLOSE" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID INFO WINDOW AUTO CLOSE" exception.
     */
    static public function invalidInfoWindowAutoClose()
    {
        return new static('The info window auto close flag must be a boolean value.');
    }

    /**
     * Gets the "INVALID INFO WINDOW AUTO OPEN" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID INFO WINDOW AUTO OPEN" exception.
     */
    static public function invalidInfoWindowAutoOpen()
    {
        return new static('The auto open property of an info window must be a boolean value.');
    }

    /**
     * Gets the "INVALID INFO WINDOW CONTENT" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID INFO WINDOW CONTENT" exception.
     */
    static public function invalidInfoWindowContent()
    {
        return new static('The content of an info window must be a string value.');
    }

    /**
     * Gets the "INVALID INFO WINDOW OPEN" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID INFO WINDOW OPEN" exception.
     */
    static public function invalidInfoWindowOpen()
    {
        return new static('The open property of an info window must be a boolean value.');
    }

    /**
     * Gets the "INVALID INFO WINDOW OPEN EVENT" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID INFO WINDOW OPEN EVENT" exception.
     */
    static public function invalidInfoWindowOpenEvent()
    {
        return new static(sprintf('The only available open event are : %s.', implode(', ', MouseEvent::getMouseEvents())));
    }

    /**
     * Gets the "INVALID INFO WINDOW POSITION" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID INFO WINDOW POSITION" exception.
     */
    static public function invalidInfoWindowPosition()
    {
        return new static(sprintf('%s'.PHP_EOL.'%s'.PHP_EOL.'%s'.PHP_EOL.'%s',
            'The position setter arguments is invalid.',
            'The available prototypes are :',
            ' - function setPosition(Ivory\GoogleMap\Base\Coordinate $position)',
            ' - function setPosition(double $latitude, double $longitude, boolean $noWrap = true)'
        ));
    }

    /**
     * Gets the "INVALID INFO WINDOW PIXEL OFFSET" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID INFO WINDOW PIXEL OFFSET" exception.
     */
    static public function invalidInfoWindowPixelOffset()
    {
        return new static(sprintf('%s'.PHP_EOL.'%s'.PHP_EOL.'%s'.PHP_EOL.'%s',
            'The pixel offset setter arguments is invalid.',
            'The available prototypes are :',
            ' - function setPixelOffset(Ivory\GoogleMap\Base\Size $scaledSize)',
            ' - function setPixelOffset(double $width, double $height, string $widthUnit = null, string $heightUnit = null)'
        ));
    }

    /**
     * Gets the "INVALID MARKER ANIMATION" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID MARKER ANIMATION" exception.
     */
    static public function invalidMarkerAnimation()
    {
        return new static(sprintf('The animation of a marker can only be : %s.', implode(', ', Animation::getAnimations())));
    }

    /**
     * Gets the "INVALID MARKER ICON" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID MARKER ICON" exception.
     */
    static public function invalidMarkerIcon()
    {
        return new static(sprintf('%s'.PHP_EOL.'%s'.PHP_EOL.'%s'.PHP_EOL.'%s',
            'The icon setter arguments is invalid.',
            'The available prototypes are :',
            ' - function setIcon(Ivory\GoogleMap\Overlays\MarkerImage $markerImage = null)',
            ' - function setIcon(string $url = null)'
        ));
    }

    /**
     * Gets the "INVALID MARKER ICON URL" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID MARKER ICON URL" exception.
     */
    static public function invalidMarkerIconUrl()
    {
        return new static('A marker image icon must have an url.');
    }

    /**
     * Gets the "INVALID MARKER IMAGE ANCHOR" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID MARKER IMAGE ANCHOR" exception.
     */
    static public function invalidMarkerImageAnchor()
    {
        return new static(sprintf('%s'.PHP_EOL.'%s'.PHP_EOL.'%s'.PHP_EOL.'%s',
            'The anchor setter arguments is invalid.',
            'The available prototypes are :',
            ' - function setAnchor(Ivory\GoogleMap\Base\Point $anchor)',
            ' - function setAnchor(double x, double y)'
        ));
    }

    /**
     * Gets the "INVALID MARKER IMAGE ORIGIN" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID MARKER IMAGE ORIGIN" exception.
     */
    static public function invalidMarkerImageOrigin()
    {
        return new static(sprintf('%s'.PHP_EOL.'%s'.PHP_EOL.'%s'.PHP_EOL.'%s',
            'The origin setter arguments is invalid.',
            'The available prototypes are :',
            ' - function setOrigin(Ivory\GoogleMap\Base\Point $origin)',
            ' - function setOrigin(double x, double y)'
        ));
    }

    /**
     * Gets the "INVALID MARKER IMAGE SCALED SIZE" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID MARKER IMAGE SCALED SIZE" exception.
     */
    static public function invalidMarkerImageScaledSize()
    {
        return new static(sprintf('%s'.PHP_EOL.'%s'.PHP_EOL.'%s'.PHP_EOL.'%s',
            'The scaled size setter arguments is invalid.',
            'The available prototypes are :',
            ' - function setScaledSize(Ivory\GoogleMap\Base\Size $scaledSize = null)',
            ' - function setScaledSize(double $width, double $height, string $widthUnit = null, string $heightUnit = null)'
        ));
    }

    /**
     * Gets the "INVALID MARKER IMAGE SIZE" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID MARKER IMAGE SIZE" exception.
     */
    static public function invalidMarkerImageSize()
    {
        return new static(sprintf('%s'.PHP_EOL.'%s'.PHP_EOL.'%s'.PHP_EOL.'%s',
            'The size setter arguments is invalid.',
            'The available prototypes are :',
            ' - function setSize(Ivory\GoogleMap\Base\Size $size = null)',
            ' - function setSize(double $width, double $height, string $widthUnit = null, string $heightUnit = null)'
        ));
    }

    /**
     * Gets the "INVALID MARKER IMAGE URL" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID MARKER IMAGE URL" exception.
     */
    static public function invalidMarkeImageUrl()
    {
        return new static('The url of a maker image must be a string value.');
    }

    /**
     * Gets the "INVALID MARKER POSITION" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID MARKER POSITION" exception.
     */
    static public function invalidMarkerPosition()
    {
        return new static(sprintf('%s'.PHP_EOL.'%s'.PHP_EOL.'%s'.PHP_EOL.'%s',
            'The position setter arguments is invalid.',
            'The available prototypes are :',
            ' - function setPosition(Ivory\GoogleMap\Base\Coordinate $position)',
            ' - function setPosition(double $latitude, double $longitude, boolean $noWrap = true)'
        ));
    }

    /**
     * Gets the "INVALID MARKER SHADOW URL" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID MARKER SHADOW URL" exception.
     */
    static public function invalidMarkerShadowUrl()
    {
        return new static('A marker image shadow must have an url.');
    }

    /**
     * Gets the "INVALID MARKER SHADOW" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID MARKER SHADOW" exception.
     */
    static public function invalidMarkerShadow()
    {
        return new static(sprintf('%s'.PHP_EOL.'%s'.PHP_EOL.'%s'.PHP_EOL.'%s',
            'The shadow setter arguments is invalid.',
            'The available prototypes are :',
            ' - function setShadow(Ivory\GoogleMap\Overlays\MarkerImage $markerImage = null)',
            ' - function setShadow(string $url = null)'
        ));
    }

    /**
     * Gets the "INVALID MARKER SHAPE" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID MARKER SHAPE" exception.
     */
    static public function invalidMarkerShape()
    {
        return new static(sprintf('%s'.PHP_EOL.'%s'.PHP_EOL.'%s'.PHP_EOL.'%s',
            'The shape setter arguments is invalid.',
            'The available prototypes are :',
            ' - function setShape(Ivory\GoogleMap\Overlays\MarkerShape $shape = null)',
            ' - function setShape(string $type, array $coordinates)'
        ));
    }

    /**
     * Gets the "INVALID MARKER SHAPE COORDINATES" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID MARKER SHAPE COORDINATES" exception.
     */
    static public function invalidMarkerShapeCoordinates()
    {
        return new static('A marker shape must have coordinates.');
    }

    /**
     * Gets the "INVALID MARKER SHAPE ADD POLY COORDINATE CALL" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID MARKER SHAPE ADD POLY COORDINATE CALL" exception.
     */
    static public function invalidMarkerShapeAddPolyCoordinateCall()
    {
        return new static('The MarkerShape::addPolyCoordinate($x, $y) method can only be use with a marker shape which has type poly.');
    }

    /**
     * Gets the "INVALID MARKER SHAPE TYPE" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID MARKER SHAPE TYPE" exception.
     */
    static public function invalidMarkerShapeType()
    {
        return new static(sprintf(
            'The type of a marker shape can only be : %s.',
            implode(', ', array('circle', 'poly', 'rect'))
        ));
    }

    /**
     * Gets the "INVALID MARKER SHAPE CIRCLE COORDINATES" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID MARKER SHAPE CIRCLE COORDINATES" exception.
     */
    static public function invalidMarkerShapeCircleCoordinates()
    {
        return new static(sprintf('%s'.PHP_EOL.'%s',
            'The coordinates setter arguments is invalid if the marker shape type is circle.',
            'The available prototype is : function setCoordinates(array(double $x, double $y, double $r))'
        ));
    }

    /**
     * Gets the "INVALID MARKER SHAPE POLY COORDINATE" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID MARKER SHAPE POLY COORDINATE" exception.
     */
    static public function invalidMarkerShapePolyCoordinate()
    {
        return new static('The x & y coordinates of a poly marker shape must be numeric values.');
    }

    /**
     * Gets the "INVALID MARKER SHAPE POLY COORDINATES" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID MARKER SHAPE POLY COORDINATES" exception.
     */
    static public function invalidMarkerShapePolyCoordinates()
    {
        return new static(sprintf('%s'.PHP_EOL.'%s',
            'The coordinates setter arguments is invalid if the marker shape type is poly.',
            'The available prototype is : function setCoordinates(array(double $x1, double $y1, ..., double $xn, double $yn))'
        ));
    }

    /**
     * Gets the "INVALID MARKER SHAPE RECT COORDINATES" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID MARKER SHAPE RECT COORDINATES" exception.
     */
    static public function invalidMarkerShapeRectCoordinates()
    {
        return new static(sprintf('%s'.PHP_EOL.'%s',
            'The coordinates setter arguments is invalid if the marker shape type is rect.',
            'The available prototype is : function setCoordinates(array(double $x1, double $y1, double $x2, double $y2))'
        ));
    }

    /**
     * Gets the "INVALID POLYGON COORDINATE" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID POLYGON COORDINATE" exception.
     */
    static public function invalidPolygonCoordinate()
    {
        return new static(sprintf('%s'.PHP_EOL.'%s'.PHP_EOL.'%s'.PHP_EOL.'%s',
            'The coordinate adder arguments is invalid.',
            'The available prototypes are :',
            ' - function addCoordinate(Ivory\GoogleMap\Base\Coordinate $coordinate)',
            ' - function addCoordinate(double $latitude, double $longitude, boolean $noWrap = true)'
        ));
    }

    /**
     * Gets the "INVALID POLYLINE COORDINATE" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID POLYLINE COORDINATE" exception.
     */
    static public function invalidPolylineCoordinate()
    {
        return new static(sprintf('%s'.PHP_EOL.'%s'.PHP_EOL.'%s'.PHP_EOL.'%s',
            'The coordinate adder arguments is invalid.',
            'The available prototypes are :',
            ' - function addCoordinate(Ivory\GoogleMap\Base\Coordinate $coordinate)',
            ' - function addCoordinate(double $latitude, double $longitude, boolean $noWrap = true)'
        ));
    }

    /**
     * Gets the "INVALID RECTANGLE BOUND" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID RECTANGLE BOUND" exception.
     */
    static public function invalidRectangleBound()
    {
        return new static(sprintf('%s'.PHP_EOL.'%s'.PHP_EOL.'%s'.PHP_EOL.'%s'.PHP_EOL.'%s',
            'The bound setter arguments is invalid.',
            'The available prototypes are :',
            ' - function setBound(Ivory\GoogleMap\Base\Bound $bound)',
            ' - function setBount(Ivory\GoogleMap\Base\Coordinate $southWest, Ivory\GoogleMap\Base\Coordinate $northEast)',
            ' - function setBound(double $southWestLatitude, double $southWestLongitude, double $northEastLatitude, double $northEastLongitude, boolean southWestNoWrap = true, boolean $northEastNoWrap = true)'
        ));
    }

    /**
     * Gets the "INVALID RECTANGLE BOUND COORDINATES" exception.
     *
     * @return \Ivory\GoogleMap\Exception\OverlayException The "INVALID RECTANGLE BOUND COORDINATES" exception.
     */
    static public function invalidRectangleBoundCoordinates()
    {
        return new static('A rectangle bound must have a south west & a north east coordinate.');
    }
}
