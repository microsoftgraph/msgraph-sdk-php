<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class OnTokenIssuanceStartCustomExtension extends CustomAuthenticationExtension implements Parsable 
{
    /**
     * Instantiates a new OnTokenIssuanceStartCustomExtension and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.onTokenIssuanceStartCustomExtension');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnTokenIssuanceStartCustomExtension
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnTokenIssuanceStartCustomExtension {
        return new OnTokenIssuanceStartCustomExtension();
    }

    /**
     * Gets the claimsForTokenConfiguration property value. Collection of claims to be returned by the API called by this custom authentication extension. Used to populate claims mapping experience in Microsoft Entra admin center. Optional.
     * @return array<OnTokenIssuanceStartReturnClaim>|null
    */
    public function getClaimsForTokenConfiguration(): ?array {
        $val = $this->getBackingStore()->get('claimsForTokenConfiguration');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OnTokenIssuanceStartReturnClaim::class);
            /** @var array<OnTokenIssuanceStartReturnClaim>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'claimsForTokenConfiguration'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'claimsForTokenConfiguration' => fn(ParseNode $n) => $o->setClaimsForTokenConfiguration($n->getCollectionOfObjectValues([OnTokenIssuanceStartReturnClaim::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('claimsForTokenConfiguration', $this->getClaimsForTokenConfiguration());
    }

    /**
     * Sets the claimsForTokenConfiguration property value. Collection of claims to be returned by the API called by this custom authentication extension. Used to populate claims mapping experience in Microsoft Entra admin center. Optional.
     * @param array<OnTokenIssuanceStartReturnClaim>|null $value Value to set for the claimsForTokenConfiguration property.
    */
    public function setClaimsForTokenConfiguration(?array $value): void {
        $this->getBackingStore()->set('claimsForTokenConfiguration', $value);
    }

}
