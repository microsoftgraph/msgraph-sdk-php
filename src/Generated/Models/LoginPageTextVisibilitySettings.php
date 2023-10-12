<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class LoginPageTextVisibilitySettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new loginPageTextVisibilitySettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LoginPageTextVisibilitySettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LoginPageTextVisibilitySettings {
        return new LoginPageTextVisibilitySettings();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'hideAccountResetCredentials' => fn(ParseNode $n) => $o->setHideAccountResetCredentials($n->getBooleanValue()),
            'hideCannotAccessYourAccount' => fn(ParseNode $n) => $o->setHideCannotAccessYourAccount($n->getBooleanValue()),
            'hideForgotMyPassword' => fn(ParseNode $n) => $o->setHideForgotMyPassword($n->getBooleanValue()),
            'hidePrivacyAndCookies' => fn(ParseNode $n) => $o->setHidePrivacyAndCookies($n->getBooleanValue()),
            'hideResetItNow' => fn(ParseNode $n) => $o->setHideResetItNow($n->getBooleanValue()),
            'hideTermsOfUse' => fn(ParseNode $n) => $o->setHideTermsOfUse($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the hideAccountResetCredentials property value. Option to hide the self-service password reset (SSPR) hyperlinks such as 'Can't access your account?', 'Forgot my password' and 'Reset it now' on the sign-in form.
     * @return bool|null
    */
    public function getHideAccountResetCredentials(): ?bool {
        $val = $this->getBackingStore()->get('hideAccountResetCredentials');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hideAccountResetCredentials'");
    }

    /**
     * Gets the hideCannotAccessYourAccount property value. Option to hide the self-service password reset (SSPR) 'Can't access your account?' hyperlink on the sign-in form.
     * @return bool|null
    */
    public function getHideCannotAccessYourAccount(): ?bool {
        $val = $this->getBackingStore()->get('hideCannotAccessYourAccount');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hideCannotAccessYourAccount'");
    }

    /**
     * Gets the hideForgotMyPassword property value. Option to hide the self-service password reset (SSPR) 'Forgot my password' hyperlink on the sign-in form.
     * @return bool|null
    */
    public function getHideForgotMyPassword(): ?bool {
        $val = $this->getBackingStore()->get('hideForgotMyPassword');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hideForgotMyPassword'");
    }

    /**
     * Gets the hidePrivacyAndCookies property value. Option to hide the 'Privacy & Cookies' hyperlink in the footer.
     * @return bool|null
    */
    public function getHidePrivacyAndCookies(): ?bool {
        $val = $this->getBackingStore()->get('hidePrivacyAndCookies');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hidePrivacyAndCookies'");
    }

    /**
     * Gets the hideResetItNow property value. Option to hide the self-service password reset (SSPR) 'reset it now' hyperlink on the sign-in form.
     * @return bool|null
    */
    public function getHideResetItNow(): ?bool {
        $val = $this->getBackingStore()->get('hideResetItNow');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hideResetItNow'");
    }

    /**
     * Gets the hideTermsOfUse property value. Option to hide the 'Terms of Use' hyperlink in the footer.
     * @return bool|null
    */
    public function getHideTermsOfUse(): ?bool {
        $val = $this->getBackingStore()->get('hideTermsOfUse');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hideTermsOfUse'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('hideAccountResetCredentials', $this->getHideAccountResetCredentials());
        $writer->writeBooleanValue('hideCannotAccessYourAccount', $this->getHideCannotAccessYourAccount());
        $writer->writeBooleanValue('hideForgotMyPassword', $this->getHideForgotMyPassword());
        $writer->writeBooleanValue('hidePrivacyAndCookies', $this->getHidePrivacyAndCookies());
        $writer->writeBooleanValue('hideResetItNow', $this->getHideResetItNow());
        $writer->writeBooleanValue('hideTermsOfUse', $this->getHideTermsOfUse());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the hideAccountResetCredentials property value. Option to hide the self-service password reset (SSPR) hyperlinks such as 'Can't access your account?', 'Forgot my password' and 'Reset it now' on the sign-in form.
     * @param bool|null $value Value to set for the hideAccountResetCredentials property.
    */
    public function setHideAccountResetCredentials(?bool $value): void {
        $this->getBackingStore()->set('hideAccountResetCredentials', $value);
    }

    /**
     * Sets the hideCannotAccessYourAccount property value. Option to hide the self-service password reset (SSPR) 'Can't access your account?' hyperlink on the sign-in form.
     * @param bool|null $value Value to set for the hideCannotAccessYourAccount property.
    */
    public function setHideCannotAccessYourAccount(?bool $value): void {
        $this->getBackingStore()->set('hideCannotAccessYourAccount', $value);
    }

    /**
     * Sets the hideForgotMyPassword property value. Option to hide the self-service password reset (SSPR) 'Forgot my password' hyperlink on the sign-in form.
     * @param bool|null $value Value to set for the hideForgotMyPassword property.
    */
    public function setHideForgotMyPassword(?bool $value): void {
        $this->getBackingStore()->set('hideForgotMyPassword', $value);
    }

    /**
     * Sets the hidePrivacyAndCookies property value. Option to hide the 'Privacy & Cookies' hyperlink in the footer.
     * @param bool|null $value Value to set for the hidePrivacyAndCookies property.
    */
    public function setHidePrivacyAndCookies(?bool $value): void {
        $this->getBackingStore()->set('hidePrivacyAndCookies', $value);
    }

    /**
     * Sets the hideResetItNow property value. Option to hide the self-service password reset (SSPR) 'reset it now' hyperlink on the sign-in form.
     * @param bool|null $value Value to set for the hideResetItNow property.
    */
    public function setHideResetItNow(?bool $value): void {
        $this->getBackingStore()->set('hideResetItNow', $value);
    }

    /**
     * Sets the hideTermsOfUse property value. Option to hide the 'Terms of Use' hyperlink in the footer.
     * @param bool|null $value Value to set for the hideTermsOfUse property.
    */
    public function setHideTermsOfUse(?bool $value): void {
        $this->getBackingStore()->set('hideTermsOfUse', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
