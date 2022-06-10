<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ParentalControlSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $countriesBlockedForMinors Specifies the two-letter ISO country codes. Access to the application will be blocked for minors from the countries specified in this list.
    */
    private ?array $countriesBlockedForMinors = null;
    
    /**
     * @var string|null $legalAgeGroupRule Specifies the legal age group rule that applies to users of the app. Can be set to one of the following values: ValueDescriptionAllowDefault. Enforces the legal minimum. This means parental consent is required for minors in the European Union and Korea.RequireConsentForPrivacyServicesEnforces the user to specify date of birth to comply with COPPA rules. RequireConsentForMinorsRequires parental consent for ages below 18, regardless of country minor rules.RequireConsentForKidsRequires parental consent for ages below 14, regardless of country minor rules.BlockMinorsBlocks minors from using the app.
    */
    private ?string $legalAgeGroupRule = null;
    
    /**
     * Instantiates a new parentalControlSettings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ParentalControlSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ParentalControlSettings {
        return new ParentalControlSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the countriesBlockedForMinors property value. Specifies the two-letter ISO country codes. Access to the application will be blocked for minors from the countries specified in this list.
     * @return array<string>|null
    */
    public function getCountriesBlockedForMinors(): ?array {
        return $this->countriesBlockedForMinors;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'countriesBlockedForMinors' => function (ParseNode $n) use ($o) { $o->setCountriesBlockedForMinors($n->getCollectionOfPrimitiveValues()); },
            'legalAgeGroupRule' => function (ParseNode $n) use ($o) { $o->setLegalAgeGroupRule($n->getStringValue()); },
        ];
    }

    /**
     * Gets the legalAgeGroupRule property value. Specifies the legal age group rule that applies to users of the app. Can be set to one of the following values: ValueDescriptionAllowDefault. Enforces the legal minimum. This means parental consent is required for minors in the European Union and Korea.RequireConsentForPrivacyServicesEnforces the user to specify date of birth to comply with COPPA rules. RequireConsentForMinorsRequires parental consent for ages below 18, regardless of country minor rules.RequireConsentForKidsRequires parental consent for ages below 14, regardless of country minor rules.BlockMinorsBlocks minors from using the app.
     * @return string|null
    */
    public function getLegalAgeGroupRule(): ?string {
        return $this->legalAgeGroupRule;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('countriesBlockedForMinors', $this->countriesBlockedForMinors);
        $writer->writeStringValue('legalAgeGroupRule', $this->legalAgeGroupRule);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the countriesBlockedForMinors property value. Specifies the two-letter ISO country codes. Access to the application will be blocked for minors from the countries specified in this list.
     *  @param array<string>|null $value Value to set for the countriesBlockedForMinors property.
    */
    public function setCountriesBlockedForMinors(?array $value ): void {
        $this->countriesBlockedForMinors = $value;
    }

    /**
     * Sets the legalAgeGroupRule property value. Specifies the legal age group rule that applies to users of the app. Can be set to one of the following values: ValueDescriptionAllowDefault. Enforces the legal minimum. This means parental consent is required for minors in the European Union and Korea.RequireConsentForPrivacyServicesEnforces the user to specify date of birth to comply with COPPA rules. RequireConsentForMinorsRequires parental consent for ages below 18, regardless of country minor rules.RequireConsentForKidsRequires parental consent for ages below 14, regardless of country minor rules.BlockMinorsBlocks minors from using the app.
     *  @param string|null $value Value to set for the legalAgeGroupRule property.
    */
    public function setLegalAgeGroupRule(?string $value ): void {
        $this->legalAgeGroupRule = $value;
    }

}
