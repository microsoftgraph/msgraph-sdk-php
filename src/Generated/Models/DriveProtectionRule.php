<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DriveProtectionRule extends ProtectionRuleBase implements Parsable 
{
    /**
     * Instantiates a new DriveProtectionRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.driveProtectionRule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DriveProtectionRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DriveProtectionRule {
        return new DriveProtectionRule();
    }

    /**
     * Gets the driveExpression property value. Contains a drive expression. For examples, see driveExpression examples.
     * @return string|null
    */
    public function getDriveExpression(): ?string {
        $val = $this->getBackingStore()->get('driveExpression');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'driveExpression'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'driveExpression' => fn(ParseNode $n) => $o->setDriveExpression($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('driveExpression', $this->getDriveExpression());
    }

    /**
     * Sets the driveExpression property value. Contains a drive expression. For examples, see driveExpression examples.
     * @param string|null $value Value to set for the driveExpression property.
    */
    public function setDriveExpression(?string $value): void {
        $this->getBackingStore()->set('driveExpression', $value);
    }

}
