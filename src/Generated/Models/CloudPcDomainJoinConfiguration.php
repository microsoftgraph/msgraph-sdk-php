<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CloudPcDomainJoinConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CloudPcDomainJoinConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcDomainJoinConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcDomainJoinConfiguration {
        return new CloudPcDomainJoinConfiguration();
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
     * Gets the domainJoinType property value. Specifies the method by which the provisioned Cloud PC joins Microsoft Entra ID. If you choose the hybridAzureADJoin type, only provide a value for the onPremisesConnectionId property and leave the regionName property empty. If you choose the azureADJoin type, provide a value for either the onPremisesConnectionId or the regionName property. The possible values are: azureADJoin, hybridAzureADJoin, unknownFutureValue.
     * @return CloudPcDomainJoinType|null
    */
    public function getDomainJoinType(): ?CloudPcDomainJoinType {
        $val = $this->getBackingStore()->get('domainJoinType');
        if (is_null($val) || $val instanceof CloudPcDomainJoinType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'domainJoinType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'domainJoinType' => fn(ParseNode $n) => $o->setDomainJoinType($n->getEnumValue(CloudPcDomainJoinType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'onPremisesConnectionId' => fn(ParseNode $n) => $o->setOnPremisesConnectionId($n->getStringValue()),
            'regionGroup' => fn(ParseNode $n) => $o->setRegionGroup($n->getEnumValue(CloudPcRegionGroup::class)),
            'regionName' => fn(ParseNode $n) => $o->setRegionName($n->getStringValue()),
        ];
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
     * Gets the onPremisesConnectionId property value. The Azure network connection ID that matches the virtual network IT admins want the provisioning policy to use when they create Cloud PCs. You can use this property in both domain join types: Azure AD joined or Hybrid Microsoft Entra joined. If you enter an onPremisesConnectionId, leave the regionName property empty.
     * @return string|null
    */
    public function getOnPremisesConnectionId(): ?string {
        $val = $this->getBackingStore()->get('onPremisesConnectionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onPremisesConnectionId'");
    }

    /**
     * Gets the regionGroup property value. The logical geographic group this region belongs to. Multiple regions can belong to one region group. A customer can select a regionGroup when they provision a Cloud PC, and the Cloud PC is put in one of the regions in the group based on resource status. For example, the Europe region group contains the Northern Europe and Western Europe regions. Read-only.
     * @return CloudPcRegionGroup|null
    */
    public function getRegionGroup(): ?CloudPcRegionGroup {
        $val = $this->getBackingStore()->get('regionGroup');
        if (is_null($val) || $val instanceof CloudPcRegionGroup) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'regionGroup'");
    }

    /**
     * Gets the regionName property value. The supported Azure region where the IT admin wants the provisioning policy to create Cloud PCs. Within this region, the Windows 365 service creates and manages the underlying virtual network. This option is available only when the IT admin selects Microsoft Entra joined as the domain join type. If you enter a regionName, leave the onPremisesConnectionId property empty.
     * @return string|null
    */
    public function getRegionName(): ?string {
        $val = $this->getBackingStore()->get('regionName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'regionName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('domainJoinType', $this->getDomainJoinType());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('onPremisesConnectionId', $this->getOnPremisesConnectionId());
        $writer->writeEnumValue('regionGroup', $this->getRegionGroup());
        $writer->writeStringValue('regionName', $this->getRegionName());
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
     * Sets the domainJoinType property value. Specifies the method by which the provisioned Cloud PC joins Microsoft Entra ID. If you choose the hybridAzureADJoin type, only provide a value for the onPremisesConnectionId property and leave the regionName property empty. If you choose the azureADJoin type, provide a value for either the onPremisesConnectionId or the regionName property. The possible values are: azureADJoin, hybridAzureADJoin, unknownFutureValue.
     * @param CloudPcDomainJoinType|null $value Value to set for the domainJoinType property.
    */
    public function setDomainJoinType(?CloudPcDomainJoinType $value): void {
        $this->getBackingStore()->set('domainJoinType', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the onPremisesConnectionId property value. The Azure network connection ID that matches the virtual network IT admins want the provisioning policy to use when they create Cloud PCs. You can use this property in both domain join types: Azure AD joined or Hybrid Microsoft Entra joined. If you enter an onPremisesConnectionId, leave the regionName property empty.
     * @param string|null $value Value to set for the onPremisesConnectionId property.
    */
    public function setOnPremisesConnectionId(?string $value): void {
        $this->getBackingStore()->set('onPremisesConnectionId', $value);
    }

    /**
     * Sets the regionGroup property value. The logical geographic group this region belongs to. Multiple regions can belong to one region group. A customer can select a regionGroup when they provision a Cloud PC, and the Cloud PC is put in one of the regions in the group based on resource status. For example, the Europe region group contains the Northern Europe and Western Europe regions. Read-only.
     * @param CloudPcRegionGroup|null $value Value to set for the regionGroup property.
    */
    public function setRegionGroup(?CloudPcRegionGroup $value): void {
        $this->getBackingStore()->set('regionGroup', $value);
    }

    /**
     * Sets the regionName property value. The supported Azure region where the IT admin wants the provisioning policy to create Cloud PCs. Within this region, the Windows 365 service creates and manages the underlying virtual network. This option is available only when the IT admin selects Microsoft Entra joined as the domain join type. If you enter a regionName, leave the onPremisesConnectionId property empty.
     * @param string|null $value Value to set for the regionName property.
    */
    public function setRegionName(?string $value): void {
        $this->getBackingStore()->set('regionName', $value);
    }

}
