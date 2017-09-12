<?php
/**
 * GetEmailEventReportEvents
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
 * GetEmailEventReportEvents Class Doc Comment
 *
 * @category    Class
 * @package     SendinBlue\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetEmailEventReportEvents implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'getEmailEventReport_events';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'email' => 'string',
        'date' => '\DateTime',
        'messageId' => 'string',
        'event' => 'string',
        'reason' => 'string',
        'tag' => 'string',
        'ip' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'email' => 'email',
        'date' => 'date',
        'messageId' => null,
        'event' => null,
        'reason' => null,
        'tag' => null,
        'ip' => null
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
        'email' => 'email',
        'date' => 'date',
        'messageId' => 'messageId',
        'event' => 'event',
        'reason' => 'reason',
        'tag' => 'tag',
        'ip' => 'ip'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'date' => 'setDate',
        'messageId' => 'setMessageId',
        'event' => 'setEvent',
        'reason' => 'setReason',
        'tag' => 'setTag',
        'ip' => 'setIp'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'date' => 'getDate',
        'messageId' => 'getMessageId',
        'event' => 'getEvent',
        'reason' => 'getReason',
        'tag' => 'getTag',
        'ip' => 'getIp'
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

    const EVENT_BOUNCES = 'bounces';
    const EVENT_HARD_BOUNCES = 'hardBounces';
    const EVENT_SOFT_BOUNCES = 'softBounces';
    const EVENT_DELIVERED = 'delivered';
    const EVENT_SPAM = 'spam';
    const EVENT_REQUESTS = 'requests';
    const EVENT_OPENED = 'opened';
    const EVENT_CLICKS = 'clicks';
    const EVENT_INVALID = 'invalid';
    const EVENT_DEFERRED = 'deferred';
    const EVENT_BLOCKED = 'blocked';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getEventAllowableValues()
    {
        return [
            self::EVENT_BOUNCES,
            self::EVENT_HARD_BOUNCES,
            self::EVENT_SOFT_BOUNCES,
            self::EVENT_DELIVERED,
            self::EVENT_SPAM,
            self::EVENT_REQUESTS,
            self::EVENT_OPENED,
            self::EVENT_CLICKS,
            self::EVENT_INVALID,
            self::EVENT_DEFERRED,
            self::EVENT_BLOCKED,
        ];
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
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['messageId'] = isset($data['messageId']) ? $data['messageId'] : null;
        $this->container['event'] = isset($data['event']) ? $data['event'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['email'] === null) {
            $invalid_properties[] = "'email' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalid_properties[] = "'date' can't be null";
        }
        if ($this->container['messageId'] === null) {
            $invalid_properties[] = "'messageId' can't be null";
        }
        if ($this->container['event'] === null) {
            $invalid_properties[] = "'event' can't be null";
        }
        $allowed_values = $this->getEventAllowableValues();
        if (!in_array($this->container['event'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'event', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if ($this->container['reason'] === null) {
            $invalid_properties[] = "'reason' can't be null";
        }
        if ($this->container['tag'] === null) {
            $invalid_properties[] = "'tag' can't be null";
        }
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

        if ($this->container['email'] === null) {
            return false;
        }
        if ($this->container['date'] === null) {
            return false;
        }
        if ($this->container['messageId'] === null) {
            return false;
        }
        if ($this->container['event'] === null) {
            return false;
        }
        $allowed_values = $this->getEventAllowableValues();
        if (!in_array($this->container['event'], $allowed_values)) {
            return false;
        }
        if ($this->container['reason'] === null) {
            return false;
        }
        if ($this->container['tag'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email Email address which generates the event
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets date
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     * @param \DateTime $date Date on which the event has been generated
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets messageId
     * @return string
     */
    public function getMessageId()
    {
        return $this->container['messageId'];
    }

    /**
     * Sets messageId
     * @param string $messageId Message ID which generated the event
     * @return $this
     */
    public function setMessageId($messageId)
    {
        $this->container['messageId'] = $messageId;

        return $this;
    }

    /**
     * Gets event
     * @return string
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     * @param string $event Event which occured
     * @return $this
     */
    public function setEvent($event)
    {
        $allowed_values = $this->getEventAllowableValues();
        if (!in_array($event, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'event', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['event'] = $event;

        return $this;
    }

    /**
     * Gets reason
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     * @param string $reason Reason of bounce (only availble if the event is hardbounce or softbounce)
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets tag
     * @return string
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     * @param string $tag Tag of the email which generated the event
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets ip
     * @return string
     */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
     * Sets ip
     * @param string $ip IP from which the user has opened the email or clicked on the link (only availble if the event is opened or clicks)
     * @return $this
     */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;

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


