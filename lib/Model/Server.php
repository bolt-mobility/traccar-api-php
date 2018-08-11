<?php
/**
 * Server
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * traccar
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 3.16
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: unset
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Server Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Server implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Server';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'registration' => 'bool',
        'readonly' => 'bool',
        'device_readonly' => 'bool',
        'limit_commands' => 'bool',
        'map' => 'string',
        'bing_key' => 'string',
        'map_url' => 'string',
        'latitude' => 'float',
        'longitude' => 'float',
        'zoom' => 'int',
        'twelve_hour_format' => 'bool',
        'version' => 'string',
        'force_settings' => 'bool',
        'coordinate_format' => 'string',
        'attributes' => 'map[string,string]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'registration' => null,
        'readonly' => null,
        'device_readonly' => null,
        'limit_commands' => null,
        'map' => null,
        'bing_key' => null,
        'map_url' => null,
        'latitude' => null,
        'longitude' => null,
        'zoom' => null,
        'twelve_hour_format' => null,
        'version' => null,
        'force_settings' => null,
        'coordinate_format' => null,
        'attributes' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'registration' => 'registration',
        'readonly' => 'readonly',
        'device_readonly' => 'deviceReadonly',
        'limit_commands' => 'limitCommands',
        'map' => 'map',
        'bing_key' => 'bingKey',
        'map_url' => 'mapUrl',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'zoom' => 'zoom',
        'twelve_hour_format' => 'twelveHourFormat',
        'version' => 'version',
        'force_settings' => 'forceSettings',
        'coordinate_format' => 'coordinateFormat',
        'attributes' => 'attributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'registration' => 'setRegistration',
        'readonly' => 'setReadonly',
        'device_readonly' => 'setDeviceReadonly',
        'limit_commands' => 'setLimitCommands',
        'map' => 'setMap',
        'bing_key' => 'setBingKey',
        'map_url' => 'setMapUrl',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'zoom' => 'setZoom',
        'twelve_hour_format' => 'setTwelveHourFormat',
        'version' => 'setVersion',
        'force_settings' => 'setForceSettings',
        'coordinate_format' => 'setCoordinateFormat',
        'attributes' => 'setAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'registration' => 'getRegistration',
        'readonly' => 'getReadonly',
        'device_readonly' => 'getDeviceReadonly',
        'limit_commands' => 'getLimitCommands',
        'map' => 'getMap',
        'bing_key' => 'getBingKey',
        'map_url' => 'getMapUrl',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'zoom' => 'getZoom',
        'twelve_hour_format' => 'getTwelveHourFormat',
        'version' => 'getVersion',
        'force_settings' => 'getForceSettings',
        'coordinate_format' => 'getCoordinateFormat',
        'attributes' => 'getAttributes'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['registration'] = isset($data['registration']) ? $data['registration'] : null;
        $this->container['readonly'] = isset($data['readonly']) ? $data['readonly'] : null;
        $this->container['device_readonly'] = isset($data['device_readonly']) ? $data['device_readonly'] : null;
        $this->container['limit_commands'] = isset($data['limit_commands']) ? $data['limit_commands'] : null;
        $this->container['map'] = isset($data['map']) ? $data['map'] : null;
        $this->container['bing_key'] = isset($data['bing_key']) ? $data['bing_key'] : null;
        $this->container['map_url'] = isset($data['map_url']) ? $data['map_url'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['zoom'] = isset($data['zoom']) ? $data['zoom'] : null;
        $this->container['twelve_hour_format'] = isset($data['twelve_hour_format']) ? $data['twelve_hour_format'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['force_settings'] = isset($data['force_settings']) ? $data['force_settings'] : null;
        $this->container['coordinate_format'] = isset($data['coordinate_format']) ? $data['coordinate_format'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets registration
     *
     * @return bool
     */
    public function getRegistration()
    {
        return $this->container['registration'];
    }

    /**
     * Sets registration
     *
     * @param bool $registration registration
     *
     * @return $this
     */
    public function setRegistration($registration)
    {
        $this->container['registration'] = $registration;

        return $this;
    }

    /**
     * Gets readonly
     *
     * @return bool
     */
    public function getReadonly()
    {
        return $this->container['readonly'];
    }

    /**
     * Sets readonly
     *
     * @param bool $readonly readonly
     *
     * @return $this
     */
    public function setReadonly($readonly)
    {
        $this->container['readonly'] = $readonly;

        return $this;
    }

    /**
     * Gets device_readonly
     *
     * @return bool
     */
    public function getDeviceReadonly()
    {
        return $this->container['device_readonly'];
    }

    /**
     * Sets device_readonly
     *
     * @param bool $device_readonly device_readonly
     *
     * @return $this
     */
    public function setDeviceReadonly($device_readonly)
    {
        $this->container['device_readonly'] = $device_readonly;

        return $this;
    }

    /**
     * Gets limit_commands
     *
     * @return bool
     */
    public function getLimitCommands()
    {
        return $this->container['limit_commands'];
    }

    /**
     * Sets limit_commands
     *
     * @param bool $limit_commands limit_commands
     *
     * @return $this
     */
    public function setLimitCommands($limit_commands)
    {
        $this->container['limit_commands'] = $limit_commands;

        return $this;
    }

    /**
     * Gets map
     *
     * @return string
     */
    public function getMap()
    {
        return $this->container['map'];
    }

    /**
     * Sets map
     *
     * @param string $map map
     *
     * @return $this
     */
    public function setMap($map)
    {
        $this->container['map'] = $map;

        return $this;
    }

    /**
     * Gets bing_key
     *
     * @return string
     */
    public function getBingKey()
    {
        return $this->container['bing_key'];
    }

    /**
     * Sets bing_key
     *
     * @param string $bing_key bing_key
     *
     * @return $this
     */
    public function setBingKey($bing_key)
    {
        $this->container['bing_key'] = $bing_key;

        return $this;
    }

    /**
     * Gets map_url
     *
     * @return string
     */
    public function getMapUrl()
    {
        return $this->container['map_url'];
    }

    /**
     * Sets map_url
     *
     * @param string $map_url map_url
     *
     * @return $this
     */
    public function setMapUrl($map_url)
    {
        $this->container['map_url'] = $map_url;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param float $latitude latitude
     *
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param float $longitude longitude
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets zoom
     *
     * @return int
     */
    public function getZoom()
    {
        return $this->container['zoom'];
    }

    /**
     * Sets zoom
     *
     * @param int $zoom zoom
     *
     * @return $this
     */
    public function setZoom($zoom)
    {
        $this->container['zoom'] = $zoom;

        return $this;
    }

    /**
     * Gets twelve_hour_format
     *
     * @return bool
     */
    public function getTwelveHourFormat()
    {
        return $this->container['twelve_hour_format'];
    }

    /**
     * Sets twelve_hour_format
     *
     * @param bool $twelve_hour_format twelve_hour_format
     *
     * @return $this
     */
    public function setTwelveHourFormat($twelve_hour_format)
    {
        $this->container['twelve_hour_format'] = $twelve_hour_format;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets force_settings
     *
     * @return bool
     */
    public function getForceSettings()
    {
        return $this->container['force_settings'];
    }

    /**
     * Sets force_settings
     *
     * @param bool $force_settings force_settings
     *
     * @return $this
     */
    public function setForceSettings($force_settings)
    {
        $this->container['force_settings'] = $force_settings;

        return $this;
    }

    /**
     * Gets coordinate_format
     *
     * @return string
     */
    public function getCoordinateFormat()
    {
        return $this->container['coordinate_format'];
    }

    /**
     * Sets coordinate_format
     *
     * @param string $coordinate_format coordinate_format
     *
     * @return $this
     */
    public function setCoordinateFormat($coordinate_format)
    {
        $this->container['coordinate_format'] = $coordinate_format;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return map[string,string]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param map[string,string] $attributes attributes
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


