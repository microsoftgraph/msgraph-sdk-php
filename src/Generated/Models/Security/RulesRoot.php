<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class RulesRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new RulesRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RulesRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RulesRoot {
        return new RulesRoot();
    }

    /**
     * Gets the detectionRules property value. The custom detection rules configured for the tenant.
     * @return array<DetectionRule>|null
    */
    public function getDetectionRules(): ?array {
        $val = $this->getBackingStore()->get('detectionRules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DetectionRule::class);
            /** @var array<DetectionRule>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detectionRules'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'detectionRules' => fn(ParseNode $n) => $o->setDetectionRules($n->getCollectionOfObjectValues([DetectionRule::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('detectionRules', $this->getDetectionRules());
    }

    /**
     * Sets the detectionRules property value. The custom detection rules configured for the tenant.
     * @param array<DetectionRule>|null $value Value to set for the detectionRules property.
    */
    public function setDetectionRules(?array $value): void {
        $this->getBackingStore()->set('detectionRules', $value);
    }

}
