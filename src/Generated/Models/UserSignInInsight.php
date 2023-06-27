<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserSignInInsight extends GovernanceInsight implements Parsable 
{
    /**
     * Instantiates a new UserSignInInsight and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userSignInInsight');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserSignInInsight
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserSignInInsight {
        return new UserSignInInsight();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'lastSignInDateTime' => fn(ParseNode $n) => $o->setLastSignInDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the lastSignInDateTime property value. The lastSignInDateTime property
     * @return DateTime|null
    */
    public function getLastSignInDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastSignInDateTime');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('lastSignInDateTime', $this->getLastSignInDateTime());
    }

    /**
     * Sets the lastSignInDateTime property value. The lastSignInDateTime property
     * @param DateTime|null $value Value to set for the lastSignInDateTime property.
    */
    public function setLastSignInDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSignInDateTime', $value);
    }

}
