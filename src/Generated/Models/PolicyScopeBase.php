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

class PolicyScopeBase implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new PolicyScopeBase and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PolicyScopeBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PolicyScopeBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.policyTenantScope': return new PolicyTenantScope();
                case '#microsoft.graph.policyUserScope': return new PolicyUserScope();
            }
        }
        return new PolicyScopeBase();
    }

    /**
     * Gets the activities property value. The activities property
     * @return UserActivityTypes|null
    */
    public function getActivities(): ?UserActivityTypes {
        $val = $this->getBackingStore()->get('activities');
        if (is_null($val) || $val instanceof UserActivityTypes) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activities'");
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
     * Gets the executionMode property value. The executionMode property
     * @return ExecutionMode|null
    */
    public function getExecutionMode(): ?ExecutionMode {
        $val = $this->getBackingStore()->get('executionMode');
        if (is_null($val) || $val instanceof ExecutionMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'executionMode'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'activities' => fn(ParseNode $n) => $o->setActivities($n->getEnumValue(UserActivityTypes::class)),
            'executionMode' => fn(ParseNode $n) => $o->setExecutionMode($n->getEnumValue(ExecutionMode::class)),
            'locations' => fn(ParseNode $n) => $o->setLocations($n->getCollectionOfObjectValues([PolicyLocation::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'policyActions' => fn(ParseNode $n) => $o->setPolicyActions($n->getCollectionOfObjectValues([DlpActionInfo::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the locations property value. The locations (like domains or URLs) to be protected. Required.
     * @return array<PolicyLocation>|null
    */
    public function getLocations(): ?array {
        $val = $this->getBackingStore()->get('locations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PolicyLocation::class);
            /** @var array<PolicyLocation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'locations'");
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
     * Gets the policyActions property value. The enforcement actions to take if the policy conditions are met within this scope. Required.
     * @return array<DlpActionInfo>|null
    */
    public function getPolicyActions(): ?array {
        $val = $this->getBackingStore()->get('policyActions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DlpActionInfo::class);
            /** @var array<DlpActionInfo>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyActions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('activities', $this->getActivities());
        $writer->writeEnumValue('executionMode', $this->getExecutionMode());
        $writer->writeCollectionOfObjectValues('locations', $this->getLocations());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('policyActions', $this->getPolicyActions());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the activities property value. The activities property
     * @param UserActivityTypes|null $value Value to set for the activities property.
    */
    public function setActivities(?UserActivityTypes $value): void {
        $this->getBackingStore()->set('activities', $value);
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
     * Sets the executionMode property value. The executionMode property
     * @param ExecutionMode|null $value Value to set for the executionMode property.
    */
    public function setExecutionMode(?ExecutionMode $value): void {
        $this->getBackingStore()->set('executionMode', $value);
    }

    /**
     * Sets the locations property value. The locations (like domains or URLs) to be protected. Required.
     * @param array<PolicyLocation>|null $value Value to set for the locations property.
    */
    public function setLocations(?array $value): void {
        $this->getBackingStore()->set('locations', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the policyActions property value. The enforcement actions to take if the policy conditions are met within this scope. Required.
     * @param array<DlpActionInfo>|null $value Value to set for the policyActions property.
    */
    public function setPolicyActions(?array $value): void {
        $this->getBackingStore()->set('policyActions', $value);
    }

}
