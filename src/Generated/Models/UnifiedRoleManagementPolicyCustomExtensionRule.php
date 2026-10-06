<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class UnifiedRoleManagementPolicyCustomExtensionRule extends UnifiedRoleManagementPolicyRule implements Parsable 
{
    /**
     * Instantiates a new UnifiedRoleManagementPolicyCustomExtensionRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.unifiedRoleManagementPolicyCustomExtensionRule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleManagementPolicyCustomExtensionRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleManagementPolicyCustomExtensionRule {
        return new UnifiedRoleManagementPolicyCustomExtensionRule();
    }

    /**
     * Gets the customAttributes property value. The customAttributes property
     * @return array<string>|null
    */
    public function getCustomAttributes(): ?array {
        $val = $this->getBackingStore()->get('customAttributes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customAttributes'");
    }

    /**
     * Gets the customExtensionId property value. The customExtensionId property
     * @return string|null
    */
    public function getCustomExtensionId(): ?string {
        $val = $this->getBackingStore()->get('customExtensionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customExtensionId'");
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'customAttributes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setCustomAttributes($val);
            },
            'customExtensionId' => fn(ParseNode $n) => $o->setCustomExtensionId($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isEnabled property value. The isEnabled property
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnabled'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('customAttributes', $this->getCustomAttributes());
        $writer->writeStringValue('customExtensionId', $this->getCustomExtensionId());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
    }

    /**
     * Sets the customAttributes property value. The customAttributes property
     * @param array<string>|null $value Value to set for the customAttributes property.
    */
    public function setCustomAttributes(?array $value): void {
        $this->getBackingStore()->set('customAttributes', $value);
    }

    /**
     * Sets the customExtensionId property value. The customExtensionId property
     * @param string|null $value Value to set for the customExtensionId property.
    */
    public function setCustomExtensionId(?string $value): void {
        $this->getBackingStore()->set('customExtensionId', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isEnabled property value. The isEnabled property
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

}
