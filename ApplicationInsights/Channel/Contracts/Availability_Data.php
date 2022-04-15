<?php declare(strict_types=1);
namespace ApplicationInsights\Channel\Contracts;

/**
 * THIS FILE IS AUTO-GENERATED.
 * Please do not edit manually.
 *
 * Use script at <root>/Schema/generateSchema.ps1
 */

/**
 * Data contract class for type Availability_Data. Instances of AvailabilityData represent the result of executing an availability test.
 */
class Availability_Data extends Base_Data implements Data_Interface
{
    /**
     * Creates a new AvailabilityData.
     */
    public function __construct()
    {
        $this->_envelopeTypeName = 'Microsoft.ApplicationInsights.Availability';
        $this->_dataTypeName = 'AvailabilityData';
        $this->_data['ver'] = 2;
        $this->_data['id'] = null;
        $this->_data['name'] = null;
        $this->_data['duration'] = null;
        $this->_data['success'] = null;
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
     * Gets the id field. Identifier of a test run. Use it to correlate steps of test run and telemetry generated by the service.
     */
    public function getId()
    {
        if (\array_key_exists('id', $this->_data)) {
            return $this->_data['id'];
        }

        return null;
    }

    /**
     * Sets the id field. Identifier of a test run. Use it to correlate steps of test run and telemetry generated by the service.
     */
    public function setId($id) : void
    {
        $this->_data['id'] = $id;
    }

    /**
     * Gets the name field. Name of the test that these availability results represent.
     */
    public function getName()
    {
        if (\array_key_exists('name', $this->_data)) {
            return $this->_data['name'];
        }

        return null;
    }

    /**
     * Sets the name field. Name of the test that these availability results represent.
     */
    public function setName($name) : void
    {
        $this->_data['name'] = $name;
    }

    /**
     * Gets the duration field. Duration in format: DD.HH:MM:SS.MMMMMM. Must be less than 1000 days.
     */
    public function getDuration()
    {
        if (\array_key_exists('duration', $this->_data)) {
            return $this->_data['duration'];
        }

        return null;
    }

    /**
     * Sets the duration field. Duration in format: DD.HH:MM:SS.MMMMMM. Must be less than 1000 days.
     */
    public function setDuration($duration) : void
    {
        $this->_data['duration'] = $duration;
    }

    /**
     * Gets the success field. Success flag.
     */
    public function getSuccess()
    {
        if (\array_key_exists('success', $this->_data)) {
            return $this->_data['success'];
        }

        return null;
    }

    /**
     * Sets the success field. Success flag.
     */
    public function setSuccess($success) : void
    {
        $this->_data['success'] = $success;
    }

    /**
     * Gets the runLocation field. Name of the location where the test was run from.
     */
    public function getRunLocation()
    {
        if (\array_key_exists('runLocation', $this->_data)) {
            return $this->_data['runLocation'];
        }

        return null;
    }

    /**
     * Sets the runLocation field. Name of the location where the test was run from.
     */
    public function setRunLocation($runLocation) : void
    {
        $this->_data['runLocation'] = $runLocation;
    }

    /**
     * Gets the message field. Diagnostic message for the result.
     */
    public function getMessage()
    {
        if (\array_key_exists('message', $this->_data)) {
            return $this->_data['message'];
        }

        return null;
    }

    /**
     * Sets the message field. Diagnostic message for the result.
     */
    public function setMessage($message) : void
    {
        $this->_data['message'] = $message;
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
