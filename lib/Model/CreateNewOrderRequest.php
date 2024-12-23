<?php
/**
 * CreateNewOrderRequest
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
 * CreateNewOrderRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateNewOrderRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'createNewOrder_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'source_id' => 'int',
        'source_uuid' => 'string',
        'buyer_comment' => 'string',
        'manager_id' => 'int',
        'manager_comment' => 'string',
        'promocode' => 'string',
        'discount_percent' => 'float',
        'discount_amount' => 'float',
        'shipping_price' => 'float',
        'wrap_price' => 'float',
        'gift_message' => 'string',
        'is_gift' => 'bool',
        'gift_wrap' => 'bool',
        'taxes' => 'float',
        'ordered_at' => 'string',
        'buyer' => '\OpenAPI\Client\Model\CreateNewOrderRequestBuyer',
        'shipping' => '\OpenAPI\Client\Model\CreateNewOrderRequestShipping',
        'marketing' => '\OpenAPI\Client\Model\CreateNewOrderRequestMarketing',
        'products' => '\OpenAPI\Client\Model\CreateNewOrderRequestProductsInner[]',
        'payments' => '\OpenAPI\Client\Model\CreateNewOrderRequestPaymentsInner[]',
        'custom_fields' => '\OpenAPI\Client\Model\CreateNewOrderRequestCustomFieldsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'source_id' => null,
        'source_uuid' => null,
        'buyer_comment' => null,
        'manager_id' => null,
        'manager_comment' => null,
        'promocode' => null,
        'discount_percent' => null,
        'discount_amount' => null,
        'shipping_price' => null,
        'wrap_price' => null,
        'gift_message' => null,
        'is_gift' => null,
        'gift_wrap' => null,
        'taxes' => null,
        'ordered_at' => null,
        'buyer' => null,
        'shipping' => null,
        'marketing' => null,
        'products' => null,
        'payments' => null,
        'custom_fields' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'source_id' => false,
        'source_uuid' => true,
        'buyer_comment' => true,
        'manager_id' => true,
        'manager_comment' => true,
        'promocode' => true,
        'discount_percent' => true,
        'discount_amount' => true,
        'shipping_price' => true,
        'wrap_price' => true,
        'gift_message' => true,
        'is_gift' => false,
        'gift_wrap' => false,
        'taxes' => true,
        'ordered_at' => true,
        'buyer' => false,
        'shipping' => false,
        'marketing' => false,
        'products' => false,
        'payments' => false,
        'custom_fields' => false
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
        'source_id' => 'source_id',
        'source_uuid' => 'source_uuid',
        'buyer_comment' => 'buyer_comment',
        'manager_id' => 'manager_id',
        'manager_comment' => 'manager_comment',
        'promocode' => 'promocode',
        'discount_percent' => 'discount_percent',
        'discount_amount' => 'discount_amount',
        'shipping_price' => 'shipping_price',
        'wrap_price' => 'wrap_price',
        'gift_message' => 'gift_message',
        'is_gift' => 'is_gift',
        'gift_wrap' => 'gift_wrap',
        'taxes' => 'taxes',
        'ordered_at' => 'ordered_at',
        'buyer' => 'buyer',
        'shipping' => 'shipping',
        'marketing' => 'marketing',
        'products' => 'products',
        'payments' => 'payments',
        'custom_fields' => 'custom_fields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'source_id' => 'setSourceId',
        'source_uuid' => 'setSourceUuid',
        'buyer_comment' => 'setBuyerComment',
        'manager_id' => 'setManagerId',
        'manager_comment' => 'setManagerComment',
        'promocode' => 'setPromocode',
        'discount_percent' => 'setDiscountPercent',
        'discount_amount' => 'setDiscountAmount',
        'shipping_price' => 'setShippingPrice',
        'wrap_price' => 'setWrapPrice',
        'gift_message' => 'setGiftMessage',
        'is_gift' => 'setIsGift',
        'gift_wrap' => 'setGiftWrap',
        'taxes' => 'setTaxes',
        'ordered_at' => 'setOrderedAt',
        'buyer' => 'setBuyer',
        'shipping' => 'setShipping',
        'marketing' => 'setMarketing',
        'products' => 'setProducts',
        'payments' => 'setPayments',
        'custom_fields' => 'setCustomFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'source_id' => 'getSourceId',
        'source_uuid' => 'getSourceUuid',
        'buyer_comment' => 'getBuyerComment',
        'manager_id' => 'getManagerId',
        'manager_comment' => 'getManagerComment',
        'promocode' => 'getPromocode',
        'discount_percent' => 'getDiscountPercent',
        'discount_amount' => 'getDiscountAmount',
        'shipping_price' => 'getShippingPrice',
        'wrap_price' => 'getWrapPrice',
        'gift_message' => 'getGiftMessage',
        'is_gift' => 'getIsGift',
        'gift_wrap' => 'getGiftWrap',
        'taxes' => 'getTaxes',
        'ordered_at' => 'getOrderedAt',
        'buyer' => 'getBuyer',
        'shipping' => 'getShipping',
        'marketing' => 'getMarketing',
        'products' => 'getProducts',
        'payments' => 'getPayments',
        'custom_fields' => 'getCustomFields'
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
        $this->setIfExists('source_id', $data ?? [], null);
        $this->setIfExists('source_uuid', $data ?? [], null);
        $this->setIfExists('buyer_comment', $data ?? [], null);
        $this->setIfExists('manager_id', $data ?? [], null);
        $this->setIfExists('manager_comment', $data ?? [], null);
        $this->setIfExists('promocode', $data ?? [], null);
        $this->setIfExists('discount_percent', $data ?? [], null);
        $this->setIfExists('discount_amount', $data ?? [], null);
        $this->setIfExists('shipping_price', $data ?? [], null);
        $this->setIfExists('wrap_price', $data ?? [], null);
        $this->setIfExists('gift_message', $data ?? [], null);
        $this->setIfExists('is_gift', $data ?? [], null);
        $this->setIfExists('gift_wrap', $data ?? [], null);
        $this->setIfExists('taxes', $data ?? [], null);
        $this->setIfExists('ordered_at', $data ?? [], null);
        $this->setIfExists('buyer', $data ?? [], null);
        $this->setIfExists('shipping', $data ?? [], null);
        $this->setIfExists('marketing', $data ?? [], null);
        $this->setIfExists('products', $data ?? [], null);
        $this->setIfExists('payments', $data ?? [], null);
        $this->setIfExists('custom_fields', $data ?? [], null);
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

        if ($this->container['source_id'] === null) {
            $invalidProperties[] = "'source_id' can't be null";
        }
        if ($this->container['buyer'] === null) {
            $invalidProperties[] = "'buyer' can't be null";
        }
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
     * Gets source_id
     *
     * @return int
     */
    public function getSourceId()
    {
        return $this->container['source_id'];
    }

    /**
     * Sets source_id
     *
     * @param int $source_id Ідентифікатор джерела. Обов'язкове поле
     *
     * @return self
     */
    public function setSourceId($source_id)
    {
        if (is_null($source_id)) {
            throw new \InvalidArgumentException('non-nullable source_id cannot be null');
        }
        $this->container['source_id'] = $source_id;

        return $this;
    }

    /**
     * Gets source_uuid
     *
     * @return string|null
     */
    public function getSourceUuid()
    {
        return $this->container['source_uuid'];
    }

    /**
     * Sets source_uuid
     *
     * @param string|null $source_uuid Номер замовлення у джерелі
     *
     * @return self
     */
    public function setSourceUuid($source_uuid)
    {
        if (is_null($source_uuid)) {
            array_push($this->openAPINullablesSetToNull, 'source_uuid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('source_uuid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['source_uuid'] = $source_uuid;

        return $this;
    }

    /**
     * Gets buyer_comment
     *
     * @return string|null
     */
    public function getBuyerComment()
    {
        return $this->container['buyer_comment'];
    }

    /**
     * Sets buyer_comment
     *
     * @param string|null $buyer_comment Коментар покупця
     *
     * @return self
     */
    public function setBuyerComment($buyer_comment)
    {
        if (is_null($buyer_comment)) {
            array_push($this->openAPINullablesSetToNull, 'buyer_comment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('buyer_comment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['buyer_comment'] = $buyer_comment;

        return $this;
    }

    /**
     * Gets manager_id
     *
     * @return int|null
     */
    public function getManagerId()
    {
        return $this->container['manager_id'];
    }

    /**
     * Sets manager_id
     *
     * @param int|null $manager_id Ідентифікатор відповідального менеджера
     *
     * @return self
     */
    public function setManagerId($manager_id)
    {
        if (is_null($manager_id)) {
            array_push($this->openAPINullablesSetToNull, 'manager_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('manager_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['manager_id'] = $manager_id;

        return $this;
    }

    /**
     * Gets manager_comment
     *
     * @return string|null
     */
    public function getManagerComment()
    {
        return $this->container['manager_comment'];
    }

    /**
     * Sets manager_comment
     *
     * @param string|null $manager_comment Коментар менеджера
     *
     * @return self
     */
    public function setManagerComment($manager_comment)
    {
        if (is_null($manager_comment)) {
            array_push($this->openAPINullablesSetToNull, 'manager_comment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('manager_comment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['manager_comment'] = $manager_comment;

        return $this;
    }

    /**
     * Gets promocode
     *
     * @return string|null
     */
    public function getPromocode()
    {
        return $this->container['promocode'];
    }

    /**
     * Sets promocode
     *
     * @param string|null $promocode Промо код
     *
     * @return self
     */
    public function setPromocode($promocode)
    {
        if (is_null($promocode)) {
            array_push($this->openAPINullablesSetToNull, 'promocode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('promocode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['promocode'] = $promocode;

        return $this;
    }

    /**
     * Gets discount_percent
     *
     * @return float|null
     */
    public function getDiscountPercent()
    {
        return $this->container['discount_percent'];
    }

    /**
     * Sets discount_percent
     *
     * @param float|null $discount_percent Знижка на замовлення у %
     *
     * @return self
     */
    public function setDiscountPercent($discount_percent)
    {
        if (is_null($discount_percent)) {
            array_push($this->openAPINullablesSetToNull, 'discount_percent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('discount_percent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['discount_percent'] = $discount_percent;

        return $this;
    }

    /**
     * Gets discount_amount
     *
     * @return float|null
     */
    public function getDiscountAmount()
    {
        return $this->container['discount_amount'];
    }

    /**
     * Sets discount_amount
     *
     * @param float|null $discount_amount Знижка на замовлення фіксована
     *
     * @return self
     */
    public function setDiscountAmount($discount_amount)
    {
        if (is_null($discount_amount)) {
            array_push($this->openAPINullablesSetToNull, 'discount_amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('discount_amount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['discount_amount'] = $discount_amount;

        return $this;
    }

    /**
     * Gets shipping_price
     *
     * @return float|null
     */
    public function getShippingPrice()
    {
        return $this->container['shipping_price'];
    }

    /**
     * Sets shipping_price
     *
     * @param float|null $shipping_price Вартість доставки
     *
     * @return self
     */
    public function setShippingPrice($shipping_price)
    {
        if (is_null($shipping_price)) {
            array_push($this->openAPINullablesSetToNull, 'shipping_price');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shipping_price', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shipping_price'] = $shipping_price;

        return $this;
    }

    /**
     * Gets wrap_price
     *
     * @return float|null
     */
    public function getWrapPrice()
    {
        return $this->container['wrap_price'];
    }

    /**
     * Sets wrap_price
     *
     * @param float|null $wrap_price Вартість подарункової упаковки
     *
     * @return self
     */
    public function setWrapPrice($wrap_price)
    {
        if (is_null($wrap_price)) {
            array_push($this->openAPINullablesSetToNull, 'wrap_price');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('wrap_price', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['wrap_price'] = $wrap_price;

        return $this;
    }

    /**
     * Gets gift_message
     *
     * @return string|null
     */
    public function getGiftMessage()
    {
        return $this->container['gift_message'];
    }

    /**
     * Sets gift_message
     *
     * @param string|null $gift_message Привітальне повідомлення
     *
     * @return self
     */
    public function setGiftMessage($gift_message)
    {
        if (is_null($gift_message)) {
            array_push($this->openAPINullablesSetToNull, 'gift_message');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('gift_message', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['gift_message'] = $gift_message;

        return $this;
    }

    /**
     * Gets is_gift
     *
     * @return bool|null
     */
    public function getIsGift()
    {
        return $this->container['is_gift'];
    }

    /**
     * Sets is_gift
     *
     * @param bool|null $is_gift Ознака, що замовлення для подарунку
     *
     * @return self
     */
    public function setIsGift($is_gift)
    {
        if (is_null($is_gift)) {
            throw new \InvalidArgumentException('non-nullable is_gift cannot be null');
        }
        $this->container['is_gift'] = $is_gift;

        return $this;
    }

    /**
     * Gets gift_wrap
     *
     * @return bool|null
     */
    public function getGiftWrap()
    {
        return $this->container['gift_wrap'];
    }

    /**
     * Sets gift_wrap
     *
     * @param bool|null $gift_wrap Ознака, що потрібна подарункова упаковка
     *
     * @return self
     */
    public function setGiftWrap($gift_wrap)
    {
        if (is_null($gift_wrap)) {
            throw new \InvalidArgumentException('non-nullable gift_wrap cannot be null');
        }
        $this->container['gift_wrap'] = $gift_wrap;

        return $this;
    }

    /**
     * Gets taxes
     *
     * @return float|null
     */
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes
     *
     * @param float|null $taxes Сума податків
     *
     * @return self
     */
    public function setTaxes($taxes)
    {
        if (is_null($taxes)) {
            array_push($this->openAPINullablesSetToNull, 'taxes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('taxes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['taxes'] = $taxes;

        return $this;
    }

    /**
     * Gets ordered_at
     *
     * @return string|null
     */
    public function getOrderedAt()
    {
        return $this->container['ordered_at'];
    }

    /**
     * Sets ordered_at
     *
     * @param string|null $ordered_at Дата і час замовлення. Якщо не передається, буде використаний поточний час
     *
     * @return self
     */
    public function setOrderedAt($ordered_at)
    {
        if (is_null($ordered_at)) {
            array_push($this->openAPINullablesSetToNull, 'ordered_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ordered_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ordered_at'] = $ordered_at;

        return $this;
    }

    /**
     * Gets buyer
     *
     * @return \OpenAPI\Client\Model\CreateNewOrderRequestBuyer
     */
    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer
     *
     * @param \OpenAPI\Client\Model\CreateNewOrderRequestBuyer $buyer buyer
     *
     * @return self
     */
    public function setBuyer($buyer)
    {
        if (is_null($buyer)) {
            throw new \InvalidArgumentException('non-nullable buyer cannot be null');
        }
        $this->container['buyer'] = $buyer;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return \OpenAPI\Client\Model\CreateNewOrderRequestShipping|null
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param \OpenAPI\Client\Model\CreateNewOrderRequestShipping|null $shipping shipping
     *
     * @return self
     */
    public function setShipping($shipping)
    {
        if (is_null($shipping)) {
            throw new \InvalidArgumentException('non-nullable shipping cannot be null');
        }
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets marketing
     *
     * @return \OpenAPI\Client\Model\CreateNewOrderRequestMarketing|null
     */
    public function getMarketing()
    {
        return $this->container['marketing'];
    }

    /**
     * Sets marketing
     *
     * @param \OpenAPI\Client\Model\CreateNewOrderRequestMarketing|null $marketing marketing
     *
     * @return self
     */
    public function setMarketing($marketing)
    {
        if (is_null($marketing)) {
            throw new \InvalidArgumentException('non-nullable marketing cannot be null');
        }
        $this->container['marketing'] = $marketing;

        return $this;
    }

    /**
     * Gets products
     *
     * @return \OpenAPI\Client\Model\CreateNewOrderRequestProductsInner[]|null
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     *
     * @param \OpenAPI\Client\Model\CreateNewOrderRequestProductsInner[]|null $products products
     *
     * @return self
     */
    public function setProducts($products)
    {
        if (is_null($products)) {
            throw new \InvalidArgumentException('non-nullable products cannot be null');
        }
        $this->container['products'] = $products;

        return $this;
    }

    /**
     * Gets payments
     *
     * @return \OpenAPI\Client\Model\CreateNewOrderRequestPaymentsInner[]|null
     */
    public function getPayments()
    {
        return $this->container['payments'];
    }

    /**
     * Sets payments
     *
     * @param \OpenAPI\Client\Model\CreateNewOrderRequestPaymentsInner[]|null $payments payments
     *
     * @return self
     */
    public function setPayments($payments)
    {
        if (is_null($payments)) {
            throw new \InvalidArgumentException('non-nullable payments cannot be null');
        }
        $this->container['payments'] = $payments;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return \OpenAPI\Client\Model\CreateNewOrderRequestCustomFieldsInner[]|null
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param \OpenAPI\Client\Model\CreateNewOrderRequestCustomFieldsInner[]|null $custom_fields Користувацькі поля в замовленні
     *
     * @return self
     */
    public function setCustomFields($custom_fields)
    {
        if (is_null($custom_fields)) {
            throw new \InvalidArgumentException('non-nullable custom_fields cannot be null');
        }
        $this->container['custom_fields'] = $custom_fields;

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

