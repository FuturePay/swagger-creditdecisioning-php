<?php
/**
 * Data
 *
 * PHP version 5
 *
 * @category Class
 * @package  FuturePay\SDK\CreditDecisioning
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Credit Decision
 *
 * This is a microservice used to make a credit decision for a user based on input
 *
 * OpenAPI spec version: 1.0.0
 * Contact: developer@futurepay.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace FuturePay\SDK\CreditDecisioning\Model;

use \ArrayAccess;

/**
 * Data Class Doc Comment
 *
 * @category    Class
 * @package     FuturePay\SDK\CreditDecisioning
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Data implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'user' => '\FuturePay\SDK\CreditDecisioning\Model\InputUser',
        's3UrlCreditFile' => 'string',
        'categoryCreditRule' => '\FuturePay\SDK\CreditDecisioning\Model\InputCategoryCreditRule'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'user' => 'user',
        's3UrlCreditFile' => 's3_url_credit_file',
        'categoryCreditRule' => 'category_credit_rule'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'user' => 'setUser',
        's3UrlCreditFile' => 'setS3UrlCreditFile',
        'categoryCreditRule' => 'setCategoryCreditRule'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'user' => 'getUser',
        's3UrlCreditFile' => 'getS3UrlCreditFile',
        'categoryCreditRule' => 'getCategoryCreditRule'
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
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['s3UrlCreditFile'] = isset($data['s3UrlCreditFile']) ? $data['s3UrlCreditFile'] : null;
        $this->container['categoryCreditRule'] = isset($data['categoryCreditRule']) ? $data['categoryCreditRule'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['user'] === null) {
            $invalid_properties[] = "'user' can't be null";
        }
        if ($this->container['s3UrlCreditFile'] === null) {
            $invalid_properties[] = "'s3UrlCreditFile' can't be null";
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

        if ($this->container['user'] === null) {
            return false;
        }
        if ($this->container['s3UrlCreditFile'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets user
     * @return \FuturePay\SDK\CreditDecisioning\Model\InputUser
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     * @param \FuturePay\SDK\CreditDecisioning\Model\InputUser $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets s3UrlCreditFile
     * @return string
     */
    public function getS3UrlCreditFile()
    {
        return $this->container['s3UrlCreditFile'];
    }

    /**
     * Sets s3UrlCreditFile
     * @param string $s3UrlCreditFile
     * @return $this
     */
    public function setS3UrlCreditFile($s3UrlCreditFile)
    {
        $this->container['s3UrlCreditFile'] = $s3UrlCreditFile;

        return $this;
    }

    /**
     * Gets categoryCreditRule
     * @return \FuturePay\SDK\CreditDecisioning\Model\InputCategoryCreditRule
     */
    public function getCategoryCreditRule()
    {
        return $this->container['categoryCreditRule'];
    }

    /**
     * Sets categoryCreditRule
     * @param \FuturePay\SDK\CreditDecisioning\Model\InputCategoryCreditRule $categoryCreditRule
     * @return $this
     */
    public function setCategoryCreditRule($categoryCreditRule)
    {
        $this->container['categoryCreditRule'] = $categoryCreditRule;

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
            return json_encode(\FuturePay\SDK\CreditDecisioning\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\FuturePay\SDK\CreditDecisioning\ObjectSerializer::sanitizeForSerialization($this));
    }
}

