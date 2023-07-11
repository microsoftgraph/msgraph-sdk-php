<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class MicrosoftAuthenticatorAuthenticationMethodConfiguration extends AuthenticationMethodConfiguration implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new microsoftAuthenticatorAuthenticationMethodConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.microsoftAuthenticatorAuthenticationMethodConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MicrosoftAuthenticatorAuthenticationMethodConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MicrosoftAuthenticatorAuthenticationMethodConfiguration {
        return new MicrosoftAuthenticatorAuthenticationMethodConfiguration();
    }

    /**
     * Gets the featureSettings property value. A collection of Microsoft Authenticator settings such as application context and location context, and whether they are enabled for all users or specific users only.
     * @return MicrosoftAuthenticatorFeatureSettings|null
    */
    public function getFeatureSettings(): ?MicrosoftAuthenticatorFeatureSettings {
        $val = $this->getBackingStore()->get('featureSettings');
        if (is_null($val) || $val instanceof MicrosoftAuthenticatorFeatureSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'featureSettings'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'featureSettings' => fn(ParseNode $n) => $o->setFeatureSettings($n->getObjectValue([MicrosoftAuthenticatorFeatureSettings::class, 'createFromDiscriminatorValue'])),
            'includeTargets' => fn(ParseNode $n) => $o->setIncludeTargets($n->getCollectionOfObjectValues([MicrosoftAuthenticatorAuthenticationMethodTarget::class, 'createFromDiscriminatorValue'])),
            'isSoftwareOathEnabled' => fn(ParseNode $n) => $o->setIsSoftwareOathEnabled($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the includeTargets property value. A collection of groups that are enabled to use the authentication method. Expanded by default.
     * @return array<MicrosoftAuthenticatorAuthenticationMethodTarget>|null
    */
    public function getIncludeTargets(): ?array {
        $val = $this->getBackingStore()->get('includeTargets');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MicrosoftAuthenticatorAuthenticationMethodTarget::class);
            /** @var array<MicrosoftAuthenticatorAuthenticationMethodTarget>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'includeTargets'");
    }

    /**
     * Gets the isSoftwareOathEnabled property value. The isSoftwareOathEnabled property
     * @return bool|null
    */
    public function getIsSoftwareOathEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isSoftwareOathEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSoftwareOathEnabled'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('featureSettings', $this->getFeatureSettings());
        $writer->writeCollectionOfObjectValues('includeTargets', $this->getIncludeTargets());
        $writer->writeBooleanValue('isSoftwareOathEnabled', $this->getIsSoftwareOathEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the featureSettings property value. A collection of Microsoft Authenticator settings such as application context and location context, and whether they are enabled for all users or specific users only.
     * @param MicrosoftAuthenticatorFeatureSettings|null $value Value to set for the featureSettings property.
    */
    public function setFeatureSettings(?MicrosoftAuthenticatorFeatureSettings $value): void {
        $this->getBackingStore()->set('featureSettings', $value);
    }

    /**
     * Sets the includeTargets property value. A collection of groups that are enabled to use the authentication method. Expanded by default.
     * @param array<MicrosoftAuthenticatorAuthenticationMethodTarget>|null $value Value to set for the includeTargets property.
    */
    public function setIncludeTargets(?array $value): void {
        $this->getBackingStore()->set('includeTargets', $value);
    }

    /**
     * Sets the isSoftwareOathEnabled property value. The isSoftwareOathEnabled property
     * @param bool|null $value Value to set for the isSoftwareOathEnabled property.
    */
    public function setIsSoftwareOathEnabled(?bool $value): void {
        $this->getBackingStore()->set('isSoftwareOathEnabled', $value);
    }

}
