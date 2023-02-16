<?php

namespace Microsoft\Graph\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AccessPackageAutomaticRequestSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new accessPackageAutomaticRequestSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageAutomaticRequestSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageAutomaticRequestSettings {
        return new AccessPackageAutomaticRequestSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'gracePeriodBeforeAccessRemoval' => fn(ParseNode $n) => $o->setGracePeriodBeforeAccessRemoval($n->getDateIntervalValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'removeAccessWhenTargetLeavesAllowedTargets' => fn(ParseNode $n) => $o->setRemoveAccessWhenTargetLeavesAllowedTargets($n->getBooleanValue()),
            'requestAccessForAllowedTargets' => fn(ParseNode $n) => $o->setRequestAccessForAllowedTargets($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the gracePeriodBeforeAccessRemoval property value. The gracePeriodBeforeAccessRemoval property
     * @return DateInterval|null
    */
    public function getGracePeriodBeforeAccessRemoval(): ?DateInterval {
        return $this->getBackingStore()->get('gracePeriodBeforeAccessRemoval');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the removeAccessWhenTargetLeavesAllowedTargets property value. The removeAccessWhenTargetLeavesAllowedTargets property
     * @return bool|null
    */
    public function getRemoveAccessWhenTargetLeavesAllowedTargets(): ?bool {
        return $this->getBackingStore()->get('removeAccessWhenTargetLeavesAllowedTargets');
    }

    /**
     * Gets the requestAccessForAllowedTargets property value. If set to true, automatic assignments will be created for targets in the allowed target scope.
     * @return bool|null
    */
    public function getRequestAccessForAllowedTargets(): ?bool {
        return $this->getBackingStore()->get('requestAccessForAllowedTargets');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateIntervalValue('gracePeriodBeforeAccessRemoval', $this->getGracePeriodBeforeAccessRemoval());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('removeAccessWhenTargetLeavesAllowedTargets', $this->getRemoveAccessWhenTargetLeavesAllowedTargets());
        $writer->writeBooleanValue('requestAccessForAllowedTargets', $this->getRequestAccessForAllowedTargets());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the gracePeriodBeforeAccessRemoval property value. The gracePeriodBeforeAccessRemoval property
     * @param DateInterval|null $value Value to set for the gracePeriodBeforeAccessRemoval property.
    */
    public function setGracePeriodBeforeAccessRemoval(?DateInterval $value): void {
        $this->getBackingStore()->set('gracePeriodBeforeAccessRemoval', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the removeAccessWhenTargetLeavesAllowedTargets property value. The removeAccessWhenTargetLeavesAllowedTargets property
     * @param bool|null $value Value to set for the removeAccessWhenTargetLeavesAllowedTargets property.
    */
    public function setRemoveAccessWhenTargetLeavesAllowedTargets(?bool $value): void {
        $this->getBackingStore()->set('removeAccessWhenTargetLeavesAllowedTargets', $value);
    }

    /**
     * Sets the requestAccessForAllowedTargets property value. If set to true, automatic assignments will be created for targets in the allowed target scope.
     * @param bool|null $value Value to set for the requestAccessForAllowedTargets property.
    */
    public function setRequestAccessForAllowedTargets(?bool $value): void {
        $this->getBackingStore()->set('requestAccessForAllowedTargets', $value);
    }

}
