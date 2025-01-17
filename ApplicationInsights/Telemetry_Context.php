<?php declare(strict_types=1);
namespace ApplicationInsights;

/**
 * Responsible for managing the context to send along with all telemetry items.
 */
class Telemetry_Context
{
    /**
     * The instrumentation key.
     *
     * @var string (Guid)
     */
    private $_instrumentationKey;

    /**
     * The device context.
     *
     * @var \ApplicationInsights\Channel\Contracts\Device
     */
    private $_deviceContext;

    /**
     * The cloud context.
     *
     * @var \ApplicationInsights\Channel\Contracts\Cloud
     */
    private $_cloudContext;

    /**
     * The application context.
     *
     * @var \ApplicationInsights\Channel\Contracts\Application
     */
    private $_applicationContext;

    /**
     * The user context.
     *
     * @var \ApplicationInsights\Channel\Contracts\User
     */
    private $_userContext;

    /**
     * The location context.
     *
     * @var \ApplicationInsights\Channel\Contracts\Location
     */
    private $_locationContext;

    /**
     * The operation context.
     *
     * @var \ApplicationInsights\Channel\Contracts\Operation
     */
    private $_operationContext;

    /**
     * The session context.
     *
     * @var \ApplicationInsights\Channel\Contracts\Session
     */
    private $_sessionContext;

    /**
     * The internal context.
     *
     * @var \ApplicationInsights\Channel\Contracts\Internal
     */
    private $_internalContext;

    /**
     * Additional custom properties array.
     *
     * @var array additional properties (name/value pairs) to append as custom properties to all telemetry
     */
    private $_properties;

    /**
     * Initializes a new TelemetryContext.
     */
    public function __construct()
    {
        $this->_deviceContext = new Channel\Contracts\Device();
        $this->_cloudContext = new Channel\Contracts\Cloud();
        $this->_applicationContext = new Channel\Contracts\Application();
        $this->_userContext = new Channel\Contracts\User();
        $this->_locationContext = new Channel\Contracts\Location();
        $this->_operationContext = new Channel\Contracts\Operation();
        $this->_sessionContext = new Channel\Contracts\Session();
        $this->_internalContext = new Channel\Contracts\Internal();
        $this->_properties = [];

        // Initialize user id
        $currentUser = new Current_User();
        $this->_userContext->setId($currentUser->id);

        // Initialize session id
        $currentSession = new Current_Session();
        $this->_sessionContext->setId($currentSession->id);

        // Initialize the operation id
        $operationId = \ApplicationInsights\Channel\Contracts\Utils::returnGuid();
        $this->_operationContext->setId($operationId);

        // Initialize client ip
        if (\array_key_exists('REMOTE_ADDR', $_SERVER) && \count(\explode('.', $_SERVER['REMOTE_ADDR'])) >= 4) {
            $this->_locationContext->setIp($_SERVER['REMOTE_ADDR']);
        }

        $this->_internalContext->setSdkVersion('php:0.4.6');
    }

    /**
     * The instrumentation key for your Application Insights application.
     *
     * @return string (Guid)
     */
    public function getInstrumentationKey()
    {
        return $this->_instrumentationKey;
    }

    /**
     * Sets the instrumetation key on the context. This is the key for you application in Application Insights.
     *
     * @param string $instrumentationKey (Guid)
     */
    public function setInstrumentationKey($instrumentationKey) : void
    {
        $this->_instrumentationKey = $instrumentationKey;
    }

    /**
     * The device context object. Allows you to set properties that will be attached to all telemetry about the device.
     *
     * @return \ApplicationInsights\Channel\Contracts\Device
     */
    public function getDeviceContext()
    {
        return $this->_deviceContext;
    }

    /**
     * Sets device context object. Allows you to set properties that will be attached to all telemetry about the device.
     *
     * @param \ApplicationInsights\Channel\Contracts\Device $deviceContext
     */
    public function setDeviceContext(Channel\Contracts\Device $deviceContext) : void
    {
        $this->_deviceContext = $deviceContext;
    }

    /**
     * The cloud context object. Allows you to set properties that will be attached to all telemetry about the cloud placement of an application.
     *
     * @return \ApplicationInsights\Channel\Contracts\Cloud
     */
    public function getCloudContext()
    {
        return $this->_cloudContext;
    }

