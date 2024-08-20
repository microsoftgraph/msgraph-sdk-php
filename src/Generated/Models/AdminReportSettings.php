<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AdminReportSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new AdminReportSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AdminReportSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AdminReportSettings {
        return new AdminReportSettings();
    }

    /**
     * Gets the displayConcealedNames property value. If set to true, all reports conceal user information such as usernames, groups, and sites. If false, all reports show identifiable information. This property represents a setting in the Microsoft 365 admin center. Required.
     * @return bool|null
    */
    public function getDisplayConcealedNames(): ?bool {
        $val = $this->getBackingStore()->get('displayConcealedNames');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayConcealedNames'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayConcealedNames' => fn(ParseNode $n) => $o->setDisplayConcealedNames($n->getBooleanValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('displayConcealedNames', $this->getDisplayConcealedNames());
    }

    /**
     * Sets the displayConcealedNames property value. If set to true, all reports conceal user information such as usernames, groups, and sites. If false, all reports show identifiable information. This property represents a setting in the Microsoft 365 admin center. Required.
     * @param bool|null $value Value to set for the displayConcealedNames property.
    */
    public function setDisplayConcealedNames(?bool $value): void {
        $this->getBackingStore()->set('displayConcealedNames', $value);
    }

}
