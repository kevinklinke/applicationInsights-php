<?php declare(strict_types=1);
namespace ApplicationInsights\Channel\Contracts;

/**
 * THIS FILE IS AUTO-GENERATED.
 * Please do not edit manually.
 *
 * Use script at <root>/Schema/generateSchema.ps1
 */

/**
 * Data contract class for type Page_View_Data. An instance of PageView represents a generic action on a page like a button click. It is also the base type for PageView.
 */
class Page_View_Data extends Base_Data implements Data_Interface
{
    /**
     * Creates a new PageViewData.
     */
    public function __construct()
    {
        $this->_envelopeTypeName = 'Microsoft.ApplicationInsights.PageView';
        $this->_dataTypeName = 'PageViewData';
        $this->_data['ver'] = 2;
        $this->_data['name'] = null;
    }

    /**
     * Gets the ver field. Schema version.
     */
    public function getVer()
    {
        if (\array_key_exists('ver', $this->_data)) {
            return $this->_data['ver'];
        }

        return null;
    }

    /**
     * Sets the ver field. Schema version.
     */
    public function setVer($ver) : void
    {
        $this->_data['ver'] = $ver;
    }

    /**
     * Gets the url field. Request URL with all query string parameters.
     */
    public function getUrl()
    {
        if (\array_key_exists('url', $this->_data)) {
            return $this->_data['url'];
        }

        return null;
    }

    /**
     * Sets the url field. Request URL with all query string parameters.
     */
    public function setUrl($url) : void
    {
        $this->_data['url'] = $url;
    }

    /**
     * Gets the name field. Event name. Keep it low cardinality to allow proper grouping and useful metrics.
     */
    public function getName()
    {
        if (\array_key_exists('name', $this->_data)) {
            return $this->_data['name'];
        }

        return null;
    }

    /**
     * Sets the name field. Event name. Keep it low cardinality to allow proper grouping and useful metrics.
     */
    public function setName($name) : void
    {
        $this->_data['name'] = $name;
    }

    /**
     * Gets the duration field. Request duration in format: DD.HH:MM:SS.MMMMMM. For a page view (PageViewData), this is the duration. For a page view with performance information (PageViewPerfData), this is the page load time. Must be less than 1000 days.
     */
    public function getDuration()
    {
        if (\array_key_exists('duration', $this->_data)) {
            return $this->_data['duration'];
        }

        return null;
    }

    /**
     * Sets the duration field. Request duration in format: DD.HH:MM:SS.MMMMMM. For a page view (PageViewData), this is the duration. For a page view with performance information (PageViewPerfData), this is the page load time. Must be less than 1000 days.
     */
    public function setDuration($duration) : void
    {
        $this->_data['duration'] = $duration;
    }

    /**
     * Gets the id field. Identifier of a page view instance. Used for correlation between page view and other telemetry items.
     */
    public function getId()
    {
        if (\array_key_exists('id', $this->_data)) {
            return $this->_data['id'];
        }

        return null;
    }

    /**
     * Sets the id field. Identifier of a page view instance. Used for correlation between page view and other telemetry items.
     */
    public function setId($id) : void
    {
        $this->_data['id'] = $id;
    }

    /**
     * Gets the referrerUri field. Fully qualified page URI or URL of the referring page; if unknown, leave blank.
     */
    public function getReferrerUri()
    {
        if (\array_key_exists('referrerUri', $this->_data)) {
            return $this->_data['referrerUri'];
        }

        return null;
    }

    /**
     * Sets the referrerUri field. Fully qualified page URI or URL of the referring page; if unknown, leave blank.
     */
    public function setReferrerUri($referrerUri) : void
    {
        $this->_data['referrerUri'] = $referrerUri;
    }

    /**
     * Gets the properties field. Collection of custom properties.
     */
    public function getProperties()
    {
        if (\array_key_exists('properties', $this->_data)) {
            return $this->_data['properties'];
        }

        return null;
    }

    /**
     * Sets the properties field. Collection of custom properties.
     */
    public function setProperties($properties) : void
    {
        $this->_data['properties'] = $properties;
    }

    /**
     * Gets the measurements field. Collection of custom measurements.
     */
    public function getMeasurements()
    {
        if (\array_key_exists('measurements', $this->_data)) {
            return $this->_data['measurements'];
        }

        return null;
    }

    /**
     * Sets the measurements field. Collection of custom measurements.
     */
    public function setMeasurements($measurements) : void
    {
        $this->_data['measurements'] = $measurements;
    }
}
