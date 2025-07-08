<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PolicyBinding implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new PolicyBinding and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PolicyBinding
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PolicyBinding {
        return new PolicyBinding();
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
     * Gets the exclusions property value. Specifies the users or groups to be explicitly excluded from this policy scope. Can be null or empty.
     * @return array<ScopeBase>|null
    */
    public function getExclusions(): ?array {
        $val = $this->getBackingStore()->get('exclusions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ScopeBase::class);
            /** @var array<ScopeBase>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exclusions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'exclusions' => fn(ParseNode $n) => $o->setExclusions($n->getCollectionOfObjectValues([ScopeBase::class, 'createFromDiscriminatorValue'])),
            'inclusions' => fn(ParseNode $n) => $o->setInclusions($n->getCollectionOfObjectValues([ScopeBase::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the inclusions property value. Specifies the users or groups to be included in this policy scope. Often set to tenantScope for 'All users'.
     * @return array<ScopeBase>|null
    */
    public function getInclusions(): ?array {
        $val = $this->getBackingStore()->get('inclusions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ScopeBase::class);
            /** @var array<ScopeBase>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inclusions'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('exclusions', $this->getExclusions());
        $writer->writeCollectionOfObjectValues('inclusions', $this->getInclusions());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the exclusions property value. Specifies the users or groups to be explicitly excluded from this policy scope. Can be null or empty.
     * @param array<ScopeBase>|null $value Value to set for the exclusions property.
    */
    public function setExclusions(?array $value): void {
        $this->getBackingStore()->set('exclusions', $value);
    }

    /**
     * Sets the inclusions property value. Specifies the users or groups to be included in this policy scope. Often set to tenantScope for 'All users'.
     * @param array<ScopeBase>|null $value Value to set for the inclusions property.
    */
    public function setInclusions(?array $value): void {
        $this->getBackingStore()->set('inclusions', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
