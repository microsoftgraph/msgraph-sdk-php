<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceCompliancePolicies\Item\MicrosoftGraphScheduleActionsForRules;

use Microsoft\Graph\Generated\Models\DeviceComplianceScheduledActionForRule;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ScheduleActionsForRulesPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new scheduleActionsForRulesPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ScheduleActionsForRulesPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ScheduleActionsForRulesPostRequestBody {
        return new ScheduleActionsForRulesPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
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
     * Gets the deviceComplianceScheduledActionForRules property value. The deviceComplianceScheduledActionForRules property
     * @return array<DeviceComplianceScheduledActionForRule>|null
    */
    public function getDeviceComplianceScheduledActionForRules(): ?array {
        return $this->getBackingStore()->get('deviceComplianceScheduledActionForRules');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceComplianceScheduledActionForRules' => fn(ParseNode $n) => $o->setDeviceComplianceScheduledActionForRules($n->getCollectionOfObjectValues([DeviceComplianceScheduledActionForRule::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('deviceComplianceScheduledActionForRules', $this->getDeviceComplianceScheduledActionForRules());
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
     * Sets the deviceComplianceScheduledActionForRules property value. The deviceComplianceScheduledActionForRules property
     * @param array<DeviceComplianceScheduledActionForRule>|null $value Value to set for the deviceComplianceScheduledActionForRules property.
    */
    public function setDeviceComplianceScheduledActionForRules(?array $value): void {
        $this->getBackingStore()->set('deviceComplianceScheduledActionForRules', $value);
    }

}
