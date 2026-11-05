<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OAuthApplicationEntityMapping extends EntityMapping implements Parsable 
{
    /**
     * Instantiates a new OAuthApplicationEntityMapping and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.oAuthApplicationEntityMapping');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OAuthApplicationEntityMapping
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OAuthApplicationEntityMapping {
        return new OAuthApplicationEntityMapping();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'oAuthAppIdColumn' => fn(ParseNode $n) => $o->setOAuthAppIdColumn($n->getStringValue()),
        ]);
    }

    /**
     * Gets the oAuthAppIdColumn property value. Name of the detection query column that maps to the OAuth application ID of the alert entity.
     * @return string|null
    */
    public function getOAuthAppIdColumn(): ?string {
        $val = $this->getBackingStore()->get('oAuthAppIdColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'oAuthAppIdColumn'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('oAuthAppIdColumn', $this->getOAuthAppIdColumn());
    }

    /**
     * Sets the oAuthAppIdColumn property value. Name of the detection query column that maps to the OAuth application ID of the alert entity.
     * @param string|null $value Value to set for the oAuthAppIdColumn property.
    */
    public function setOAuthAppIdColumn(?string $value): void {
        $this->getBackingStore()->set('oAuthAppIdColumn', $value);
    }

}
