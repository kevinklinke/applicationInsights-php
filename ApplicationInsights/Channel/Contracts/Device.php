<?php declare(strict_types=1);
namespace ApplicationInsights\Channel\Contracts;

/**
 * THIS FILE IS AUTO-GENERATED.
 * Please do not edit manually.
 *
 * Use script at <root>/Schema/generateSchema.ps1
 */

/**
 * Data contract class for type Device.
 */
class Device
{
    use Json_Serializer;

    /**
     * Data array that will store all the values.
     */
    private $_data;

    /**
     * Creates a new Device.
     */
    public function __construct()
    {
        $this->_data = [];
    }

    /**
     * Gets the id field. Unique client device id. Computer name in most cases.
     */
    public function getId()
    {
        if (\array_key_exists('ai.device.id', $this->_data)) {
            return $this->_data['ai.device.id'];
        }

        return null;
    }

    /**
     * Sets the id field. Unique client device id. Computer name in most cases.
     */
    public function setId($id) : void
    {
        $this->_data['ai.device.id'] = $id;
    }

    /**
     * Gets the locale field. Device locale using <language>-<REGION> pattern, following RFC 5646. Example 'en-US'.
     */
    public function getLocale()
    {
        if (\array_key_exists('ai.device.locale', $this->_data)) {
            return $this->_data['ai.device.locale'];
        }

        return null;
    }

    /**
     * Sets the locale field. Device locale using <language>-<REGION> pattern, following RFC 5646. Example 'en-US'.
     */
    public function setLocale($locale) : void
    {
        $this->_data['ai.device.locale'] = $locale;
    }

    /**
     * Gets the model field. Model of the device the end user of the application is using. Used for client scenarios. If this field is empty then it is derived from the user agent.
     */
    public function getModel()
    {
        if (\array_key_exists('ai.device.model', $this->_data)) {
            return $this->_data['ai.device.model'];
        }

        return null;
    }

    /**
     * Sets the model field. Model of the device the end user of the application is using. Used for client scenarios. If this field is empty then it is derived from the user agent.
     */
    public function setModel($model) : void
    {
        $this->_data['ai.device.model'] = $model;
    }

    /**
     * Gets the oemName field. Client device OEM name taken from the browser.
     */
    public function getOemName()
    {
        if (\array_key_exists('ai.device.oemName', $this->_data)) {
            return $this->_data['ai.device.oemName'];
        }

        return null;
    }

    /**
     * Sets the oemName field. Client device OEM name taken from the browser.
     */
    public function setOemName($oemName) : void
    {
        $this->_data['ai.device.oemName'] = $oemName;
    }

    /**
     * Gets the osVersion field. Operating system name and version of the device the end user of the application is using. If this field is empty then it is derived from the user agent. Example 'Windows 10 Pro 10.0.10586.0'.
     */
    public function getOsVersion()
    {
        if (\array_key_exists('ai.device.osVersion', $this->_data)) {
            return $this->_data['ai.device.osVersion'];
        }

        return null;
    }

    /**
     * Sets the osVersion field. Operating system name and version of the device the end user of the application is using. If this field is empty then it is derived from the user agent. Example 'Windows 10 Pro 10.0.10586.0'.
     */
    public function setOsVersion($osVersion) : void
    {
        $this->_data['ai.device.osVersion'] = $osVersion;
    }

    /**
     * Gets the type field. The type of the device the end user of the application is using. Used primarily to distinguish JavaScript telemetry from server side telemetry. Examples: 'PC', 'Phone', 'Browser'. 'PC' is the default value.
     */
    public function getType()
    {
        if (\array_key_exists('ai.device.type', $this->_data)) {
            return $this->_data['ai.device.type'];
        }

        return null;
    }

    /**
     * Sets the type field. The type of the device the end user of the application is using. Used primarily to distinguish JavaScript telemetry from server side telemetry. Examples: 'PC', 'Phone', 'Browser'. 'PC' is the default value.
     */
    public function setType($type) : void
    {
        $this->_data['ai.device.type'] = $type;
    }
}