    /**
     * Sets cloud context object. Allows you to set properties that will be attached to all telemetry about the cloud placement of an application.
     *
     * @param \ApplicationInsights\Channel\Contracts\Cloud $cloudContext
     */
    public function setCloudContext(Channel\Contracts\Cloud $cloudContext) : void
    {
        $this->_cloudContext = $cloudContext;
    }

    /**
     * The application context object. Allows you to set properties that will be attached to all telemetry about the application.
     *
     * @return \ApplicationInsights\Channel\Contracts\Application
     */
    public function getApplicationContext()
    {
        return $this->_applicationContext;
    }

    /**
     * Sets application context object. Allows you to set properties that will be attached to all telemetry about the application.
     *
     * @param \ApplicationInsights\Channel\Contracts\Application $applicationContext
     */
    public function setApplicationContext(Channel\Contracts\Application $applicationContext) : void
    {
        $this->_applicationContext = $applicationContext;
    }

    /**
     * The user context object. Allows you to set properties that will be attached to all telemetry about the user.
     *
     * @return \ApplicationInsights\Channel\Contracts\User
     */
    public function getUserContext()
    {
        return $this->_userContext;
    }

    /**
     * Set user context object. Allows you to set properties that will be attached to all telemetry about the user.
     *
     * @param \ApplicationInsights\Channel\Contracts\User $userContext
     */
    public function setUserContext(Channel\Contracts\User $userContext) : void
    {
        $this->_userContext = $userContext;
    }

    /**
     * The location context object. Allows you to set properties that will be attached to all telemetry about the location.
     *
     * @return \ApplicationInsights\Channel\Contracts\Location
     */
    public function getLocationContext()
    {
        return $this->_locationContext;
    }

    /**
     * Set location context object. Allows you to set properties that will be attached to all telemetry about the location.
     *
     * @param \ApplicationInsights\Channel\Contracts\Location $locationContext
     */
    public function setLocationContext(Channel\Contracts\Location $locationContext) : void
    {
        $this->_locationContext = $locationContext;
    }

    /**
     * The operation context object. Allows you to set properties that will be attached to all telemetry about the operation.
     *
     * @return \ApplicationInsights\Channel\Contracts\Operation
     */
    public function getOperationContext()
    {
        return $this->_operationContext;
    }

    /**
     * Set operation context object. Allows you to set properties that will be attached to all telemetry about the operation.
     *
     * @param \ApplicationInsights\Channel\Contracts\Operation $operationContext
     */
    public function setOperationContext(Channel\Contracts\Operation $operationContext) : void
    {
        $this->_operationContext = $operationContext;
    }

    /**
     * The session context object. Allows you to set properties that will be attached to all telemetry about the session.
     *
     * @return \ApplicationInsights\Channel\Contracts\Session
     */
    public function getSessionContext()
    {
        return $this->_sessionContext;
    }

    /**
     * Set session context object. Allows you to set properties that will be attached to all telemetry about the session.
     *
     * @param \ApplicationInsights\Channel\Contracts\Session $sessionContext
     */
    public function setSessionContext(Channel\Contracts\Session $sessionContext) : void
    {
        $this->_sessionContext = $sessionContext;
    }

    /**
     * The session context object. Allows you to set internal details for troubleshooting.
     *
     * @return \ApplicationInsights\Channel\Contracts\Internal
     */
    public function getInternalContext()
    {
        return $this->_internalContext;
    }

    /**
     * Set session context object. Allows you to set internal details for troubleshooting.
     *
     * @param \ApplicationInsights\Channel\Contracts\Internal $internalContext
     */
    public function setInternalContext(Channel\Contracts\Internal $internalContext) : void
    {
        $this->_internalContext = $internalContext;
    }

    /**
     * Get the additional custom properties array.
     *
     * @return array additional properties (name/value pairs) to append as custom properties to all telemetry
     */
    public function getProperties()
    {
        return $this->_properties;
    }

    /**
     * Set the additional custom properties array.
     *
     * @param array $properties additional properties (name/value pairs) to append as custom properties to all telemetry
     */
    public function setProperties($properties) : void
    {
        $this->_properties = $properties;
    }
}
