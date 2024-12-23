<?php
/**
 * BuyerWithIncludesShippingInner
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * KeyCRM OpenAPI documentation
 *
 * Опис REST маршрутів для роботи з KeyCRM OpenAPI.<br><br> <b>Зверніть увагу:</b> <br> 1. Для авторизації потрібно передавати заголовок у форматі Bearer + <a href=\"https://help.keycrm.app/uk/process-automation-api-and-more/where-to-get-an-api-key\" target=\"_blank\">APIkey</a> (authorization:[Bearer `ваш-API-ключ`]); <br> 2. Є обмеження до 60 запитів на хвилину з однієї IP-адреси по API-ключу; <br> 3. Час у всіх сутностях використовується UTC (GMT+0) - при зчитуванні (GET-запити), при виборі (фільтрації) по часу створення сутності, а також при створенні сутностей (POST).
 *
 * The version of the OpenAPI document: 1.2.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * BuyerWithIncludesShippingInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BuyerWithIncludesShippingInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BuyerWithIncludes_shipping_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address' => 'string',
        'additional_address' => 'string',
        'city' => 'string',
        'region' => 'string',
        'zip_code' => 'string',
        'country' => 'string',
        'recipient_full_name' => 'string',
        'recipient_phone' => 'string',
        'warehouse_ref' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address' => null,
        'additional_address' => null,
        'city' => null,
        'region' => null,
        'zip_code' => null,
        'country' => null,
        'recipient_full_name' => null,
        'recipient_phone' => null,
        'warehouse_ref' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'address' => true,
        'additional_address' => false,
        'city' => true,
        'region' => true,
        'zip_code' => true,
        'country' => true,
        'recipient_full_name' => true,
        'recipient_phone' => true,
        'warehouse_ref' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'address' => 'address',
        'additional_address' => 'additional_address',
        'city' => 'city',
        'region' => 'region',
        'zip_code' => 'zip_code',
        'country' => 'country',
        'recipient_full_name' => 'recipient_full_name',
        'recipient_phone' => 'recipient_phone',
        'warehouse_ref' => 'warehouse_ref'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'additional_address' => 'setAdditionalAddress',
        'city' => 'setCity',
        'region' => 'setRegion',
        'zip_code' => 'setZipCode',
        'country' => 'setCountry',
        'recipient_full_name' => 'setRecipientFullName',
        'recipient_phone' => 'setRecipientPhone',
        'warehouse_ref' => 'setWarehouseRef'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'additional_address' => 'getAdditionalAddress',
        'city' => 'getCity',
        'region' => 'getRegion',
        'zip_code' => 'getZipCode',
        'country' => 'getCountry',
        'recipient_full_name' => 'getRecipientFullName',
        'recipient_phone' => 'getRecipientPhone',
        'warehouse_ref' => 'getWarehouseRef'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('additional_address', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('region', $data ?? [], null);
        $this->setIfExists('zip_code', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('recipient_full_name', $data ?? [], null);
        $this->setIfExists('recipient_phone', $data ?? [], null);
        $this->setIfExists('warehouse_ref', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address Адреса доставки
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            array_push($this->openAPINullablesSetToNull, 'address');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets additional_address
     *
     * @return string|null
     */
    public function getAdditionalAddress()
    {
        return $this->container['additional_address'];
    }

    /**
     * Sets additional_address
     *
     * @param string|null $additional_address additional_address
     *
     * @return self
     */
    public function setAdditionalAddress($additional_address)
    {
        if (is_null($additional_address)) {
            throw new \InvalidArgumentException('non-nullable additional_address cannot be null');
        }
        $this->container['additional_address'] = $additional_address;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city Місто доставки
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            array_push($this->openAPINullablesSetToNull, 'city');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('city', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region Область, штат, регіон
     *
     * @return self
     */
    public function setRegion($region)
    {
        if (is_null($region)) {
            array_push($this->openAPINullablesSetToNull, 'region');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('region', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets zip_code
     *
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->container['zip_code'];
    }

    /**
     * Sets zip_code
     *
     * @param string|null $zip_code Індекс
     *
     * @return self
     */
    public function setZipCode($zip_code)
    {
        if (is_null($zip_code)) {
            array_push($this->openAPINullablesSetToNull, 'zip_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('zip_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['zip_code'] = $zip_code;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country Країна доставки
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            array_push($this->openAPINullablesSetToNull, 'country');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('country', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets recipient_full_name
     *
     * @return string|null
     */
    public function getRecipientFullName()
    {
        return $this->container['recipient_full_name'];
    }

    /**
     * Sets recipient_full_name
     *
     * @param string|null $recipient_full_name Ім'я отримувача (якщо відрізняється від покупця)
     *
     * @return self
     */
    public function setRecipientFullName($recipient_full_name)
    {
        if (is_null($recipient_full_name)) {
            array_push($this->openAPINullablesSetToNull, 'recipient_full_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('recipient_full_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['recipient_full_name'] = $recipient_full_name;

        return $this;
    }

    /**
     * Gets recipient_phone
     *
     * @return string|null
     */
    public function getRecipientPhone()
    {
        return $this->container['recipient_phone'];
    }

    /**
     * Sets recipient_phone
     *
     * @param string|null $recipient_phone Номер телефону отримувача (якщо відрізняється від покупця)
     *
     * @return self
     */
    public function setRecipientPhone($recipient_phone)
    {
        if (is_null($recipient_phone)) {
            array_push($this->openAPINullablesSetToNull, 'recipient_phone');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('recipient_phone', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['recipient_phone'] = $recipient_phone;

        return $this;
    }

    /**
     * Gets warehouse_ref
     *
     * @return string|null
     */
    public function getWarehouseRef()
    {
        return $this->container['warehouse_ref'];
    }

    /**
     * Sets warehouse_ref
     *
     * @param string|null $warehouse_ref UUID складу Нової Пошти (обов'язково з параметром delivery_service_id - ID служби доставки НП в СРМ)
     *
     * @return self
     */
    public function setWarehouseRef($warehouse_ref)
    {
        if (is_null($warehouse_ref)) {
            array_push($this->openAPINullablesSetToNull, 'warehouse_ref');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('warehouse_ref', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['warehouse_ref'] = $warehouse_ref;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

