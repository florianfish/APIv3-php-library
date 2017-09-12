<?php
/**
 * GetContactCampaignStats
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
 * GetContactCampaignStats Class Doc Comment
 *
 * @category    Class
 * @description Campaign Statistics for the contact
 * @package     SendinBlue\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetContactCampaignStats implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'getContactCampaignStats';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'messagesSent' => '\SendinBlue\Client\Model\GetContactCampaignStatsMessagesSent[]',
        'hardBounces' => '\SendinBlue\Client\Model\GetContactCampaignStatsMessagesSent[]',
        'softBounces' => '\SendinBlue\Client\Model\GetContactCampaignStatsMessagesSent[]',
        'complaints' => '\SendinBlue\Client\Model\GetContactCampaignStatsMessagesSent[]',
        'unsubscriptions' => '\SendinBlue\Client\Model\GetContactCampaignStatsUnsubscriptions',
        'opened' => '\SendinBlue\Client\Model\GetContactCampaignStatsOpened[]',
        'clicked' => '\SendinBlue\Client\Model\GetContactCampaignStatsClicked[]',
        'transacAttributes' => '\SendinBlue\Client\Model\GetContactCampaignStatsTransacAttributes[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'messagesSent' => null,
        'hardBounces' => null,
        'softBounces' => null,
        'complaints' => null,
        'unsubscriptions' => null,
        'opened' => null,
        'clicked' => null,
        'transacAttributes' => null
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
        'messagesSent' => 'messagesSent',
        'hardBounces' => 'hardBounces',
        'softBounces' => 'softBounces',
        'complaints' => 'complaints',
        'unsubscriptions' => 'unsubscriptions',
        'opened' => 'opened',
        'clicked' => 'clicked',
        'transacAttributes' => 'transacAttributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'messagesSent' => 'setMessagesSent',
        'hardBounces' => 'setHardBounces',
        'softBounces' => 'setSoftBounces',
        'complaints' => 'setComplaints',
        'unsubscriptions' => 'setUnsubscriptions',
        'opened' => 'setOpened',
        'clicked' => 'setClicked',
        'transacAttributes' => 'setTransacAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'messagesSent' => 'getMessagesSent',
        'hardBounces' => 'getHardBounces',
        'softBounces' => 'getSoftBounces',
        'complaints' => 'getComplaints',
        'unsubscriptions' => 'getUnsubscriptions',
        'opened' => 'getOpened',
        'clicked' => 'getClicked',
        'transacAttributes' => 'getTransacAttributes'
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
        $this->container['messagesSent'] = isset($data['messagesSent']) ? $data['messagesSent'] : null;
        $this->container['hardBounces'] = isset($data['hardBounces']) ? $data['hardBounces'] : null;
        $this->container['softBounces'] = isset($data['softBounces']) ? $data['softBounces'] : null;
        $this->container['complaints'] = isset($data['complaints']) ? $data['complaints'] : null;
        $this->container['unsubscriptions'] = isset($data['unsubscriptions']) ? $data['unsubscriptions'] : null;
        $this->container['opened'] = isset($data['opened']) ? $data['opened'] : null;
        $this->container['clicked'] = isset($data['clicked']) ? $data['clicked'] : null;
        $this->container['transacAttributes'] = isset($data['transacAttributes']) ? $data['transacAttributes'] : null;
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
     * Gets messagesSent
     * @return \SendinBlue\Client\Model\GetContactCampaignStatsMessagesSent[]
     */
    public function getMessagesSent()
    {
        return $this->container['messagesSent'];
    }

    /**
     * Sets messagesSent
     * @param \SendinBlue\Client\Model\GetContactCampaignStatsMessagesSent[] $messagesSent
     * @return $this
     */
    public function setMessagesSent($messagesSent)
    {
        $this->container['messagesSent'] = $messagesSent;

        return $this;
    }

    /**
     * Gets hardBounces
     * @return \SendinBlue\Client\Model\GetContactCampaignStatsMessagesSent[]
     */
    public function getHardBounces()
    {
        return $this->container['hardBounces'];
    }

    /**
     * Sets hardBounces
     * @param \SendinBlue\Client\Model\GetContactCampaignStatsMessagesSent[] $hardBounces
     * @return $this
     */
    public function setHardBounces($hardBounces)
    {
        $this->container['hardBounces'] = $hardBounces;

        return $this;
    }

    /**
     * Gets softBounces
     * @return \SendinBlue\Client\Model\GetContactCampaignStatsMessagesSent[]
     */
    public function getSoftBounces()
    {
        return $this->container['softBounces'];
    }

    /**
     * Sets softBounces
     * @param \SendinBlue\Client\Model\GetContactCampaignStatsMessagesSent[] $softBounces
     * @return $this
     */
    public function setSoftBounces($softBounces)
    {
        $this->container['softBounces'] = $softBounces;

        return $this;
    }

    /**
     * Gets complaints
     * @return \SendinBlue\Client\Model\GetContactCampaignStatsMessagesSent[]
     */
    public function getComplaints()
    {
        return $this->container['complaints'];
    }

    /**
     * Sets complaints
     * @param \SendinBlue\Client\Model\GetContactCampaignStatsMessagesSent[] $complaints
     * @return $this
     */
    public function setComplaints($complaints)
    {
        $this->container['complaints'] = $complaints;

        return $this;
    }

    /**
     * Gets unsubscriptions
     * @return \SendinBlue\Client\Model\GetContactCampaignStatsUnsubscriptions
     */
    public function getUnsubscriptions()
    {
        return $this->container['unsubscriptions'];
    }

    /**
     * Sets unsubscriptions
     * @param \SendinBlue\Client\Model\GetContactCampaignStatsUnsubscriptions $unsubscriptions
     * @return $this
     */
    public function setUnsubscriptions($unsubscriptions)
    {
        $this->container['unsubscriptions'] = $unsubscriptions;

        return $this;
    }

    /**
     * Gets opened
     * @return \SendinBlue\Client\Model\GetContactCampaignStatsOpened[]
     */
    public function getOpened()
    {
        return $this->container['opened'];
    }

    /**
     * Sets opened
     * @param \SendinBlue\Client\Model\GetContactCampaignStatsOpened[] $opened
     * @return $this
     */
    public function setOpened($opened)
    {
        $this->container['opened'] = $opened;

        return $this;
    }

    /**
     * Gets clicked
     * @return \SendinBlue\Client\Model\GetContactCampaignStatsClicked[]
     */
    public function getClicked()
    {
        return $this->container['clicked'];
    }

    /**
     * Sets clicked
     * @param \SendinBlue\Client\Model\GetContactCampaignStatsClicked[] $clicked
     * @return $this
     */
    public function setClicked($clicked)
    {
        $this->container['clicked'] = $clicked;

        return $this;
    }

    /**
     * Gets transacAttributes
     * @return \SendinBlue\Client\Model\GetContactCampaignStatsTransacAttributes[]
     */
    public function getTransacAttributes()
    {
        return $this->container['transacAttributes'];
    }

    /**
     * Sets transacAttributes
     * @param \SendinBlue\Client\Model\GetContactCampaignStatsTransacAttributes[] $transacAttributes
     * @return $this
     */
    public function setTransacAttributes($transacAttributes)
    {
        $this->container['transacAttributes'] = $transacAttributes;

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


