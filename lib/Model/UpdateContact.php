<?php
/**
 * UpdateContact
 *
 * PHP version 5
 *
 * @category Class
 * @package  SendinBlue\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SendinBlue API
 *
 * SendinBlue provide a RESTFul API that can be used with any languages. With this API, you will be able to :   - Manage your campaigns and get the statistics   - Manage your contacts   - Send transactional Emails and SMS   - and much more...  You can download our wrappers at https://github.com/orgs/sendinblue  **Possible responses**   | Code | Message |   | :-------------: | ------------- |   | 200  | OK. Successful Request  |   | 201  | OK. Successful Creation |   | 202  | OK. Request accepted |   | 204  | OK. Successful Update/Deletion  |   | 400  | Error. Bad Request  |   | 401  | Error. Authentication Needed  |   | 402  | Error. Not enough credit, plan upgrade needed  |   | 403  | Error. Permission denied  |   | 404  | Error. Object does not exist |   | 405  | Error. Method not allowed  |
 *
 * OpenAPI spec version: 3.0.0
 * Contact: contact@sendinblue.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SendinBlue\Client\Model;

use \ArrayAccess;

/**
 * UpdateContact Class Doc Comment
 *
 * @category    Class
 * @package     SendinBlue\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UpdateContact implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'updateContact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'attributes' => 'map[string,string]',
        'emailBlacklisted' => 'bool',
        'smsBlacklisted' => 'bool',
        'listIds' => 'int[]',
        'unlinkListIds' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'attributes' => null,
        'emailBlacklisted' => null,
        'smsBlacklisted' => null,
        'listIds' => 'int32',
        'unlinkListIds' => 'int32'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'attributes' => 'attributes',
        'emailBlacklisted' => 'emailBlacklisted',
        'smsBlacklisted' => 'smsBlacklisted',
        'listIds' => 'listIds',
        'unlinkListIds' => 'unlinkListIds'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'attributes' => 'setAttributes',
        'emailBlacklisted' => 'setEmailBlacklisted',
        'smsBlacklisted' => 'setSmsBlacklisted',
        'listIds' => 'setListIds',
        'unlinkListIds' => 'setUnlinkListIds'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'attributes' => 'getAttributes',
        'emailBlacklisted' => 'getEmailBlacklisted',
        'smsBlacklisted' => 'getSmsBlacklisted',
        'listIds' => 'getListIds',
        'unlinkListIds' => 'getUnlinkListIds'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['emailBlacklisted'] = isset($data['emailBlacklisted']) ? $data['emailBlacklisted'] : null;
        $this->container['smsBlacklisted'] = isset($data['smsBlacklisted']) ? $data['smsBlacklisted'] : null;
        $this->container['listIds'] = isset($data['listIds']) ? $data['listIds'] : null;
        $this->container['unlinkListIds'] = isset($data['unlinkListIds']) ? $data['unlinkListIds'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets attributes
     * @return map[string,string]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     * @param map[string,string] $attributes
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets emailBlacklisted
     * @return bool
     */
    public function getEmailBlacklisted()
    {
        return $this->container['emailBlacklisted'];
    }

    /**
     * Sets emailBlacklisted
     * @param bool $emailBlacklisted Blacklist the contact for emails (emailBlacklisted = true)
     * @return $this
     */
    public function setEmailBlacklisted($emailBlacklisted)
    {
        $this->container['emailBlacklisted'] = $emailBlacklisted;

        return $this;
    }

    /**
     * Gets smsBlacklisted
     * @return bool
     */
    public function getSmsBlacklisted()
    {
        return $this->container['smsBlacklisted'];
    }

    /**
     * Sets smsBlacklisted
     * @param bool $smsBlacklisted Blacklist the contact for SMS (smsBlacklisted = true)
     * @return $this
     */
    public function setSmsBlacklisted($smsBlacklisted)
    {
        $this->container['smsBlacklisted'] = $smsBlacklisted;

        return $this;
    }

    /**
     * Gets listIds
     * @return int[]
     */
    public function getListIds()
    {
        return $this->container['listIds'];
    }

    /**
     * Sets listIds
     * @param int[] $listIds Ids of the lists to add the contact to
     * @return $this
     */
    public function setListIds($listIds)
    {
        $this->container['listIds'] = $listIds;

        return $this;
    }

    /**
     * Gets unlinkListIds
     * @return int[]
     */
    public function getUnlinkListIds()
    {
        return $this->container['unlinkListIds'];
    }

    /**
     * Sets unlinkListIds
     * @param int[] $unlinkListIds Ids of the lists to remove the contact from
     * @return $this
     */
    public function setUnlinkListIds($unlinkListIds)
    {
        $this->container['unlinkListIds'] = $unlinkListIds;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\SendinBlue\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\SendinBlue\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


