<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PowerPlatformLockboxResourceAccessRequestAuditRecord extends AuditData implements Parsable 
{
    /**
     * Instantiates a new PowerPlatformLockboxResourceAccessRequestAuditRecord and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.powerPlatformLockboxResourceAccessRequestAuditRecord');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PowerPlatformLockboxResourceAccessRequestAuditRecord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PowerPlatformLockboxResourceAccessRequestAuditRecord {
        return new PowerPlatformLockboxResourceAccessRequestAuditRecord();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
    }

}
