<?php
/**
 * Order
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
 * Order Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Order implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'parent_id' => 'int',
        'source_uuid' => 'string',
        'source_id' => 'int',
        'status_id' => 'int',
        'status_group_id' => 'int',
        'grand_total' => 'float',
        'promocode' => 'string',
        'total_discount' => 'float',
        'expenses_sum' => 'float',
        'shipping_price' => 'float',
        'wrap_price' => 'float',
        'taxes' => 'float',
        'manager_comment' => 'string',
        'buyer_comment' => 'string',
        'gift_message' => 'string',
        'is_gift' => 'bool',
        'payment_status' => 'string',
        'last_synced_at' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'closed_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'parent_id' => null,
        'source_uuid' => null,
        'source_id' => null,
        'status_id' => null,
        'status_group_id' => null,
        'grand_total' => null,
        'promocode' => null,
        'total_discount' => null,
        'expenses_sum' => null,
        'shipping_price' => null,
        'wrap_price' => null,
        'taxes' => null,
        'manager_comment' => null,
        'buyer_comment' => null,
        'gift_message' => null,
        'is_gift' => null,
        'payment_status' => null,
        'last_synced_at' => null,
        'created_at' => null,
        'updated_at' => null,
        'closed_at' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'parent_id' => true,
        'source_uuid' => true,
        'source_id' => false,
        'status_id' => false,
        'status_group_id' => false,
        'grand_total' => false,
        'promocode' => false,
        'total_discount' => false,
        'expenses_sum' => false,
        'shipping_price' => false,
        'wrap_price' => false,
        'taxes' => false,
        'manager_comment' => true,
        'buyer_comment' => true,
        'gift_message' => true,
        'is_gift' => false,
        'payment_status' => false,
        'last_synced_at' => false,
        'created_at' => false,
        'updated_at' => false,
        'closed_at' => false
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
        'id' => 'id',
        'parent_id' => 'parent_id',
        'source_uuid' => 'source_uuid',
        'source_id' => 'source_id',
        'status_id' => 'status_id',
        'status_group_id' => 'status_group_id',
        'grand_total' => 'grand_total',
        'promocode' => 'promocode',
        'total_discount' => 'total_discount',
        'expenses_sum' => 'expenses_sum',
        'shipping_price' => 'shipping_price',
        'wrap_price' => 'wrap_price',
        'taxes' => 'taxes',
        'manager_comment' => 'manager_comment',
        'buyer_comment' => 'buyer_comment',
        'gift_message' => 'gift_message',
        'is_gift' => 'is_gift',
        'payment_status' => 'payment_status',
        'last_synced_at' => 'last_synced_at',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'closed_at' => 'closed_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'parent_id' => 'setParentId',
        'source_uuid' => 'setSourceUuid',
        'source_id' => 'setSourceId',
        'status_id' => 'setStatusId',
        'status_group_id' => 'setStatusGroupId',
        'grand_total' => 'setGrandTotal',
        'promocode' => 'setPromocode',
        'total_discount' => 'setTotalDiscount',
        'expenses_sum' => 'setExpensesSum',
        'shipping_price' => 'setShippingPrice',
        'wrap_price' => 'setWrapPrice',
        'taxes' => 'setTaxes',
        'manager_comment' => 'setManagerComment',
        'buyer_comment' => 'setBuyerComment',
        'gift_message' => 'setGiftMessage',
        'is_gift' => 'setIsGift',
        'payment_status' => 'setPaymentStatus',
        'last_synced_at' => 'setLastSyncedAt',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'closed_at' => 'setClosedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'parent_id' => 'getParentId',
        'source_uuid' => 'getSourceUuid',
        'source_id' => 'getSourceId',
        'status_id' => 'getStatusId',
        'status_group_id' => 'getStatusGroupId',
        'grand_total' => 'getGrandTotal',
        'promocode' => 'getPromocode',
        'total_discount' => 'getTotalDiscount',
        'expenses_sum' => 'getExpensesSum',
        'shipping_price' => 'getShippingPrice',
        'wrap_price' => 'getWrapPrice',
        'taxes' => 'getTaxes',
        'manager_comment' => 'getManagerComment',
        'buyer_comment' => 'getBuyerComment',
        'gift_message' => 'getGiftMessage',
        'is_gift' => 'getIsGift',
        'payment_status' => 'getPaymentStatus',
        'last_synced_at' => 'getLastSyncedAt',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'closed_at' => 'getClosedAt'
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

    public const PAYMENT_STATUS_NOT_PAID = 'not_paid';
    public const PAYMENT_STATUS_PART_PAID = 'part_paid';
    public const PAYMENT_STATUS_PAID = 'paid';
    public const PAYMENT_STATUS_OVERPAID = 'overpaid';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentStatusAllowableValues()
    {
        return [
            self::PAYMENT_STATUS_NOT_PAID,
            self::PAYMENT_STATUS_PART_PAID,
            self::PAYMENT_STATUS_PAID,
            self::PAYMENT_STATUS_OVERPAID,
        ];
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('parent_id', $data ?? [], null);
        $this->setIfExists('source_uuid', $data ?? [], null);
        $this->setIfExists('source_id', $data ?? [], null);
        $this->setIfExists('status_id', $data ?? [], null);
        $this->setIfExists('status_group_id', $data ?? [], null);
        $this->setIfExists('grand_total', $data ?? [], null);
        $this->setIfExists('promocode', $data ?? [], null);
        $this->setIfExists('total_discount', $data ?? [], null);
        $this->setIfExists('expenses_sum', $data ?? [], null);
        $this->setIfExists('shipping_price', $data ?? [], null);
        $this->setIfExists('wrap_price', $data ?? [], null);
        $this->setIfExists('taxes', $data ?? [], null);
        $this->setIfExists('manager_comment', $data ?? [], null);
        $this->setIfExists('buyer_comment', $data ?? [], null);
        $this->setIfExists('gift_message', $data ?? [], null);
        $this->setIfExists('is_gift', $data ?? [], null);
        $this->setIfExists('payment_status', $data ?? [], null);
        $this->setIfExists('last_synced_at', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('closed_at', $data ?? [], null);
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
        $allowedValues = $this->getPaymentStatusAllowableValues();
        if (!is_null($this->container['payment_status']) && !in_array($this->container['payment_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'payment_status', must be one of '%s'",
                $this->container['payment_status'],
                implode("', '", $allowedValues)
            );
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Ідентифікатор замовлення
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return int|null
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param int|null $parent_id Ідентифікатор батьківського замовлення
     *
     * @return self
     */
    public function setParentId($parent_id)
    {
        if (is_null($parent_id)) {
            array_push($this->openAPINullablesSetToNull, 'parent_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('parent_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['parent_id'] = $parent_id;

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
     * @param string|null $source_uuid Унікальний ідентифікатор замовлення із завантаженого джерела
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
     * @param int $source_id Ідентифікатор джерела
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
     * Gets status_id
     *
     * @return int|null
     */
    public function getStatusId()
    {
        return $this->container['status_id'];
    }

    /**
     * Sets status_id
     *
     * @param int|null $status_id Ідентифікатор статусу замовлення
     *
     * @return self
     */
    public function setStatusId($status_id)
    {
        if (is_null($status_id)) {
            throw new \InvalidArgumentException('non-nullable status_id cannot be null');
        }
        $this->container['status_id'] = $status_id;

        return $this;
    }

    /**
     * Gets status_group_id
     *
     * @return int|null
     */
    public function getStatusGroupId()
    {
        return $this->container['status_group_id'];
    }

    /**
     * Sets status_group_id
     *
     * @param int|null $status_group_id Ідентифікатор групи статусу замовлення
     *
     * @return self
     */
    public function setStatusGroupId($status_group_id)
    {
        if (is_null($status_group_id)) {
            throw new \InvalidArgumentException('non-nullable status_group_id cannot be null');
        }
        $this->container['status_group_id'] = $status_group_id;

        return $this;
    }

    /**
     * Gets grand_total
     *
     * @return float|null
     */
    public function getGrandTotal()
    {
        return $this->container['grand_total'];
    }

    /**
     * Sets grand_total
     *
     * @param float|null $grand_total Фінальна вартість
     *
     * @return self
     */
    public function setGrandTotal($grand_total)
    {
        if (is_null($grand_total)) {
            throw new \InvalidArgumentException('non-nullable grand_total cannot be null');
        }
        $this->container['grand_total'] = $grand_total;

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
            throw new \InvalidArgumentException('non-nullable promocode cannot be null');
        }
        $this->container['promocode'] = $promocode;

        return $this;
    }

    /**
     * Gets total_discount
     *
     * @return float|null
     */
    public function getTotalDiscount()
    {
        return $this->container['total_discount'];
    }

    /**
     * Sets total_discount
     *
     * @param float|null $total_discount Сума знижки
     *
     * @return self
     */
    public function setTotalDiscount($total_discount)
    {
        if (is_null($total_discount)) {
            throw new \InvalidArgumentException('non-nullable total_discount cannot be null');
        }
        $this->container['total_discount'] = $total_discount;

        return $this;
    }

    /**
     * Gets expenses_sum
     *
     * @return float|null
     */
    public function getExpensesSum()
    {
        return $this->container['expenses_sum'];
    }

    /**
     * Sets expenses_sum
     *
     * @param float|null $expenses_sum Сума витрат
     *
     * @return self
     */
    public function setExpensesSum($expenses_sum)
    {
        if (is_null($expenses_sum)) {
            throw new \InvalidArgumentException('non-nullable expenses_sum cannot be null');
        }
        $this->container['expenses_sum'] = $expenses_sum;

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
            throw new \InvalidArgumentException('non-nullable shipping_price cannot be null');
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
            throw new \InvalidArgumentException('non-nullable wrap_price cannot be null');
        }
        $this->container['wrap_price'] = $wrap_price;

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
            throw new \InvalidArgumentException('non-nullable taxes cannot be null');
        }
        $this->container['taxes'] = $taxes;

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
     * @param string|null $buyer_comment Коментар клієнта менеджера
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
     * @param string|null $gift_message Вітальне повідомлення
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
     * @param bool|null $is_gift Позначено як подарунок
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
     * Gets payment_status
     *
     * @return string|null
     */
    public function getPaymentStatus()
    {
        return $this->container['payment_status'];
    }

    /**
     * Sets payment_status
     *
     * @param string|null $payment_status Статус оплати
     *
     * @return self
     */
    public function setPaymentStatus($payment_status)
    {
        if (is_null($payment_status)) {
            throw new \InvalidArgumentException('non-nullable payment_status cannot be null');
        }
        $allowedValues = $this->getPaymentStatusAllowableValues();
        if (!in_array($payment_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'payment_status', must be one of '%s'",
                    $payment_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_status'] = $payment_status;

        return $this;
    }

    /**
     * Gets last_synced_at
     *
     * @return string|null
     */
    public function getLastSyncedAt()
    {
        return $this->container['last_synced_at'];
    }

    /**
     * Sets last_synced_at
     *
     * @param string|null $last_synced_at Дата останньої синхронізації із джерелом в UTC форматі
     *
     * @return self
     */
    public function setLastSyncedAt($last_synced_at)
    {
        if (is_null($last_synced_at)) {
            throw new \InvalidArgumentException('non-nullable last_synced_at cannot be null');
        }
        $this->container['last_synced_at'] = $last_synced_at;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at Дата створення замовлення в UTC форматі
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at Дата останньої зміни замовлення в UTC форматі
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets closed_at
     *
     * @return string|null
     */
    public function getClosedAt()
    {
        return $this->container['closed_at'];
    }

    /**
     * Sets closed_at
     *
     * @param string|null $closed_at Дата закриття замовлення в UTC форматі
     *
     * @return self
     */
    public function setClosedAt($closed_at)
    {
        if (is_null($closed_at)) {
            throw new \InvalidArgumentException('non-nullable closed_at cannot be null');
        }
        $this->container['closed_at'] = $closed_at;

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

