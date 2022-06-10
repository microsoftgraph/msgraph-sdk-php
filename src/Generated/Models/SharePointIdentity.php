<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharePointIdentity extends Identity implements Parsable 
{
    /**
     * @var string|null $loginName The sign in name of the SharePoint identity.
    */
    private ?string $loginName = null;
    
    /**
     * Instantiates a new sharePointIdentity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharePointIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharePointIdentity {
        return new SharePointIdentity();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'loginName' => function (ParseNode $n) use ($o) { $o->setLoginName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the loginName property value. The sign in name of the SharePoint identity.
     * @return string|null
    */
    public function getLoginName(): ?string {
        return $this->loginName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('loginName', $this->loginName);
    }

    /**
     * Sets the loginName property value. The sign in name of the SharePoint identity.
     *  @param string|null $value Value to set for the loginName property.
    */
    public function setLoginName(?string $value ): void {
        $this->loginName = $value;
    }

}
