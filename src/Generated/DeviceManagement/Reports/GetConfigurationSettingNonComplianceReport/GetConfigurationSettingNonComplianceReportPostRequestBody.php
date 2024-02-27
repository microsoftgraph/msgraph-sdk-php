<?php

namespace Microsoft\Graph\Generated\DeviceManagement\Reports\GetConfigurationSettingNonComplianceReport;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class GetConfigurationSettingNonComplianceReportPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new GetConfigurationSettingNonComplianceReportPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetConfigurationSettingNonComplianceReportPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetConfigurationSettingNonComplianceReportPostRequestBody {
        return new GetConfigurationSettingNonComplianceReportPostRequestBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'filter' => fn(ParseNode $n) => $o->setFilter($n->getStringValue()),
            'groupBy' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setGroupBy($val);
            },
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'orderBy' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setOrderBy($val);
            },
            'search' => fn(ParseNode $n) => $o->setSearch($n->getStringValue()),
            'select' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSelect($val);
            },
            'sessionId' => fn(ParseNode $n) => $o->setSessionId($n->getStringValue()),
            'skip' => fn(ParseNode $n) => $o->setSkip($n->getIntegerValue()),
            'top' => fn(ParseNode $n) => $o->setTop($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the filter property value. The filter property
     * @return string|null
    */
    public function getFilter(): ?string {
        $val = $this->getBackingStore()->get('filter');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filter'");
    }

    /**
     * Gets the groupBy property value. The groupBy property
     * @return array<string>|null
    */
    public function getGroupBy(): ?array {
        $val = $this->getBackingStore()->get('groupBy');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupBy'");
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the orderBy property value. The orderBy property
     * @return array<string>|null
    */
    public function getOrderBy(): ?array {
        $val = $this->getBackingStore()->get('orderBy');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'orderBy'");
    }

    /**
     * Gets the search property value. The search property
     * @return string|null
    */
    public function getSearch(): ?string {
        $val = $this->getBackingStore()->get('search');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'search'");
    }

    /**
     * Gets the select property value. The select property
     * @return array<string>|null
    */
    public function getSelect(): ?array {
        $val = $this->getBackingStore()->get('select');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'select'");
    }

    /**
     * Gets the sessionId property value. The sessionId property
     * @return string|null
    */
    public function getSessionId(): ?string {
        $val = $this->getBackingStore()->get('sessionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sessionId'");
    }

    /**
     * Gets the skip property value. The skip property
     * @return int|null
    */
    public function getSkip(): ?int {
        $val = $this->getBackingStore()->get('skip');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'skip'");
    }

    /**
     * Gets the top property value. The top property
     * @return int|null
    */
    public function getTop(): ?int {
        $val = $this->getBackingStore()->get('top');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'top'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('filter', $this->getFilter());
        $writer->writeCollectionOfPrimitiveValues('groupBy', $this->getGroupBy());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeCollectionOfPrimitiveValues('orderBy', $this->getOrderBy());
        $writer->writeStringValue('search', $this->getSearch());
        $writer->writeCollectionOfPrimitiveValues('select', $this->getSelect());
        $writer->writeStringValue('sessionId', $this->getSessionId());
        $writer->writeIntegerValue('skip', $this->getSkip());
        $writer->writeIntegerValue('top', $this->getTop());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the filter property value. The filter property
     * @param string|null $value Value to set for the filter property.
    */
    public function setFilter(?string $value): void {
        $this->getBackingStore()->set('filter', $value);
    }

    /**
     * Sets the groupBy property value. The groupBy property
     * @param array<string>|null $value Value to set for the groupBy property.
    */
    public function setGroupBy(?array $value): void {
        $this->getBackingStore()->set('groupBy', $value);
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the orderBy property value. The orderBy property
     * @param array<string>|null $value Value to set for the orderBy property.
    */
    public function setOrderBy(?array $value): void {
        $this->getBackingStore()->set('orderBy', $value);
    }

    /**
     * Sets the search property value. The search property
     * @param string|null $value Value to set for the search property.
    */
    public function setSearch(?string $value): void {
        $this->getBackingStore()->set('search', $value);
    }

    /**
     * Sets the select property value. The select property
     * @param array<string>|null $value Value to set for the select property.
    */
    public function setSelect(?array $value): void {
        $this->getBackingStore()->set('select', $value);
    }

    /**
     * Sets the sessionId property value. The sessionId property
     * @param string|null $value Value to set for the sessionId property.
    */
    public function setSessionId(?string $value): void {
        $this->getBackingStore()->set('sessionId', $value);
    }

    /**
     * Sets the skip property value. The skip property
     * @param int|null $value Value to set for the skip property.
    */
    public function setSkip(?int $value): void {
        $this->getBackingStore()->set('skip', $value);
    }

    /**
     * Sets the top property value. The top property
     * @param int|null $value Value to set for the top property.
    */
    public function setTop(?int $value): void {
        $this->getBackingStore()->set('top', $value);
    }

}
