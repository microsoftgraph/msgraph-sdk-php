<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Windows10SecureAssessmentConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new Windows10SecureAssessmentConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windows10SecureAssessmentConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10SecureAssessmentConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10SecureAssessmentConfiguration {
        return new Windows10SecureAssessmentConfiguration();
    }

    /**
     * Gets the allowPrinting property value. Indicates whether or not to allow the app from printing during the test.
     * @return bool|null
    */
    public function getAllowPrinting(): ?bool {
        return $this->getBackingStore()->get('allowPrinting');
    }

    /**
     * Gets the allowScreenCapture property value. Indicates whether or not to allow screen capture capability during a test.
     * @return bool|null
    */
    public function getAllowScreenCapture(): ?bool {
        return $this->getBackingStore()->get('allowScreenCapture');
    }

    /**
     * Gets the allowTextSuggestion property value. Indicates whether or not to allow text suggestions during the test.
     * @return bool|null
    */
    public function getAllowTextSuggestion(): ?bool {
        return $this->getBackingStore()->get('allowTextSuggestion');
    }

    /**
     * Gets the configurationAccount property value. The account used to configure the Windows device for taking the test. The user can be a domain account (domain/user), an AAD account (username@tenant.com) or a local account (username).
     * @return string|null
    */
    public function getConfigurationAccount(): ?string {
        return $this->getBackingStore()->get('configurationAccount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowPrinting' => fn(ParseNode $n) => $o->setAllowPrinting($n->getBooleanValue()),
            'allowScreenCapture' => fn(ParseNode $n) => $o->setAllowScreenCapture($n->getBooleanValue()),
            'allowTextSuggestion' => fn(ParseNode $n) => $o->setAllowTextSuggestion($n->getBooleanValue()),
            'configurationAccount' => fn(ParseNode $n) => $o->setConfigurationAccount($n->getStringValue()),
            'launchUri' => fn(ParseNode $n) => $o->setLaunchUri($n->getStringValue()),
        ]);
    }

    /**
     * Gets the launchUri property value. Url link to an assessment that's automatically loaded when the secure assessment browser is launched. It has to be a valid Url (http[s]://msdn.microsoft.com/).
     * @return string|null
    */
    public function getLaunchUri(): ?string {
        return $this->getBackingStore()->get('launchUri');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowPrinting', $this->getAllowPrinting());
        $writer->writeBooleanValue('allowScreenCapture', $this->getAllowScreenCapture());
        $writer->writeBooleanValue('allowTextSuggestion', $this->getAllowTextSuggestion());
        $writer->writeStringValue('configurationAccount', $this->getConfigurationAccount());
        $writer->writeStringValue('launchUri', $this->getLaunchUri());
    }

    /**
     * Sets the allowPrinting property value. Indicates whether or not to allow the app from printing during the test.
     *  @param bool|null $value Value to set for the allowPrinting property.
    */
    public function setAllowPrinting(?bool $value): void {
        $this->getBackingStore()->set('allowPrinting', $value);
    }

    /**
     * Sets the allowScreenCapture property value. Indicates whether or not to allow screen capture capability during a test.
     *  @param bool|null $value Value to set for the allowScreenCapture property.
    */
    public function setAllowScreenCapture(?bool $value): void {
        $this->getBackingStore()->set('allowScreenCapture', $value);
    }

    /**
     * Sets the allowTextSuggestion property value. Indicates whether or not to allow text suggestions during the test.
     *  @param bool|null $value Value to set for the allowTextSuggestion property.
    */
    public function setAllowTextSuggestion(?bool $value): void {
        $this->getBackingStore()->set('allowTextSuggestion', $value);
    }

    /**
     * Sets the configurationAccount property value. The account used to configure the Windows device for taking the test. The user can be a domain account (domain/user), an AAD account (username@tenant.com) or a local account (username).
     *  @param string|null $value Value to set for the configurationAccount property.
    */
    public function setConfigurationAccount(?string $value): void {
        $this->getBackingStore()->set('configurationAccount', $value);
    }

    /**
     * Sets the launchUri property value. Url link to an assessment that's automatically loaded when the secure assessment browser is launched. It has to be a valid Url (http[s]://msdn.microsoft.com/).
     *  @param string|null $value Value to set for the launchUri property.
    */
    public function setLaunchUri(?string $value): void {
        $this->getBackingStore()->set('launchUri', $value);
    }

}
