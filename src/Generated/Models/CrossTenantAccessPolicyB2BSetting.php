<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CrossTenantAccessPolicyB2BSetting implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new crossTenantAccessPolicyB2BSetting and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CrossTenantAccessPolicyB2BSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CrossTenantAccessPolicyB2BSetting {
        return new CrossTenantAccessPolicyB2BSetting();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the applications property value. The list of applications targeted with your cross-tenant access policy.
     * @return CrossTenantAccessPolicyTargetConfiguration|null
    */
    public function getApplications(): ?CrossTenantAccessPolicyTargetConfiguration {
        return $this->getBackingStore()->get('applications');
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
            'applications' => fn(ParseNode $n) => $o->setApplications($n->getObjectValue([CrossTenantAccessPolicyTargetConfiguration::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'usersAndGroups' => fn(ParseNode $n) => $o->setUsersAndGroups($n->getObjectValue([CrossTenantAccessPolicyTargetConfiguration::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the usersAndGroups property value. The list of users and groups targeted with your cross-tenant access policy.
     * @return CrossTenantAccessPolicyTargetConfiguration|null
    */
    public function getUsersAndGroups(): ?CrossTenantAccessPolicyTargetConfiguration {
        return $this->getBackingStore()->get('usersAndGroups');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('applications', $this->getApplications());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('usersAndGroups', $this->getUsersAndGroups());
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
     * Sets the applications property value. The list of applications targeted with your cross-tenant access policy.
     * @param CrossTenantAccessPolicyTargetConfiguration|null $value Value to set for the applications property.
    */
    public function setApplications(?CrossTenantAccessPolicyTargetConfiguration $value): void {
        $this->getBackingStore()->set('applications', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the usersAndGroups property value. The list of users and groups targeted with your cross-tenant access policy.
     * @param CrossTenantAccessPolicyTargetConfiguration|null $value Value to set for the usersAndGroups property.
    */
    public function setUsersAndGroups(?CrossTenantAccessPolicyTargetConfiguration $value): void {
        $this->getBackingStore()->set('usersAndGroups', $value);
    }

}
