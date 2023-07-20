<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharePointIdentity extends Identity implements Parsable 
{
    /**
     * Instantiates a new sharePointIdentity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.sharePointIdentity');
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
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'loginName' => fn(ParseNode $n) => $o->setLoginName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the loginName property value. The sign in name of the SharePoint identity.
     * @return string|null
    */
    public function getLoginName(): ?string {
        $val = $this->getBackingStore()->get('loginName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'loginName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('loginName', $this->getLoginName());
    }

    /**
     * Sets the loginName property value. The sign in name of the SharePoint identity.
     * @param string|null $value Value to set for the loginName property.
    */
    public function setLoginName(?string $value): void {
        $this->getBackingStore()->set('loginName', $value);
    }

}
