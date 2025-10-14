<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AppManagementPolicy extends PolicyBase implements Parsable 
{
    /**
     * Instantiates a new AppManagementPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.appManagementPolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppManagementPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppManagementPolicy {
        return new AppManagementPolicy();
    }

    /**
     * Gets the appliesTo property value. Collection of applications and service principals to which the policy is applied.
     * @return array<DirectoryObject>|null
    */
    public function getAppliesTo(): ?array {
        $val = $this->getBackingStore()->get('appliesTo');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appliesTo'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appliesTo' => fn(ParseNode $n) => $o->setAppliesTo($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            'restrictions' => fn(ParseNode $n) => $o->setRestrictions($n->getObjectValue([CustomAppManagementConfiguration::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isEnabled property value. Denotes whether the policy is enabled.
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
     * Gets the restrictions property value. Restrictions that apply to an application or service principal object.
     * @return CustomAppManagementConfiguration|null
    */
    public function getRestrictions(): ?CustomAppManagementConfiguration {
        $val = $this->getBackingStore()->get('restrictions');
        if (is_null($val) || $val instanceof CustomAppManagementConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restrictions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('appliesTo', $this->getAppliesTo());
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
        $writer->writeObjectValue('restrictions', $this->getRestrictions());
    }

    /**
     * Sets the appliesTo property value. Collection of applications and service principals to which the policy is applied.
     * @param array<DirectoryObject>|null $value Value to set for the appliesTo property.
    */
    public function setAppliesTo(?array $value): void {
        $this->getBackingStore()->set('appliesTo', $value);
    }

    /**
     * Sets the isEnabled property value. Denotes whether the policy is enabled.
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

    /**
     * Sets the restrictions property value. Restrictions that apply to an application or service principal object.
     * @param CustomAppManagementConfiguration|null $value Value to set for the restrictions property.
    */
    public function setRestrictions(?CustomAppManagementConfiguration $value): void {
        $this->getBackingStore()->set('restrictions', $value);
    }

}
