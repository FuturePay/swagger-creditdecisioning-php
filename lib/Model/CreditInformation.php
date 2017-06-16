<?php
/**
 * CreditInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * CreditInformation Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreditInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'credit_information';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ofacMessage' => 'string',
        'ficoScore' => 'int',
        'vantageScore' => 'int',
        'incomeEstimatorScore' => 'int',
        'debitIncomeEstimatorScore' => 'int',
        'ssn' => 'string',
        'dob' => 'string',
        'fraudAlert' => '\Swagger\Client\Model\FraudAlert',
        'deceasedDate' => 'string'
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
        'ofacMessage' => 'ofac_message',
        'ficoScore' => 'fico_score',
        'vantageScore' => 'vantage_score',
        'incomeEstimatorScore' => 'income_estimator_score',
        'debitIncomeEstimatorScore' => 'debit_income_estimator_score',
        'ssn' => 'ssn',
        'dob' => 'dob',
        'fraudAlert' => 'fraud_alert',
        'deceasedDate' => 'deceased_date'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'ofacMessage' => 'setOfacMessage',
        'ficoScore' => 'setFicoScore',
        'vantageScore' => 'setVantageScore',
        'incomeEstimatorScore' => 'setIncomeEstimatorScore',
        'debitIncomeEstimatorScore' => 'setDebitIncomeEstimatorScore',
        'ssn' => 'setSsn',
        'dob' => 'setDob',
        'fraudAlert' => 'setFraudAlert',
        'deceasedDate' => 'setDeceasedDate'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'ofacMessage' => 'getOfacMessage',
        'ficoScore' => 'getFicoScore',
        'vantageScore' => 'getVantageScore',
        'incomeEstimatorScore' => 'getIncomeEstimatorScore',
        'debitIncomeEstimatorScore' => 'getDebitIncomeEstimatorScore',
        'ssn' => 'getSsn',
        'dob' => 'getDob',
        'fraudAlert' => 'getFraudAlert',
        'deceasedDate' => 'getDeceasedDate'
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
        $this->container['ofacMessage'] = isset($data['ofacMessage']) ? $data['ofacMessage'] : null;
        $this->container['ficoScore'] = isset($data['ficoScore']) ? $data['ficoScore'] : null;
        $this->container['vantageScore'] = isset($data['vantageScore']) ? $data['vantageScore'] : null;
        $this->container['incomeEstimatorScore'] = isset($data['incomeEstimatorScore']) ? $data['incomeEstimatorScore'] : null;
        $this->container['debitIncomeEstimatorScore'] = isset($data['debitIncomeEstimatorScore']) ? $data['debitIncomeEstimatorScore'] : null;
        $this->container['ssn'] = isset($data['ssn']) ? $data['ssn'] : null;
        $this->container['dob'] = isset($data['dob']) ? $data['dob'] : null;
        $this->container['fraudAlert'] = isset($data['fraudAlert']) ? $data['fraudAlert'] : null;
        $this->container['deceasedDate'] = isset($data['deceasedDate']) ? $data['deceasedDate'] : null;
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
     * Gets ofacMessage
     * @return string
     */
    public function getOfacMessage()
    {
        return $this->container['ofacMessage'];
    }

    /**
     * Sets ofacMessage
     * @param string $ofacMessage
     * @return $this
     */
    public function setOfacMessage($ofacMessage)
    {
        $this->container['ofacMessage'] = $ofacMessage;

        return $this;
    }

    /**
     * Gets ficoScore
     * @return int
     */
    public function getFicoScore()
    {
        return $this->container['ficoScore'];
    }

    /**
     * Sets ficoScore
     * @param int $ficoScore
     * @return $this
     */
    public function setFicoScore($ficoScore)
    {
        $this->container['ficoScore'] = $ficoScore;

        return $this;
    }

    /**
     * Gets vantageScore
     * @return int
     */
    public function getVantageScore()
    {
        return $this->container['vantageScore'];
    }

    /**
     * Sets vantageScore
     * @param int $vantageScore
     * @return $this
     */
    public function setVantageScore($vantageScore)
    {
        $this->container['vantageScore'] = $vantageScore;

        return $this;
    }

    /**
     * Gets incomeEstimatorScore
     * @return int
     */
    public function getIncomeEstimatorScore()
    {
        return $this->container['incomeEstimatorScore'];
    }

    /**
     * Sets incomeEstimatorScore
     * @param int $incomeEstimatorScore
     * @return $this
     */
    public function setIncomeEstimatorScore($incomeEstimatorScore)
    {
        $this->container['incomeEstimatorScore'] = $incomeEstimatorScore;

        return $this;
    }

    /**
     * Gets debitIncomeEstimatorScore
     * @return int
     */
    public function getDebitIncomeEstimatorScore()
    {
        return $this->container['debitIncomeEstimatorScore'];
    }

    /**
     * Sets debitIncomeEstimatorScore
     * @param int $debitIncomeEstimatorScore
     * @return $this
     */
    public function setDebitIncomeEstimatorScore($debitIncomeEstimatorScore)
    {
        $this->container['debitIncomeEstimatorScore'] = $debitIncomeEstimatorScore;

        return $this;
    }

    /**
     * Gets ssn
     * @return string
     */
    public function getSsn()
    {
        return $this->container['ssn'];
    }

    /**
     * Sets ssn
     * @param string $ssn
     * @return $this
     */
    public function setSsn($ssn)
    {
        $this->container['ssn'] = $ssn;

        return $this;
    }

    /**
     * Gets dob
     * @return string
     */
    public function getDob()
    {
        return $this->container['dob'];
    }

    /**
     * Sets dob
     * @param string $dob
     * @return $this
     */
    public function setDob($dob)
    {
        $this->container['dob'] = $dob;

        return $this;
    }

    /**
     * Gets fraudAlert
     * @return \Swagger\Client\Model\FraudAlert
     */
    public function getFraudAlert()
    {
        return $this->container['fraudAlert'];
    }

    /**
     * Sets fraudAlert
     * @param \Swagger\Client\Model\FraudAlert $fraudAlert
     * @return $this
     */
    public function setFraudAlert($fraudAlert)
    {
        $this->container['fraudAlert'] = $fraudAlert;

        return $this;
    }

    /**
     * Gets deceasedDate
     * @return string
     */
    public function getDeceasedDate()
    {
        return $this->container['deceasedDate'];
    }

    /**
     * Sets deceasedDate
     * @param string $deceasedDate
     * @return $this
     */
    public function setDeceasedDate($deceasedDate)
    {
        $this->container['deceasedDate'] = $deceasedDate;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


