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

class Filter implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new filter and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Filter
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Filter {
        return new Filter();
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
     * Gets the categoryFilterGroups property value. *Experimental* Filter group set used to decide whether given object belongs and should be processed as part of this object mapping. An object is considered in scope if ANY of the groups in the collection is evaluated to true.
     * @return array<FilterGroup>|null
    */
    public function getCategoryFilterGroups(): ?array {
        $val = $this->getBackingStore()->get('categoryFilterGroups');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, FilterGroup::class);
            /** @var array<FilterGroup>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'categoryFilterGroups'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'categoryFilterGroups' => fn(ParseNode $n) => $o->setCategoryFilterGroups($n->getCollectionOfObjectValues([FilterGroup::class, 'createFromDiscriminatorValue'])),
            'groups' => fn(ParseNode $n) => $o->setGroups($n->getCollectionOfObjectValues([FilterGroup::class, 'createFromDiscriminatorValue'])),
            'inputFilterGroups' => fn(ParseNode $n) => $o->setInputFilterGroups($n->getCollectionOfObjectValues([FilterGroup::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the groups property value. Filter group set used to decide whether given object is in scope for provisioning. This is the filter which should be used in most cases. If an object used to satisfy this filter at a given moment, and then the object or the filter was changed so that filter isn't satisfied any longer, such object will get deprovisioned'. An object is considered in scope if ANY of the groups in the collection is evaluated to true.
     * @return array<FilterGroup>|null
    */
    public function getGroups(): ?array {
        $val = $this->getBackingStore()->get('groups');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, FilterGroup::class);
            /** @var array<FilterGroup>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groups'");
    }

    /**
     * Gets the inputFilterGroups property value. *Experimental* Filter group set used to filter out objects at the early stage of reading them from the directory. If an object doesn't satisfy this filter, then it will not be processed further. Important to understand is that if an object used to satisfy this filter at a given moment, and then the object or the filter was changed so that filter is no longer satisfied, such object will NOT get deprovisioned. An object is considered in scope if ANY of the groups in the collection is evaluated to true.
     * @return array<FilterGroup>|null
    */
    public function getInputFilterGroups(): ?array {
        $val = $this->getBackingStore()->get('inputFilterGroups');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, FilterGroup::class);
            /** @var array<FilterGroup>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inputFilterGroups'");
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
        $writer->writeCollectionOfObjectValues('categoryFilterGroups', $this->getCategoryFilterGroups());
        $writer->writeCollectionOfObjectValues('groups', $this->getGroups());
        $writer->writeCollectionOfObjectValues('inputFilterGroups', $this->getInputFilterGroups());
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
     * Sets the categoryFilterGroups property value. *Experimental* Filter group set used to decide whether given object belongs and should be processed as part of this object mapping. An object is considered in scope if ANY of the groups in the collection is evaluated to true.
     * @param array<FilterGroup>|null $value Value to set for the categoryFilterGroups property.
    */
    public function setCategoryFilterGroups(?array $value): void {
        $this->getBackingStore()->set('categoryFilterGroups', $value);
    }

    /**
     * Sets the groups property value. Filter group set used to decide whether given object is in scope for provisioning. This is the filter which should be used in most cases. If an object used to satisfy this filter at a given moment, and then the object or the filter was changed so that filter isn't satisfied any longer, such object will get deprovisioned'. An object is considered in scope if ANY of the groups in the collection is evaluated to true.
     * @param array<FilterGroup>|null $value Value to set for the groups property.
    */
    public function setGroups(?array $value): void {
        $this->getBackingStore()->set('groups', $value);
    }

    /**
     * Sets the inputFilterGroups property value. *Experimental* Filter group set used to filter out objects at the early stage of reading them from the directory. If an object doesn't satisfy this filter, then it will not be processed further. Important to understand is that if an object used to satisfy this filter at a given moment, and then the object or the filter was changed so that filter is no longer satisfied, such object will NOT get deprovisioned. An object is considered in scope if ANY of the groups in the collection is evaluated to true.
     * @param array<FilterGroup>|null $value Value to set for the inputFilterGroups property.
    */
    public function setInputFilterGroups(?array $value): void {
        $this->getBackingStore()->set('inputFilterGroups', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
