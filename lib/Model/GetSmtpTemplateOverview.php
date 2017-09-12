<?php
/**
 * GetSmtpTemplateOverview
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
 * GetSmtpTemplateOverview Class Doc Comment
 *
 * @category    Class
 * @package     SendinBlue\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetSmtpTemplateOverview implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'getSmtpTemplateOverview';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'subject' => 'string',
        'isActive' => 'bool',
        'testSent' => 'bool',
        'sender' => '\SendinBlue\Client\Model\GetSmtpTemplateOverviewSender',
        'replyTo' => 'string',
        'toField' => 'string',
        'tag' => 'string',
        'htmlContent' => 'string',
        'createdAt' => 'string',
        'modifiedAt' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'name' => null,
        'subject' => null,
        'isActive' => null,
        'testSent' => null,
        'sender' => null,
        'replyTo' => 'email',
        'toField' => null,
        'tag' => null,
        'htmlContent' => null,
        'createdAt' => null,
        'modifiedAt' => null
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
        'id' => 'id',
        'name' => 'name',
        'subject' => 'subject',
        'isActive' => 'isActive',
        'testSent' => 'testSent',
        'sender' => 'sender',
        'replyTo' => 'replyTo',
        'toField' => 'toField',
        'tag' => 'tag',
        'htmlContent' => 'htmlContent',
        'createdAt' => 'createdAt',
        'modifiedAt' => 'modifiedAt'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'subject' => 'setSubject',
        'isActive' => 'setIsActive',
        'testSent' => 'setTestSent',
        'sender' => 'setSender',
        'replyTo' => 'setReplyTo',
        'toField' => 'setToField',
        'tag' => 'setTag',
        'htmlContent' => 'setHtmlContent',
        'createdAt' => 'setCreatedAt',
        'modifiedAt' => 'setModifiedAt'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'subject' => 'getSubject',
        'isActive' => 'getIsActive',
        'testSent' => 'getTestSent',
        'sender' => 'getSender',
        'replyTo' => 'getReplyTo',
        'toField' => 'getToField',
        'tag' => 'getTag',
        'htmlContent' => 'getHtmlContent',
        'createdAt' => 'getCreatedAt',
        'modifiedAt' => 'getModifiedAt'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['isActive'] = isset($data['isActive']) ? $data['isActive'] : null;
        $this->container['testSent'] = isset($data['testSent']) ? $data['testSent'] : null;
        $this->container['sender'] = isset($data['sender']) ? $data['sender'] : null;
        $this->container['replyTo'] = isset($data['replyTo']) ? $data['replyTo'] : null;
        $this->container['toField'] = isset($data['toField']) ? $data['toField'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['htmlContent'] = isset($data['htmlContent']) ? $data['htmlContent'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['modifiedAt'] = isset($data['modifiedAt']) ? $data['modifiedAt'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['subject'] === null) {
            $invalid_properties[] = "'subject' can't be null";
        }
        if ($this->container['isActive'] === null) {
            $invalid_properties[] = "'isActive' can't be null";
        }
        if ($this->container['testSent'] === null) {
            $invalid_properties[] = "'testSent' can't be null";
        }
        if ($this->container['replyTo'] === null) {
            $invalid_properties[] = "'replyTo' can't be null";
        }
        if ($this->container['toField'] === null) {
            $invalid_properties[] = "'toField' can't be null";
        }
        if ($this->container['tag'] === null) {
            $invalid_properties[] = "'tag' can't be null";
        }
        if ($this->container['htmlContent'] === null) {
            $invalid_properties[] = "'htmlContent' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalid_properties[] = "'createdAt' can't be null";
        }
        if (!preg_match("/^([1-9]\\d{3}-\\d{2}-\\d{2} [0-2]\\d:[0-5]\\d:[0-5]\\d)?$/", $this->container['createdAt'])) {
            $invalid_properties[] = "invalid value for 'createdAt', must be conform to the pattern /^([1-9]\\d{3}-\\d{2}-\\d{2} [0-2]\\d:[0-5]\\d:[0-5]\\d)?$/.";
        }

        if ($this->container['modifiedAt'] === null) {
            $invalid_properties[] = "'modifiedAt' can't be null";
        }
        if (!preg_match("/^([1-9]\\d{3}-\\d{2}-\\d{2} [0-2]\\d:[0-5]\\d:[0-5]\\d)?$/", $this->container['modifiedAt'])) {
            $invalid_properties[] = "invalid value for 'modifiedAt', must be conform to the pattern /^([1-9]\\d{3}-\\d{2}-\\d{2} [0-2]\\d:[0-5]\\d:[0-5]\\d)?$/.";
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

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['subject'] === null) {
            return false;
        }
        if ($this->container['isActive'] === null) {
            return false;
        }
        if ($this->container['testSent'] === null) {
            return false;
        }
        if ($this->container['replyTo'] === null) {
            return false;
        }
        if ($this->container['toField'] === null) {
            return false;
        }
        if ($this->container['tag'] === null) {
            return false;
        }
        if ($this->container['htmlContent'] === null) {
            return false;
        }
        if ($this->container['createdAt'] === null) {
            return false;
        }
        if (!preg_match("/^([1-9]\\d{3}-\\d{2}-\\d{2} [0-2]\\d:[0-5]\\d:[0-5]\\d)?$/", $this->container['createdAt'])) {
            return false;
        }
        if ($this->container['modifiedAt'] === null) {
            return false;
        }
        if (!preg_match("/^([1-9]\\d{3}-\\d{2}-\\d{2} [0-2]\\d:[0-5]\\d:[0-5]\\d)?$/", $this->container['modifiedAt'])) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id ID of the template
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name of the template
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets subject
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     * @param string $subject Subject of the template
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets isActive
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['isActive'];
    }

    /**
     * Sets isActive
     * @param bool $isActive Status of template (true=active, false=inactive)
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->container['isActive'] = $isActive;

        return $this;
    }

    /**
     * Gets testSent
     * @return bool
     */
    public function getTestSent()
    {
        return $this->container['testSent'];
    }

    /**
     * Sets testSent
     * @param bool $testSent Status of test sending for the template (true=test email has been sent, false=test email has not been sent)
     * @return $this
     */
    public function setTestSent($testSent)
    {
        $this->container['testSent'] = $testSent;

        return $this;
    }

    /**
     * Gets sender
     * @return \SendinBlue\Client\Model\GetSmtpTemplateOverviewSender
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     * @param \SendinBlue\Client\Model\GetSmtpTemplateOverviewSender $sender
     * @return $this
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets replyTo
     * @return string
     */
    public function getReplyTo()
    {
        return $this->container['replyTo'];
    }

    /**
     * Sets replyTo
     * @param string $replyTo Email defined as the \"Reply to\" for the template
     * @return $this
     */
    public function setReplyTo($replyTo)
    {
        $this->container['replyTo'] = $replyTo;

        return $this;
    }

    /**
     * Gets toField
     * @return string
     */
    public function getToField()
    {
        return $this->container['toField'];
    }

    /**
     * Sets toField
     * @param string $toField Customisation of the \"to\" field for the template
     * @return $this
     */
    public function setToField($toField)
    {
        $this->container['toField'] = $toField;

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
     * @param string $tag Tag of the template
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets htmlContent
     * @return string
     */
    public function getHtmlContent()
    {
        return $this->container['htmlContent'];
    }

    /**
     * Sets htmlContent
     * @param string $htmlContent HTML content of the template
     * @return $this
     */
    public function setHtmlContent($htmlContent)
    {
        $this->container['htmlContent'] = $htmlContent;

        return $this;
    }

    /**
     * Gets createdAt
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     * @param string $createdAt Creation date of the template (YYYY-MM-DD HH:mm:ss)
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {

        if ((!preg_match("/^([1-9]\\d{3}-\\d{2}-\\d{2} [0-2]\\d:[0-5]\\d:[0-5]\\d)?$/", $createdAt))) {
            throw new \InvalidArgumentException("invalid value for $createdAt when calling GetSmtpTemplateOverview., must conform to the pattern /^([1-9]\\d{3}-\\d{2}-\\d{2} [0-2]\\d:[0-5]\\d:[0-5]\\d)?$/.");
        }

        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets modifiedAt
     * @return string
     */
    public function getModifiedAt()
    {
        return $this->container['modifiedAt'];
    }

    /**
     * Sets modifiedAt
     * @param string $modifiedAt Last modification date of the template (YYYY-MM-DD HH:mm:ss)
     * @return $this
     */
    public function setModifiedAt($modifiedAt)
    {

        if ((!preg_match("/^([1-9]\\d{3}-\\d{2}-\\d{2} [0-2]\\d:[0-5]\\d:[0-5]\\d)?$/", $modifiedAt))) {
            throw new \InvalidArgumentException("invalid value for $modifiedAt when calling GetSmtpTemplateOverview., must conform to the pattern /^([1-9]\\d{3}-\\d{2}-\\d{2} [0-2]\\d:[0-5]\\d:[0-5]\\d)?$/.");
        }

        $this->container['modifiedAt'] = $modifiedAt;

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


