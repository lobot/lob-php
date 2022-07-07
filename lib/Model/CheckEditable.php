<?php
/**
 * CheckEditable
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Lob
 *
 * The Lob API is organized around REST. Our API is designed to have predictable, resource-oriented URLs and uses HTTP response codes to indicate any API errors. <p> Looking for our [previous documentation](https://lob.github.io/legacy-docs/)?
 *
 * The version of the OpenAPI document: 1.3.0
 * Contact: lob-openapi@lob.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
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
 * CheckEditable Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CheckEditable implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'check_editable';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'from' => 'string',
        'to' => 'string',
        'bank_account' => 'string',
        'amount' => 'float',
        'logo' => 'mixed',
        'check_bottom' => 'string',
        'attachment' => 'string',
        'description' => 'string',
        'metadata' => 'array<string,string>',
        'merge_variables' => 'object',
        'send_date' => '\DateTime',
        'mail_type' => 'string',
        'memo' => 'string',
        'check_number' => 'int',
        'message' => 'string',
        'billing_group_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'from' => null,
        'to' => null,
        'bank_account' => null,
        'amount' => 'float',
        'logo' => null,
        'check_bottom' => null,
        'attachment' => null,
        'description' => null,
        'metadata' => null,
        'merge_variables' => null,
        'send_date' => 'date-time',
        'mail_type' => null,
        'memo' => null,
        'check_number' => null,
        'message' => null,
        'billing_group_id' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'from' => 'from',
        'to' => 'to',
        'bank_account' => 'bank_account',
        'amount' => 'amount',
        'logo' => 'logo',
        'check_bottom' => 'check_bottom',
        'attachment' => 'attachment',
        'description' => 'description',
        'metadata' => 'metadata',
        'merge_variables' => 'merge_variables',
        'send_date' => 'send_date',
        'mail_type' => 'mail_type',
        'memo' => 'memo',
        'check_number' => 'check_number',
        'message' => 'message',
        'billing_group_id' => 'billing_group_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'from' => 'setFrom',
        'to' => 'setTo',
        'bank_account' => 'setBankAccount',
        'amount' => 'setAmount',
        'logo' => 'setLogo',
        'check_bottom' => 'setCheckBottom',
        'attachment' => 'setAttachment',
        'description' => 'setDescription',
        'metadata' => 'setMetadata',
        'merge_variables' => 'setMergeVariables',
        'send_date' => 'setSendDate',
        'mail_type' => 'setMailType',
        'memo' => 'setMemo',
        'check_number' => 'setCheckNumber',
        'message' => 'setMessage',
        'billing_group_id' => 'setBillingGroupId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'from' => 'getFrom',
        'to' => 'getTo',
        'bank_account' => 'getBankAccount',
        'amount' => 'getAmount',
        'logo' => 'getLogo',
        'check_bottom' => 'getCheckBottom',
        'attachment' => 'getAttachment',
        'description' => 'getDescription',
        'metadata' => 'getMetadata',
        'merge_variables' => 'getMergeVariables',
        'send_date' => 'getSendDate',
        'mail_type' => 'getMailType',
        'memo' => 'getMemo',
        'check_number' => 'getCheckNumber',
        'message' => 'getMessage',
        'billing_group_id' => 'getBillingGroupId'
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

    const MAIL_TYPE_USPS_FIRST_CLASS = 'usps_first_class';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMailTypeAllowableValues()
    {
        return [
            self::MAIL_TYPE_USPS_FIRST_CLASS,
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
        $this->container['from'] = $data['from'] ?? null;
        $this->container['to'] = $data['to'] ?? null;
        $this->container['bank_account'] = $data['bank_account'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['logo'] = $data['logo'] ?? null;
        $this->container['check_bottom'] = $data['check_bottom'] ?? null;
        $this->container['attachment'] = $data['attachment'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['merge_variables'] = $data['merge_variables'] ?? null;
        $this->container['send_date'] = $data['send_date'] ?? null;
        $this->container['mail_type'] = $data['mail_type'] ?? null;
        $this->container['memo'] = $data['memo'] ?? null;
        $this->container['check_number'] = $data['check_number'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
        $this->container['billing_group_id'] = $data['billing_group_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['from'] === null) {
                $invalidProperties[] = "'from' can't be null";
            }
        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['to'] === null) {
                $invalidProperties[] = "'to' can't be null";
            }
        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['bank_account'] === null) {
                $invalidProperties[] = "'bank_account' can't be null";
            }
        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['amount'] === null) {
                $invalidProperties[] = "'amount' can't be null";
            }
        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (($this->container['amount'] > 999999.99)) {
                $invalidProperties[] = "invalid value for 'amount', must be smaller than or equal to 999999.99.";
            }

        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }

        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
        }
        $allowedValues = $this->getMailTypeAllowableValues();
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($this->container['mail_type']) && !in_array($this->container['mail_type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                    "invalid value '%s' for 'mail_type', must be one of '%s'",
                    $this->container['mail_type'],
                    implode("', '", $allowedValues)
                );
            }
        }

        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($this->container['memo']) && (mb_strlen($this->container['memo']) > 40)) {
                $invalidProperties[] = "invalid value for 'memo', the character length must be smaller than or equal to 40.";
            }

        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($this->container['check_number']) && ($this->container['check_number'] > 500000000)) {
                $invalidProperties[] = "invalid value for 'check_number', must be smaller than or equal to 500000000.";
            }

            if (!is_null($this->container['check_number']) && ($this->container['check_number'] < 1)) {
                $invalidProperties[] = "invalid value for 'check_number', must be bigger than or equal to 1.";
            }

        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) > 400)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 400.";
            }

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
     * Gets from
     *
     * @return string
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string $from Must either be an address ID or an inline object with correct address parameters.
     *
     * @return self
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }


    /**
     * Gets to
     *
     * @return string
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param string $to Must either be an address ID or an inline object with correct address parameters.
     *
     * @return self
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }


    /**
     * Gets bank_account
     *
     * @return string
     */
    public function getBankAccount()
    {
        return $this->container['bank_account'];
    }

    /**
     * Sets bank_account
     *
     * @param string $bank_account bank_account
     *
     * @return self
     */
    public function setBankAccount($bank_account)
    {
        $this->container['bank_account'] = $bank_account;

        return $this;
    }


    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount The payment amount to be sent in US dollars.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {

            if (($amount > 999999.99)) {
                throw new \InvalidArgumentException('invalid value for $amount when calling CheckEditable., must be smaller than or equal to 999999.99.');
            }

        }
        $this->container['amount'] = $amount;

        return $this;
    }


    /**
     * Gets logo
     *
     * @return mixed|null
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param mixed|null $logo Accepts a remote URL or local file upload to an image to print (in grayscale) in the upper-left corner of your check.
     *
     * @return self
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

        return $this;
    }


    /**
     * Gets check_bottom
     *
     * @return string|null
     */
    public function getCheckBottom()
    {
        return $this->container['check_bottom'];
    }

    /**
     * Sets check_bottom
     *
     * @param string|null $check_bottom The artwork to use on the bottom of the check page.  Notes: - HTML merge variables should not include delimiting whitespace. - PDF, PNG, and JPGs must be sized at 8.5\"x11\" at 300 DPI, while supplied HTML will be rendered and trimmed to fit on a 8.5\"x11\" page. - The check bottom will always be printed in black & white. - Must conform to [this template](https://s3-us-west-2.amazonaws.com/public.lob.com/assets/templates/check_bottom_template.pdf).  Need more help? Consult our [HTML examples](#section/HTML-Examples).
     *
     * @return self
     */
    public function setCheckBottom($check_bottom)
    {
        $this->container['check_bottom'] = $check_bottom;

        return $this;
    }


    /**
     * Gets attachment
     *
     * @return string|null
     */
    public function getAttachment()
    {
        return $this->container['attachment'];
    }

    /**
     * Sets attachment
     *
     * @param string|null $attachment A document to include with the check.
     *
     * @return self
     */
    public function setAttachment($attachment)
    {
        $this->container['attachment'] = $attachment;

        return $this;
    }


    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description An internal description that identifies this resource. Must be no longer than 255 characters.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($description) && (mb_strlen($description) > 255)) {
                throw new \InvalidArgumentException('invalid length for $description when calling CheckEditable., must be smaller than or equal to 255.');
            }

        }
        $this->container['description'] = $description;

        return $this;
    }


    /**
     * Gets metadata
     *
     * @return array<string,string>|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array<string,string>|null $metadata Use metadata to store custom information for tagging and labeling back to your internal systems. Must be an object with up to 20 key-value pairs. Keys must be at most 40 characters and values must be at most 500 characters. Neither can contain the characters `\"` and `\\`. i.e. '{\"customer_id\" : \"NEWYORK2015\"}' Nested objects are not supported.  See [Metadata](#section/Metadata) for more information.
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {


        }
        $this->container['metadata'] = $metadata;

        return $this;
    }


    /**
     * Gets merge_variables
     *
     * @return object|null
     */
    public function getMergeVariables()
    {
        return $this->container['merge_variables'];
    }

    /**
     * Sets merge_variables
     *
     * @param object|null $merge_variables You can input a merge variable payload object to your template to render dynamic content. For example, if you have a template like: `{{variable_name}}`, pass in `{\"variable_name\": \"Harry\"}` to render `Harry`. `merge_variables` must be an object. Any type of value is accepted as long as the object is valid JSON; you can use `strings`, `numbers`, `booleans`, `arrays`, `objects`, or `null`. The max length of the object is 25,000 characters. If you call `JSON.stringify` on your object, it can be no longer than 25,000 characters. Your variable names cannot contain any whitespace or any of the following special characters: `!`, `\"`, `#`, `%`, `&`, `'`, `(`, `)`, `*`, `+`, `,`, `/`, `;`, `<`, `=`, `>`, `@`, `[`, `\\`, `]`, `^`, `` ` ``, `{`, `|`, `}`, `~`. More instructions can be found in [our guide to using html and merge variables](https://lob.com/resources/guides/general/using-html-and-merge-variables). Depending on your [Merge Variable strictness](https://dashboard.lob.com/#/settings/account) setting, if you define variables in your HTML but do not pass them here, you will either receive an error or the variable will render as an empty string.
     *
     * @return self
     */
    public function setMergeVariables($merge_variables)
    {
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {


        }
        $this->container['merge_variables'] = $merge_variables;

        return $this;
    }


    /**
     * Gets send_date
     *
     * @return \DateTime|null
     */
    public function getSendDate()
    {
        return $this->container['send_date'];
    }

    /**
     * Sets send_date
     *
     * @param \DateTime|null $send_date A timestamp in ISO 8601 format which specifies a date after the current time and up to 180 days in the future to send the letter off for production. Setting a send date overrides the default [cancellation window](#section/Cancellation-Windows) applied to the mailpiece. Until the `send_date` has passed, the mailpiece can be canceled. If a date in the format `2017-11-01` is passed, it will evaluate to midnight UTC of that date (`2017-11-01T00:00:00.000Z`). If a datetime is passed, that exact time will be used. A `send_date` passed with no time zone will default to UTC, while a `send_date` passed with a time zone will be converted to UTC.
     *
     * @return self
     */
    public function setSendDate($send_date)
    {
        $this->container['send_date'] = $send_date;

        return $this;
    }


    /**
     * Gets mail_type
     *
     * @return string|null
     */
    public function getMailType()
    {
        return $this->container['mail_type'];
    }

    /**
     * Sets mail_type
     *
     * @param string|null $mail_type Checks must be sent `usps_first_class`
     *
     * @return self
     */
    public function setMailType($mail_type)
    {
        $allowedValues = $this->getMailTypeAllowableValues();
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($mail_type) && !in_array($mail_type, $allowedValues, true)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value '%s' for 'mail_type', must be one of '%s'",
                        $mail_type,
                        implode("', '", $allowedValues)
                    )
                );
            }
        }

        $this->container['mail_type'] = $mail_type;

        return $this;
    }


    /**
     * Gets memo
     *
     * @return string|null
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|null $memo Text to include on the memo line of the check.
     *
     * @return self
     */
    public function setMemo($memo)
    {
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($memo) && (mb_strlen($memo) > 40)) {
                throw new \InvalidArgumentException('invalid length for $memo when calling CheckEditable., must be smaller than or equal to 40.');
            }

        }
        $this->container['memo'] = $memo;

        return $this;
    }


    /**
     * Gets check_number
     *
     * @return int|null
     */
    public function getCheckNumber()
    {
        return $this->container['check_number'];
    }

    /**
     * Sets check_number
     *
     * @param int|null $check_number An integer that designates the check number.
     *
     * @return self
     */
    public function setCheckNumber($check_number)
    {
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {

            if (!is_null($check_number) && ($check_number > 500000000)) {
                throw new \InvalidArgumentException('invalid value for $check_number when calling CheckEditable., must be smaller than or equal to 500000000.');
            }
            if (!is_null($check_number) && ($check_number < 1)) {
                throw new \InvalidArgumentException('invalid value for $check_number when calling CheckEditable., must be bigger than or equal to 1.');
            }

        }
        $this->container['check_number'] = $check_number;

        return $this;
    }


    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message Max of 400 characters to be included at the bottom of the check page.
     *
     * @return self
     */
    public function setMessage($message)
    {
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($message) && (mb_strlen($message) > 400)) {
                throw new \InvalidArgumentException('invalid length for $message when calling CheckEditable., must be smaller than or equal to 400.');
            }

        }
        $this->container['message'] = $message;

        return $this;
    }


    /**
     * Gets billing_group_id
     *
     * @return string|null
     */
    public function getBillingGroupId()
    {
        return $this->container['billing_group_id'];
    }

    /**
     * Sets billing_group_id
     *
     * @param string|null $billing_group_id An optional string with the billing group ID to tag your usage with. Is used for billing purposes. Requires special activation to use. See [Billing Group API](https://lob.github.io/lob-openapi/#tag/Billing-Groups) for more information.
     *
     * @return self
     */
    public function setBillingGroupId($billing_group_id)
    {
        $this->container['billing_group_id'] = $billing_group_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
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
    #[\ReturnTypeWillChange]
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
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
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


