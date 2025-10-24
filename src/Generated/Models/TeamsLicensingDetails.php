<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamsLicensingDetails extends Entity implements Parsable 
{
    /**
     * Instantiates a new TeamsLicensingDetails and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamsLicensingDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamsLicensingDetails {
        return new TeamsLicensingDetails();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'hasTeamsLicense' => fn(ParseNode $n) => $o->setHasTeamsLicense($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the hasTeamsLicense property value. Indicates whether the user has a valid license to use Microsoft Teams.
     * @return bool|null
    */
    public function getHasTeamsLicense(): ?bool {
        $val = $this->getBackingStore()->get('hasTeamsLicense');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasTeamsLicense'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('hasTeamsLicense', $this->getHasTeamsLicense());
    }

    /**
     * Sets the hasTeamsLicense property value. Indicates whether the user has a valid license to use Microsoft Teams.
     * @param bool|null $value Value to set for the hasTeamsLicense property.
    */
    public function setHasTeamsLicense(?bool $value): void {
        $this->getBackingStore()->set('hasTeamsLicense', $value);
    }

}
