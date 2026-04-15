<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AutoAuditingConfiguration extends Entity implements Parsable 
{
    /**
     * Instantiates a new AutoAuditingConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutoAuditingConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutoAuditingConfiguration {
        return new AutoAuditingConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isAutomatic' => fn(ParseNode $n) => $o->setIsAutomatic($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isAutomatic property value. Indicates whether automatic auditing is enabled for Defender for Identity monitoring.
     * @return bool|null
    */
    public function getIsAutomatic(): ?bool {
        $val = $this->getBackingStore()->get('isAutomatic');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAutomatic'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isAutomatic', $this->getIsAutomatic());
    }

    /**
     * Sets the isAutomatic property value. Indicates whether automatic auditing is enabled for Defender for Identity monitoring.
     * @param bool|null $value Value to set for the isAutomatic property.
    */
    public function setIsAutomatic(?bool $value): void {
        $this->getBackingStore()->set('isAutomatic', $value);
    }

}
