<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class X509CertificateCombinationConfiguration extends AuthenticationCombinationConfiguration implements Parsable 
{
    /**
     * Instantiates a new X509CertificateCombinationConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.x509CertificateCombinationConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return X509CertificateCombinationConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): X509CertificateCombinationConfiguration {
        return new X509CertificateCombinationConfiguration();
    }

    /**
     * Gets the allowedIssuerSkis property value. The allowedIssuerSkis property
     * @return array<string>|null
    */
    public function getAllowedIssuerSkis(): ?array {
        $val = $this->getBackingStore()->get('allowedIssuerSkis');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedIssuerSkis'");
    }

    /**
     * Gets the allowedPolicyOIDs property value. The allowedPolicyOIDs property
     * @return array<string>|null
    */
    public function getAllowedPolicyOIDs(): ?array {
        $val = $this->getBackingStore()->get('allowedPolicyOIDs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedPolicyOIDs'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedIssuerSkis' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAllowedIssuerSkis($val);
            },
            'allowedPolicyOIDs' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAllowedPolicyOIDs($val);
            },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('allowedIssuerSkis', $this->getAllowedIssuerSkis());
        $writer->writeCollectionOfPrimitiveValues('allowedPolicyOIDs', $this->getAllowedPolicyOIDs());
    }

    /**
     * Sets the allowedIssuerSkis property value. The allowedIssuerSkis property
     * @param array<string>|null $value Value to set for the allowedIssuerSkis property.
    */
    public function setAllowedIssuerSkis(?array $value): void {
        $this->getBackingStore()->set('allowedIssuerSkis', $value);
    }

    /**
     * Sets the allowedPolicyOIDs property value. The allowedPolicyOIDs property
     * @param array<string>|null $value Value to set for the allowedPolicyOIDs property.
    */
    public function setAllowedPolicyOIDs(?array $value): void {
        $this->getBackingStore()->set('allowedPolicyOIDs', $value);
    }

}
