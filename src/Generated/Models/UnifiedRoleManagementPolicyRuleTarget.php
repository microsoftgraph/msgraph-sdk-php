<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UnifiedRoleManagementPolicyRuleTarget implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new unifiedRoleManagementPolicyRuleTarget and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleManagementPolicyRuleTarget
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleManagementPolicyRuleTarget {
        return new UnifiedRoleManagementPolicyRuleTarget();
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
     * Gets the caller property value. The type of caller that's the target of the policy rule. Allowed values are: None, Admin, EndUser.
     * @return string|null
    */
    public function getCaller(): ?string {
        return $this->getBackingStore()->get('caller');
    }

    /**
     * Gets the enforcedSettings property value. The list of role settings that are enforced and cannot be overridden by child scopes. Use All for all settings.
     * @return array<string>|null
    */
    public function getEnforcedSettings(): ?array {
        return $this->getBackingStore()->get('enforcedSettings');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'caller' => fn(ParseNode $n) => $o->setCaller($n->getStringValue()),
            'enforcedSettings' => fn(ParseNode $n) => $o->setEnforcedSettings($n->getCollectionOfPrimitiveValues()),
            'inheritableSettings' => fn(ParseNode $n) => $o->setInheritableSettings($n->getCollectionOfPrimitiveValues()),
            'level' => fn(ParseNode $n) => $o->setLevel($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'operations' => fn(ParseNode $n) => $o->setOperations($n->getCollectionOfEnumValues(UnifiedRoleManagementPolicyRuleTargetOperations::class)),
            'targetObjects' => fn(ParseNode $n) => $o->setTargetObjects($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the inheritableSettings property value. The list of role settings that can be inherited by child scopes. Use All for all settings.
     * @return array<string>|null
    */
    public function getInheritableSettings(): ?array {
        return $this->getBackingStore()->get('inheritableSettings');
    }

    /**
     * Gets the level property value. The role assignment type that's the target of policy rule. Allowed values are: Eligibility, Assignment.
     * @return string|null
    */
    public function getLevel(): ?string {
        return $this->getBackingStore()->get('level');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the operations property value. The role management operations that are the target of the policy rule. Allowed values are: All, Activate, Deactivate, Assign, Update, Remove, Extend, Renew.
     * @return array<UnifiedRoleManagementPolicyRuleTargetOperations>|null
    */
    public function getOperations(): ?array {
        return $this->getBackingStore()->get('operations');
    }

    /**
     * Gets the targetObjects property value. The targetObjects property
     * @return array<DirectoryObject>|null
    */
    public function getTargetObjects(): ?array {
        return $this->getBackingStore()->get('targetObjects');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('caller', $this->getCaller());
        $writer->writeCollectionOfPrimitiveValues('enforcedSettings', $this->getEnforcedSettings());
        $writer->writeCollectionOfPrimitiveValues('inheritableSettings', $this->getInheritableSettings());
        $writer->writeStringValue('level', $this->getLevel());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfEnumValues('operations', $this->getOperations());
        $writer->writeCollectionOfObjectValues('targetObjects', $this->getTargetObjects());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the caller property value. The type of caller that's the target of the policy rule. Allowed values are: None, Admin, EndUser.
     *  @param string|null $value Value to set for the caller property.
    */
    public function setCaller(?string $value): void {
        $this->getBackingStore()->set('caller', $value);
    }

    /**
     * Sets the enforcedSettings property value. The list of role settings that are enforced and cannot be overridden by child scopes. Use All for all settings.
     *  @param array<string>|null $value Value to set for the enforcedSettings property.
    */
    public function setEnforcedSettings(?array $value): void {
        $this->getBackingStore()->set('enforcedSettings', $value);
    }

    /**
     * Sets the inheritableSettings property value. The list of role settings that can be inherited by child scopes. Use All for all settings.
     *  @param array<string>|null $value Value to set for the inheritableSettings property.
    */
    public function setInheritableSettings(?array $value): void {
        $this->getBackingStore()->set('inheritableSettings', $value);
    }

    /**
     * Sets the level property value. The role assignment type that's the target of policy rule. Allowed values are: Eligibility, Assignment.
     *  @param string|null $value Value to set for the level property.
    */
    public function setLevel(?string $value): void {
        $this->getBackingStore()->set('level', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the operations property value. The role management operations that are the target of the policy rule. Allowed values are: All, Activate, Deactivate, Assign, Update, Remove, Extend, Renew.
     *  @param array<UnifiedRoleManagementPolicyRuleTargetOperations>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value): void {
        $this->getBackingStore()->set('operations', $value);
    }

    /**
     * Sets the targetObjects property value. The targetObjects property
     *  @param array<DirectoryObject>|null $value Value to set for the targetObjects property.
    */
    public function setTargetObjects(?array $value): void {
        $this->getBackingStore()->set('targetObjects', $value);
    }

}
