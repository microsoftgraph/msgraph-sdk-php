<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

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
     * Gets the appliesTo property value. The appliesTo property
     * @return array<DirectoryObject>|null
    */
    public function getAppliesTo(): ?array {
        return $this->getBackingStore()->get('appliesTo');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appliesTo' => fn(ParseNode $n) => $o->setAppliesTo($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            'restrictions' => fn(ParseNode $n) => $o->setRestrictions($n->getObjectValue([AppManagementConfiguration::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isEnabled property value. The isEnabled property
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->getBackingStore()->get('isEnabled');
    }

    /**
     * Gets the restrictions property value. The restrictions property
     * @return AppManagementConfiguration|null
    */
    public function getRestrictions(): ?AppManagementConfiguration {
        return $this->getBackingStore()->get('restrictions');
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
     * Sets the appliesTo property value. The appliesTo property
     * @param array<DirectoryObject>|null $value Value to set for the appliesTo property.
    */
    public function setAppliesTo(?array $value): void {
        $this->getBackingStore()->set('appliesTo', $value);
    }

    /**
     * Sets the isEnabled property value. The isEnabled property
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

    /**
     * Sets the restrictions property value. The restrictions property
     * @param AppManagementConfiguration|null $value Value to set for the restrictions property.
    */
    public function setRestrictions(?AppManagementConfiguration $value): void {
        $this->getBackingStore()->set('restrictions', $value);
    }

}